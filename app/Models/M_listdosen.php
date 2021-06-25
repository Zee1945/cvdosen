<?php

namespace App\Models;

use CodeIgniter\Model;

class M_listdosen extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';
    protected $useTimestamps = True;
}
