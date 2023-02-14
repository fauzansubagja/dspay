<?php

namespace App\Exports;

use App\Models\Siswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SiswaExports implements FromView, WithMapping, WithColumnWidths, WithStyles
{
    private $no = 0;

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function view(): View
    {
        $siswas = Siswa::with('kelas', 'proli')->get();

        return view('exports.siswa', [
            'siswas' => $siswas
        ]);
    }

    public function map($siswa): array
    {
        $this->no++;

        return [
            $this->no,
            $siswa->nis,
            $siswa->nama,
            $siswa->kelas->kelas,
            $siswa->proli->proli,
        ];
    }

    public function headings(): array
    {
        return [
            'NO',
            'NIS',
            'Nama Siswa',
            'Kelas',
            'Jurusan',
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 15,
            'C' => 45,
            'D' => 10,
            'E' => 10,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
        $sheet->getStyle('1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('B')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
        $sheet->getStyle('D')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('E')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
    }
}
