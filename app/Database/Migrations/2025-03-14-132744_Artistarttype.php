<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArtistArtType extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'artistid' => [
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'   => true,
            ],
            'arttypeid' => [
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'   => true,
            ],
        ]);

        // Adding foreign keys
        $this->forge->addForeignKey('artistid', 'artist', 'artistid', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('arttypeid', 'arttype', 'arttypeid', 'CASCADE', 'CASCADE');

        // Creating the table
        $this->forge->createTable('artistarttype');
    }

    public function down()
    {
        $this->forge->dropTable('artistarttype');
    }
} 

