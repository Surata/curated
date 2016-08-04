<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_feed_category extends CI_Migration {

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
	        'category_id' => array(
	            'type' => 'INT',
	            'constraint' => 5,
	            'unsigned' => TRUE,
	        ),
        ));
        $this->dbforge->add_key('id', TRUE);
    	$this->dbforge->add_key('feed_id', FALSE);
    	$this->dbforge->add_key('category_id', FALSE);
        $this->dbforge->create_table('feed_category');
    }

    public function down()
    {
           
    }
}