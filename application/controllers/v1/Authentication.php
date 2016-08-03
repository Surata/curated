<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends MY_Controller 
{
	public function login()
	{
		echo $this->params()["email"];
	}
	
}
