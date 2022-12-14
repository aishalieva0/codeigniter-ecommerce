<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_delivery_methods extends CI_Migration
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
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'order_id' => array(
                'type' => 'INT',
                'constraint' => '11'
            ),
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'status' => array(
                'type' => 'TINYINT',
                'constraint' => '1'
            )
        ));

        
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('delivery_methods');
    }

    public function down()
    {
        $this->dbforge->drop_table('delivery_methods');
    }
}
