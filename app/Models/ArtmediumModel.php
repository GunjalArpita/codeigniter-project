<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtmediumModel extends Model
{
    protected $table      = 'artmedium';
    protected $primaryKey = 'artmediumid';

    protected $allowedFields = ['artmediumname'];
}
