<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
               'type'  => 'BIGINT',
               'unsigned' => true,
               'auto_increment' => true
            ],
            'control_number' => [
               'type' => 'VARCHAR',
               'constraint' => 50
            ],
            'first_name' => [
               'type' => 'VARCHAR',
               'constraint' => 100
            ],
            'last_name' => [
               'type' => 'VARCHAR',
               'constraint' => 100,
            ],
       'affiliation' => [
               'type' => 'VARCHAR',
               'constraint' => 255,
               'default' => NULL
            ],
            'address' => [
               'type' => 'TEXT',
               'default' => NULL
            ],
       'email' => [
               'type' => 'VARCHAR',
               'constraint' => 100,
            ],
       'contact_number' => [
               'type' => 'VARCHAR',
               'constraint' => 100,
               'default' => NULL
            ],
       'program_service' => [
               'type' => 'TEXT',
            ],
            'details' => [
               'type' => 'LONGTEXT',
            ],
       'status' => [
               'type' => 'ENUM',
               'constraint' => ['open', 'completed', 'terminated'],
            ],
            'remarks' => [
               'type' => 'LONGTEXT',
               'null' => false
            ],
            'concurred_at' => [
               'type' => 'DATETIME',
            ],
            'completed_at' => [
               'type' => 'DATETIME',
               'default' => NULL
            ],
       'account_id' => [
                   'type'           => 'INT',
                   'constraint'     => 5,
               ],
       'attending_personnel' => [
               'type' => 'VARCHAR',
               'constraint' => 100,
            ],
       'position' => [
               'type' => 'VARCHAR',
               'constraint' => 100,
               'default' => NULL
            ],
       'office' => [
               'type' => 'VARCHAR',
               'constraint' => 255,
               'default' => NULL
            ],
       'created_at' => [
               'type' => 'DATETIME',
            ],
       'updated_at' => [
               'type' => 'DATETIME',
            ],
            'deleted_at' => [
               'type' => 'DATETIME',
               'default' => NULL
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
