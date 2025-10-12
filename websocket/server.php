<?php
error_reporting(E_ALL & ~E_DEPRECATED);
require 'vendor/autoload.php';

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Chat implements MessageComponentInterface {
    protected $clients;
    protected $rooms;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
        $this->rooms = [];
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients->attach($conn);
        echo "New connection! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $data = json_decode($msg, true);
        // Expect: {"chat_id":1, "sender_id":1, "message":"Hi!"}
        $chat_id = $data['chat_id'] ?? null;

        if (isset($data['type']) && $data['type'] === 'init') {
            $this->rooms[$chat_id][$from->resourceId] = $from;
            echo "Client {$from->resourceId} joined chat {$chat_id}\n";
            return;
        }

        if ($chat_id) {
            $this->rooms[$chat_id][$from->resourceId] = $from;

            // Broadcast to others in same chat
            foreach ($this->rooms[$chat_id] as $client) {
                if ($from !== $client) {
                    $client->send(json_encode([
                        'chat_id' => $chat_id,
                        'sender_id' => $data['sender_id'],
                        'message' => $data['message'],
                        'created_at' => date('Y-m-d H:i:s')
                    ]));
                }
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
        foreach ($this->rooms as &$room) {
            unset($room[$conn->resourceId]);
        }
        $this->clients->detach($conn);
        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "Error: {$e->getMessage()}\n";
        $conn->close();
    }
}

$server = \Ratchet\Server\IoServer::factory(
    new \Ratchet\Http\HttpServer(
        new \Ratchet\WebSocket\WsServer(
            new Chat()
        )
    ),
    8080
);

echo "WebSocket server running on port 8080...\n";
$server->run();
