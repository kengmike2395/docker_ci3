<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messaging extends MY_Controller {

    public function index($user_id, $chat_id)
    {
		$messages = $this->test_api->get('index.php/messages_api/messages', array('chat_id' => $chat_id));

        $data['user_id'] = $user_id;
        $data['chat_id'] = $chat_id;
        $data['messages'] = $messages;

        $this->load->view('messaging_view', $data);
    }
}
