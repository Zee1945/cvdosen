<?php

namespace App\Controllers;

class tes extends BaseController
{
    // Method index
    public function index()
    {
        // return view('welcome_message');
        echo "Ini class Tes method index";
    }

    // Contoh memanggil salah satu method selain index
    public function coba()
    {
        // return view('welcome_message');
        echo "Ini class Tes method coba";
    }
    // Contoh method berisi parameter
    public function cobaNama($nama = '', $umur = '')
    {
        // return view('welcome_message');
        echo "Ini class Tes method $nama Saya berumur $umur";
    }
}
