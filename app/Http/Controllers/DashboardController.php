<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Semua data dikumpulkan di sini dalam satu array
        $data = [
            'pageTitle'    => 'Dashboard Rental Mobil',
            'user'         => 'Mahasiswa PBL', // Nanti bisa diganti Auth::user()->name
            'status'       => 'On Progress',
            'totalMobil'   => 12,
            'pesananAktif' => 3
        ];

        // Kirim $data ke view 'dashboard'
        return view('dashboard', $data);
    }
}