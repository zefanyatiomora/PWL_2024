<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'Nama: Zefanya Tiomora, NIM: 2241760118'; 
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
