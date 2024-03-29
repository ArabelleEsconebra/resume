<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Favorites extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'vtuber_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'vtuber_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('vtuber');
    }

    public function down()
    {
        $this->forge->dropTable('vtuber');
    }
}
