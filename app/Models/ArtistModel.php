<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtistModel extends Model
{
    protected $table = 'artist';
    protected $primaryKey = 'artistid';
    protected $allowedFields = [
        'adminid', 
        'artistname', 
        'artistmno', 
        'artistemail', 
        'artistaddress', 
        'artistexperience', 
        'artistfamous'
    ];
}
