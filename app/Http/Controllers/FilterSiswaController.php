<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class FilterSiswaController extends Controller
{
    public function filter(Request $request)
    {
        dd($request);
        // $siswa = Siswa::query();
        // // filter by nama
        // $siswa->when($request->nama, function ($query) use ($request) {
        //     return $query->where('nama', 'like', '%' . $request->nama . '%');
        // });
        // // filter by kelas
        // $siswa->when($request->kelas, function ($query) use ($request) {
        //     return $query->where('id_kelas', 'like', '%' . $request->kelas . '%');
        // });
        // return response()->json([
        //     'siswa' => $siswa
        // ]);
    }
}
