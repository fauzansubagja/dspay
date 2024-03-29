<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $guarded = ['id_transaksi'];

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'siswa_transaksi', 'id_transaksi', 'id_siswa');
    }
}
