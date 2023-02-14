<?php

namespace App\Imports;

use App\Models\Kelas;
use App\Models\Proli;
use App\Models\Siswa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class SiswaImports implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $kelas = Kelas::where('kelas', $row[3])->first();
            $proli = Proli::where('proli', $row[4])->first();
            if ($row[0] != 'NO' && $row[1] != 'NIS' && $row[2] != 'Nama Siswa' && $row[3] != 'Kelas' && $row[4] != 'Jurusan') {
                Siswa::create([
                    'nis' => $row[0],
                    'nama' => $row[1],
                    'id_kelas' => $kelas->id_kelas,
                    'id_proli' => $proli->id_proli,
                ]);
            }
        }
    }
}
