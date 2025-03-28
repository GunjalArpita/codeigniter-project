<?php

namespace App\Models;

use CodeIgniter\Model;

class ArttypeModel extends Model
{
    protected $table = 'arttype';
    protected $primaryKey = 'arttypeid';
    protected $allowedFields = ['arttypename'];
}
