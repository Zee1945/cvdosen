<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'komik';
    protected $primaryKey = 'id_komik';
    protected $useTimestamps = True;

    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        } else {
            return $this->where(['slug' => $slug])->first();
        }
    }
}
