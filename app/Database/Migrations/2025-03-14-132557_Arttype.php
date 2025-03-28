<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Arttype extends Migration
{
    public function up()
    {-
        $this->forge->addField([
            'arttypeid' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'arttypename' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('arttypeid', true); // Primary Key

        $this->forge->createTable('arttype');
    }

    public function down()
    {
        $this->forge->dropTable('arttype');
    }
}

