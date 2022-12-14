<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_order_products extends CI_Migration
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
            'order_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE
            ),
            'product_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE
            ),
            'price' => array(
                'type' => 'DOUBLE',
                'constraint' => '10,2',
            ),
            'quantity' => array(
                'type' => 'INT',
                'constraint' => '11'
            ),
            'amount' => array(
                'type' => 'DOUBLE',
                'constraint' => '10,2',
            ),
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ));


        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('order_products');
    }

    public function down()
    {
        $this->dbforge->drop_table('order_products');
    }
}
