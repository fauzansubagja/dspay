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

    public function kelas()
    {
        return $this->hasOne(kelas::class, 'id_kelas', 'id_kelas');
    }
    public function proli()
    {
        return $this->hasOne(proli::class, 'id_proli', 'id_proli');
    }
}
