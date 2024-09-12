<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([ 
            'id' => [
            'type' => 'INT',
            'auto_increment' => true
            ],
            'user_id' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 100
            ],
            'due_date' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('tasks');

    }

    public function down()
    {
        $this->forge->dropTable('tasks');
    }
}
