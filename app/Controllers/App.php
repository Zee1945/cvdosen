<?php

namespace App\Controllers;

use App\Models\M_listdosen;

class App extends BaseController
{
    protected $listDosen;
    public function __construct()
    {
        $this->listDosen = new M_listdosen();
    }
    public function index()
    {
        $listDosen = $this->listDosen->findAll();
        $data = [
            'title' => 'FKG UB | Index Curriculum Vitae',
            'dosen' => $listDosen
        ];
        return view('v_listDosen', $data);

        // echo "Ini class home method index";
    }
    public function detailDosen()
    {
        $data = [
            'title' => 'FKG UB | Detail Curriculum Vitae'
        ];
        echo view('v_detailDosen', $data);
    }

    public function contact()
    {
        $data = [

            'title' => 'FKG UB | Contact us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'JL. Bendungan',
                    'kota' => 'Malang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'JL. Surabaya',
                    'kota' => 'Malang'
                ]
            ]
        ];
        return view('contact', $data);
    }
}
