<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Data dummy untuk ditampilkan di dashboard PBL kamu
        $data = [
            'pageTitle' => 'Dashboard Proyek PBL',
            'user' => 'Mahasiswa PBL', // Bisa diganti dengan Auth::user()->name jika sudah ada login
            'status' => 'On Progress'
        ];

        return view('dashboard', $data);
    }
}