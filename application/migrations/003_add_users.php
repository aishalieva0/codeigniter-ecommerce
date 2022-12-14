<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '55'
            ),
            'surname' => array(
                'type' => 'VARCHAR',
                'constraint' => '55'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '55'
            ),
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '55'
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '55'
            ),
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'status' => array(
                'type' => 'TINYINT',
                'constraint' => '1'
            )
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
