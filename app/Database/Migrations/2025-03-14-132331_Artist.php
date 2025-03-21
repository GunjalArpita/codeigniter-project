<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artist extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'artistid' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'adminid' => [
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'   => true,
                'null'       => false,
            ],
            'artistname' => [
                'type'       => 'VARCHAR',
                'constraint' => 50, // Increased for full names
                'null'       => false,
            ],
            'artistmno' => [
                'type'       => 'VARCHAR',
                'constraint' => 15, // Changed from INT to VARCHAR for mobile numbers
                'null'       => false,
            ],
            'artistemail' => [
                'type'       => 'VARCHAR',
                'constraint' => 50, // Increased length for email
                'null'       => false,
            ],
            'artistaddress' => [
                'type'       => 'VARCHAR',
                'constraint' => 100, // Increased length for addresses
                'null'       => false,
            ],
            'artistexperience' => [
                'type'       => 'TINYINT', // Changed from INT(20) to TINYINT
                'constraint' => 2,
                'null'       => false,
            ],
            'artistfamous' => [
                'type'       => 'VARCHAR',
                'constraint' => 100, // Increased length
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('artistid', true); // Primary Key
        $this->forge->addForeignKey('adminid', 'admin', 'adminid', 'CASCADE', 'CASCADE'); // Foreign Key

        $this->forge->createTable('artist');
    }

    public function down()
    {
        $this->forge->dropTable('artist');
    }
}
