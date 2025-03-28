<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArtistArtProduct extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'artistid' => [
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'   => true,
            ],
            'artproductid' => [
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'   => true,
            ],
        ]);

        // Setting Foreign Keys
        $this->forge->addForeignKey('artistid', 'artist', 'artistid', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('artproductid', 'artproduct', 'artproductid', 'CASCADE', 'CASCADE');

        // Creating the table
        $this->forge->createTable('artistartproduct');
    }

    public function down()
    {
        $this->forge->dropTable('artistartproduct');
    }
}

