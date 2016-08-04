<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_curator_follower extends CI_Migration {

    public function up()
    {
    	$this->dbforge->add_field(array(
	    	'id' => array(
	            'type' => 'INT',
	            'constraint' => 5,
	            'unsigned' => TRUE,
	            'auto_increment' => TRUE
	        ),
	        'curator_id' => array(
	            'type' => 'INT',
	            'constraint' => 5,
	            'unsigned' => TRUE,
	        ),
	        'follower_id' => array(
	            'type' => 'INT',
	            'constraint' => 5,
	            'unsigned' => TRUE,
	        ),
        ));
        $this->dbforge->add_key('id', TRUE);
    	$this->dbforge->add_key('curator_id', FALSE);
    	$this->dbforge->add_key('follower_id', FALSE);
        $this->dbforge->create_table('curator_follower');       
    }

    public function down()
    {
           
    }
}