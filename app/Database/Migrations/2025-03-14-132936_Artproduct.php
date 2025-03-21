<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArtProduct extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'artproductid' => [
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'   => true,
                'auto_increment' => true,
            ],
            'artproductname' => [
                'type'       => 'VARCHAR', // Replacing TEXT with VARCHAR
                'constraint' => 60,
                'null'       => false, // NN (Not Null)
            ],
        ]);

        // Setting Primary Key
        $this->forge->addPrimaryKey('artproductid');

        // Creating the table
        $this->forge->createTable('artproduct');
    }

    public function down()
    {
        $this->forge->dropTable('artproduct');
    }
}

