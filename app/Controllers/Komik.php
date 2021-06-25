<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;

    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }



    public function index()
    {
        $komik = $this->komikModel->getKomik();
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik
        ];

        // $db = \Config\DAtabase::connect();
        // $komik = $db->query("Select * from komik");
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }



        return view('komik/index', $data);

        // echo "Ini class home method index";
    }
    // Slug itu seperti id
    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];
        return view('komik/detail', $data);
    }
}
