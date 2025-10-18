<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function index()
    {
        $this->load->view('login/login_view');
    }

    public function signup()
    {
        $this->load->view('login/signup_view');
    }
}
