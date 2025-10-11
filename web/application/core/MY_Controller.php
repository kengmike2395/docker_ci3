<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $user_id;
    public $user_type_id;
	
	function __construct()
	{
		parent::__construct();
		$app_server_api = array(
			'server' => 'http://localhost:8086/',
			'api_key' => 'REST API',
			'api_name' => 'X-API-KEY',
			'http_user' => '',
			'http_pass' => '',
			'http_auth' => 'basic'
		);

		$this->load->library('rest', $app_server_api, 'test_api');
	}	
}