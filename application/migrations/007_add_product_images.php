<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_product_images extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'product_id' => array(
                'type' => 'INT',
                'constraint' => '5',
            ),
            'image_id' => array(
                'type' => 'INT',
                'constraint' => '5'
            )
        ));

        
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('product_images');
    }

    public function down()
    {
        $this->dbforge->drop_table('product_images');
    }
}
