<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtistartproductModel extends Model
{
    protected $table = 'artistartproduct';
    protected $allowedFields = ['artistid', 'artproductid'];
}
