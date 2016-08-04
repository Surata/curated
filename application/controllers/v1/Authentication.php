<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends MY_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('authentication_service');
    }

	public function login()
	{
		echo 'login';
	}

	public function register()
	{
		$params = $this->params();
		$account = $this->authentication_service->register($params['username'], $params['email'], $params['password']);

		echo json_encode($account);
	}
	
}
