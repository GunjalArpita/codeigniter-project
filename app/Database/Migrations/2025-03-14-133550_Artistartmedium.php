<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArtistArtMedium extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'artistid' => [
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'   => true,
            ],
            'artmediumid' => [
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'   => true,
            ],
        ]);

        // Setting Primary Key (Composite Key)
        $this->forge->addKey(['artistid', 'artmediumid'], true);

        // Adding Foreign Keys
        $this->forge->addForeignKey('artistid', 'artist', 'artistid', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('artmediumid', 'artmedium', 'artmediumid', 'CASCADE', 'CASCADE');

        // Creating the table
        $this->forge->createTable('artistartmedium');
    }

    public function down()
    {
        $this->forge->dropTable('artistartmedium');
    }
}
