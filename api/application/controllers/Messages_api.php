<?php   defined('BASEPATH') OR exit('No direct script access allowed');
    // Including Phil Sturgeon's Rest Server Library in our Server file.
    require APPPATH . '/libraries/REST_Controller.php';
    class Messages_api extends REST_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('message_model');
        }

        public function messages_get($chat_id = null) {
            if (!$chat_id) {
                return $this->response(['error' => 'Chat ID required'], REST_Controller::HTTP_BAD_REQUEST);
            }
            
            $messages = $this->message_model->get_messages_by_chat($chat_id);
            $this->response($messages, REST_Controller::HTTP_OK);
        }

        
        // POST /messages_api/messages
        public function messages_post()
        {
            $this->load->library('form_validation');

            // Define your rules
            $this->form_validation->set_rules('chat_id', 'Chat ID', 'required|integer|required');
            $this->form_validation->set_rules('sender_id', 'Sender ID', 'required|integer|required');
            $this->form_validation->set_rules('message', 'Message', 'required|min_length[1]|required');

             // Run validation
            if ($this->form_validation->run() === FALSE) {
                return $this->response([
                        'status' => 'error',
                        'errors' => $this->form_validation->error_array()
                    ], REST_Controller::HTTP_BAD_REQUEST);
            }

            $postData = $this->post();
            // Access data safely
            $chat_id   = $postData['chat_id'];
            $sender_id = $postData['sender_id'];
            $message   = $postData['message'];

            $this->message_model->save_message($chat_id, $sender_id, $message);
            return $this->response(['success' => true], REST_Controller::HTTP_OK);
        }
    }
?>