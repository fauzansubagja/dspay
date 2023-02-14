<?php

namespace App\Exports;

use App\Models\Siswa;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;

class SiswaExports implements FromQuery, WithMapping
{
    /**
    * @return \Illuminate\Database\Query\Builder
    */
    public function query(): Builder
    {
        return Siswa::with('kelas', 'proli');
    }

    public function map($siswa): array
    {
        return [
            $siswa->nis,
            $siswa->nama,
            $siswa->kelas->kelas,
            $siswa->proli->proli,
        ];
    }

    public function headings(): array
    {
        return [
            'NIS',
            'Nama Siswa',
            'Kelas',
            'Jurusan',
        ];
    }
}
