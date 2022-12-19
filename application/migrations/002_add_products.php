<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_products extends CI_Migration
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
            'desc' => array(
                'type' => 'TEXT',
            ),
            'brand_id' => array(
                'type' => 'INT',
                'constraint' => '5',
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
            'sale_price' => array(
                'type' => 'DOUBLE',
                'constraint' => '10,2',

            ),
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'status' => array(
                'type' => 'TINYINT',
                'constraint' => '1'
            )
        ));
        
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('products');


    }

    public function down()
    {
        $this->dbforge->drop_table('products');
    }
}
