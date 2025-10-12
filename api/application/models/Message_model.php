<?php
class Message_model extends CI_Model {

    public function get_messages_by_chat($chat_id)
    {
        return $this->db->where('chat_id', $chat_id)
                        ->order_by('created_at', 'ASC')
                        ->get('messages')
                        ->result();
    }

    public function save_message($chat_id, $sender_id, $message)
    {
        $data = [
            'chat_id'    => $chat_id,
            'sender_id'  => $sender_id,
            'message'    => $message,
            'created_at' => date('Y-m-d H:i:s')
        ];
        return $this->db->insert('messages', $data);
    }
}
