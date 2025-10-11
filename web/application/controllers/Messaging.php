<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messaging extends MY_Controller {

    public function index($user_id, $chat_id)
    {
        $data['user_id'] = $user_id;
        $data['chat_id'] = $chat_id;
        // Load messages for that chat
		$messages = $this->test_api->get('index.php/messages_api/messages');
        echo json_encode($this->test_api->debug());

        // $this->load->view('messaging_view', $data);
    }
}
