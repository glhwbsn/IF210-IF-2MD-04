<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Menggabungkan data profil dan data tema rental mobil
        $nama = "Teddy";
        $pekerjaan = "programmer";
        $title = "SewaMobil - Rental Mobil Murah & Terpercaya";

        // Menggunakan compact untuk mengirim semua variabel ke view 'home'
        return view('home', compact('nama', 'pekerjaan', 'title'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }

    public function ListItem()
    {
        return view('ListItem');
    }

    public function galeh_view()
    {
        return view('galeh_view');
    }

    public function register()
    {
        return view('register');
    }
}