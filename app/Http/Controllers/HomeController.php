<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        //$data = [
          //  'nama' => 'budi',
            //'pekerjaan' => 'Developer',
        //];
        //return view('home') ->with($data);
        $nama = "Teddy";
        $pekerjaan = "programmer";
        return view('home', compact('nama', 'pekerjaan'));
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


