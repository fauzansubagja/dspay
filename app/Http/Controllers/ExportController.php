<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SiswaExport;
use Excel;
use App\Models\Siswa;

class ExportController extends Controller
{
    public function index()
    {
        dd('as');
        return Excel::download(new SiswaExport,'data-siswa.xlsx');
    }
}
