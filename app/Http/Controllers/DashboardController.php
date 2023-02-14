<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Proli;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'siswa' => Siswa::filter($request->nama, $request->kelas, $request->proli),
            'kelass' => Kelas::all(),
            'prolis' => Proli::all(),
        ]);
    }

    public function lunas()
    {
        $lunas = DB::table('transaksi')->where('0' == 'Lunas')->count();
        $belumlunas = DB::table('transaksi')->where('1' == 'Belum Lunas')->count();

        $data = [
            'Lunas' => $lunas,
            'Belum Lunas' => $belumlunas,
        ];

        return view('dashboard.index')->with('data', $data);
    }

    public function kalender()
    {
        return view('admin.kalender');
    }
}