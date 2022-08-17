<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'nome' =>[
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'descricao' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'cor' =>[
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'modelo' =>[
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'ano' =>[
                'type' => 'INT',
                'constraint' => '4',
            ],
            'valor' => [
                'type' => 'double',
            ]
        ]);
        $this->forge->addkey('id', true);
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}
