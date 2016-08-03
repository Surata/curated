<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller
{

	public function index()
	{
		$this->load->library('migration');

		if ($this->migration->current() === FALSE)
		{
			show_error($this->migration->error_string());
		}
	}

	public function create($name)
	{
		$content = "<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_" . ucfirst($name) . " extends CI_Migration {

    public function up()
    {
           
    }

    public function down()
    {
           
    }
}";
		date_default_timezone_set('UTC');
		$path = APPPATH .'migrations/';
		$t=time();
		$timestamps = date("Ymdhis",$t);
		$fp = fopen($path . "/" . $timestamps . "_" . $name . ".php","wb");
		fwrite($fp,$content);
		fclose($fp);
	}

}