<?php   defined('BASEPATH') OR exit('No direct script access allowed');
    // Including Phil Sturgeon's Rest Server Library in our Server file.
    require APPPATH . '/libraries/REST_Controller.php';
    class Messages_api extends REST_Controller {

        public function __construct() {
            parent::__construct();
        }

        public function messages_get() {
            $this->response([
                'status' => true,
                'data' => ['test' => 'test']
            ]);
        }
    }
?>