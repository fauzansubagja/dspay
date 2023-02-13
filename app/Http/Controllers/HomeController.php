<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Transaksi;
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
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswa = Siswa::find(1366)->transaksi->where('lunas', true)->count();
        dd($siswa);
        return view('dashboard.index', [
            'siswa' => Siswa::count(),
            'diterima' => Transaksi::sum('nominal_dibayar')
        ]);
    }
}
