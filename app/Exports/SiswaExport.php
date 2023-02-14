<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class SiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $siswa = Siswa::all();
        $datas[] = [];
        $i = 1;
        foreach ($siswa as $s) {
            $i++;
            $data = [
                'no' => $i,
                'nis' => $s->nis,
                'nama' => $s->nama,
                'kelas' => $s->kelas->kelas,
                'proli' => $s->proli->proli,
            ];
            $datas[] = array_push($data);
        }
        return $datas;
    }
}
