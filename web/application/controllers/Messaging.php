<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messaging extends MY_Controller {

    public function index($user_id, $chat_id)
    {
		$messages = $this->test_api->get("index.php/messages_api/messages/$chat_id");

        $data['user_id'] = $user_id;
        $data['chat_id'] = $chat_id;
        $data['messages'] = is_array($messages) ? $messages : [];

        $this->load->view('messaging_view', $data);
    }

    public function send_message()
    {
        $postData = json_decode($this->input->raw_input_stream, true);
        
		$messages = $this->test_api->post("index.php/messages_api/messages/", $postData);

        //json header response
        $this->output->set_content_type('application/json')->set_output(json_encode($messages));
    }
}
