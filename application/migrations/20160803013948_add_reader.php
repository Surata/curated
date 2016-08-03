<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_reader extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
	    	'id' => array(
	            'type' => 'INT',
	            'constraint' => 5,
	            'unsigned' => TRUE,
	            'auto_increment' => TRUE
	        ),
	        'account_id' => array(
	            'type' => 'INT',
	            'constraint' => 5,
	            'unsigned' => TRUE,
	        )
        ));
        $this->dbforge->add_key('id', TRUE);
    	$this->dbforge->add_key('account_id', FALSE);
        $this->dbforge->create_table('reader');
    }

    public function down()
    {
    	$this->dbforge->drop_table('reader');      
    }
}