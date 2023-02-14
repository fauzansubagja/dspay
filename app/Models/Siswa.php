<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';

    protected $guarded = ['id_siswa'];

    public function scopeFilter($query, $nama, $kelas, $proli)
    {
        if ($nama) {
            $query->where('nama', 'like', '%' . $nama . '%');
        }

        if ($kelas) {
            $query->where('id_kelas', 'like', '%' . $kelas . '%');
        }

        if ($proli) {
            $query->where('id_proli', 'like', '%' . $proli . '%');
        }

        return $query->get();
    }

    public static function getJumlahTransaksiSiswa($nama_kelas, $bulan)
    {
        return Siswa::whereHas('kelas', function ($query) use ($nama_kelas) {
            $query->where('kelas_num', $nama_kelas);
        })
            ->with(['transaksi' => function ($query) use ($bulan) {
                $query->whereMonth('tgl_bayar', '=', $bulan);
            }])
            ->get()
            ->sum(function ($siswa) {
                return $siswa->transaksi->count();
            });
    }

    public function kelas()
    {
        return $this->hasOne(kelas::class, 'id_kelas', 'id_kelas');
    }
    public function proli()
    {
        return $this->hasOne(proli::class, 'id_proli', 'id_proli');
    }
    public function transaksi()
    {
        return $this->belongsToMany(Transaksi::class, 'siswa_transaksi', 'id_siswa', 'id_transaksi');
    }
}
