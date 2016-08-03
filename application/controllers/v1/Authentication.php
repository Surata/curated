<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends MY_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('account');
    }

	public function login()
	{
		echo 'login';
	}

	public function register()
	{
		$account = $this->account->create();
	}
	
}
