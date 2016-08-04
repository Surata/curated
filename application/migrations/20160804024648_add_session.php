<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_session extends CI_Migration {

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
            ),
            'accessToken' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'created_at' => array(
                 'type' => 'TIMESTAMP',
            ),
        ));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('account_id', FALSE);
        $this->dbforge->create_table('session');
    }

    public function down()
    {
           
    }
}