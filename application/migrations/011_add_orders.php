<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_orders extends CI_Migration
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
            'user_id' => array(
                'type' => 'INT',
                'constraint' => '255'
            ),
            'payment_method' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE
            ),
            'delivery_method' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE
            ),
            'total_amount' => array(
                'type' => 'DOUBLE',
                'constraint' => '10,2',
            ),
            'payment_json' => array(
                'type' => 'JSON',
            ),
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'status_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE
            )
        ));

        
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('orders');
    }

    public function down()
    {
        $this->dbforge->drop_table('orders');
    }
}
