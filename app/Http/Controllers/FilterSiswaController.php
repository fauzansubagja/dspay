<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterSiswaController extends Controller
{
    public function filter()
    {
        $siswa = Siswa::query();
        // filter by nama
        $siswa->when($request->nama, function ($query) use ($request) {
            return $query->where('nama', 'like', '%' . $request->nama . '%');
        });
        // filter by kelas
        $siswa->when($request->kelas, function ($query) use ($request) {
            return $query->where('id_kelas', 'like', '%' . $request->kelas . '%');
        });
        return response()->json([
            'siswa' => $siswa->paginate(10)
        ]);
    }
}
