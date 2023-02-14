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

    public function kalender()
    {
        return view('admin.kalender');
    }
}