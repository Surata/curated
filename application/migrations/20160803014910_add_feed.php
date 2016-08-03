<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_feed extends CI_Migration {

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
	        'content' => array(
	            'type' => 'TEXT',
	            'null' => TRUE
	        ),
	        'image_url' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE
            ),
            'video_url' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE
            ),
	        'created_at' => array(
                 'type' => 'TIMESTAMP',
            ),
            'updated_at' => array(
                 'type' => 'TIMESTAMP',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
    	$this->dbforge->add_key('curator_id', FALSE);
        $this->dbforge->create_table('feed');
    }

    public function down()
    {
        $this->dbforge->drop_table('feed');
    }
}