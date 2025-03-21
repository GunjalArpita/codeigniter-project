<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtistartmediumModel extends Model
{
    protected $table = 'artistartmedium';
    protected $primaryKey = ['artistid', 'artmediumid']; // Composite Key

    protected $allowedFields = ['artistid', 'artmediumid'];
}
