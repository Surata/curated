<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_saved_feed extends CI_Migration {

    public function up()
    {
    	$this->dbforge->add_field(array(
	    	'id' => array(
	            'type' => 'INT',
	            'constraint' => 5,
	            'unsigned' => TRUE,
	            'auto_increment' => TRUE
	        ),
	        'feed_id' => array(
	            'type' => 'INT',
	            'constraint' => 5,
	            'unsigned' => TRUE,
	        ),
	        'account_id' => array(
	            'type' => 'INT',
	            'constraint' => 5,
	            'unsigned' => TRUE,
	        ),
	        'status' => array(
	            'type' => 'INT',
	            'constraint' => 5,
	            'unsigned' => TRUE,
	            'default' => 0
	        ),
	        'created_at' => array(
                 'type' => 'TIMESTAMP',
            )
        ));
        $this->dbforge->add_key('id', TRUE);
    	$this->dbforge->add_key('feed_id', FALSE);
    	$this->dbforge->add_key('account_id', FALSE);
        $this->dbforge->create_table('saved_feed');
    }

    public function down()
    {
        $this->dbforge->drop_table('saved_feed');   
    }
}