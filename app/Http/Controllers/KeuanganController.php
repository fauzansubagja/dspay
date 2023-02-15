<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Siswa;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    public function index()
    {
        $jumlahTransaksi = [
            'kelas10' => [],
            'kelas11' => [],
            'kelas12' => [],
            'kelas13' => []
        ];
        
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            $jumlahTransaksi['kelas10'][$bulan] = Siswa::getJumlahTransaksiSiswa('10', $bulan);
            $jumlahTransaksi['kelas11'][$bulan] = Siswa::getJumlahTransaksiSiswa('11', $bulan);
            $jumlahTransaksi['kelas12'][$bulan] = Siswa::getJumlahTransaksiSiswa('12', $bulan);
            $jumlahTransaksi['kelas13'][$bulan] = Siswa::getJumlahTransaksiSiswa('13', $bulan);
        }
        $jumlahTransaksi = collect($jumlahTransaksi);
        $siswa = Siswa::count();
        $diterima = Transaksi::sum('nominal_dibayar');
        $lunas = Transaksi::all()->where('lunas', true)->count();
        return view('admin.laporan.keuangan', [
            'siswa' => $siswa,
            'diterima' => $diterima,
            'ditagih' => number_format(intval(6000000 * $siswa - $diterima)),
            'jumlah_transaksi' => $jumlahTransaksi,
            'lunas' => $lunas,
            'belum_lunas' => $siswa - $lunas
        ]);
    }
}