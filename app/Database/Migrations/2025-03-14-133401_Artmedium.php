<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArtMedium extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'artmediumid' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'artmediumname' => [
                'type'       => 'VARCHAR', // Replacing TEXT with VARCHAR as per your previous requirement
                'constraint' => 255,
                'null'       => false,
            ],
        ]);

        // Setting Primary Key
        $this->forge->addKey('artmediumid', true);

        // Creating the table
        $this->forge->createTable('artmedium');
    }

    public function down()
    {
        $this->forge->dropTable('artmedium');
    }
}

