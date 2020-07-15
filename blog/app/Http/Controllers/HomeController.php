<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        $absen = Absen::all();
        $gaji = Gaji::all();
        $data = Data::all();

        return view('home', compact('pegawai', 'absen', 'gaji', 'data'));
    }
}
