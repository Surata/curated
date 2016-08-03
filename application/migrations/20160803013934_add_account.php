<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_account extends CI_Migration {

    public function up()
    {
    	$this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'password_hash' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'password_salt' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'cover' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'status' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'default' => 0
            ),
            'type' => array(
            	'type' => 'VARCHAR',
            	'constraint' => '20'
            ),
            'created_at' => array(
                 'type' => 'TIMESTAMP',
            ),
            'updated_at' => array(
                 'type' => 'TIMESTAMP',
            ),
        ));
		$this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('account');
    }

    public function down()
    {
    	$this->dbforge->drop_table('account');      
    }
}