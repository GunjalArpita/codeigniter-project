<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtproductModel extends Model
{
    protected $table      = 'artproduct';
    protected $primaryKey = 'artproductid';
    protected $allowedFields = ['artproductname'];
}
