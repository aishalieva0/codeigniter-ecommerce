<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_images extends CI_Migration
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
            'product_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE
            ),
            'path' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'main' => array(
                'type' => 'TINYINT',
                'constraint' => '1'
            ),
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ));


        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('images');
    }

    public function down()
    {
        $this->dbforge->drop_table('images');
    }
}
