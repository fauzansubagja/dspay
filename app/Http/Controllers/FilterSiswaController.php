<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class FilterSiswaController extends Controller
{
    public function filter(Request $request)
    {
        // dd($request);
        $siswa = Siswa::query();
        // jika semua terisi
        // if ($request->nama != null && $request->kelas != null && $request->proli != null) {
        //     $siswa = Siswa::where('nama', 'like', '%' . $request->nama . '%')
        //         ->orWhere('id_kelas', 'like', '%' . $request->kelas . '%')
        //         ->orWhere('id_proli', 'like', '%' . $request->proli . '%')->get();
        // };

        // jika salah satu tak terisi
        // if ($request->nama != null) {
        //     $siswa = Siswa::where('id_kelas', 'like', '%' . $request->kelas . '%')
        //         ->orWhere('id_proli', 'like', '%' . $request->proli . '%')->get();
        // };
        // if ($request->proli != null) {
        //     $siswa = Siswa::where('nama', 'like', '%' . $request->nama . '%')
        //         ->orWhere('id_kelas', 'like', '%' . $request->kelas . '%')->get();
        // };
        // if ($request->kelas != null) {
        //     $siswa = Siswa::where('nama', 'like', '%' . $request->nama . '%')
        //         ->orWhere('id_proli', 'like', '%' . $request->proli . '%')->get();
        // };

        // jika yg terisi hanya 1
        // if ($request->kelas != null && $request->proli != null) {
        //     $siswa = Siswa::where('nama', 'like', '%' . $request->nama . '%')->get();
        // } else if ($request->nama != null && $request->proli != null) {
        //     $siswa = Siswa::where('id_kelas', 'like', '%' . $request->kelas . '%')->get();
        // } else if ($request->nama != null && $request->kelas != null) {
        //     $siswa = Siswa::where('id_proli', 'like', '%' . $request->proli . '%')->get();
        // };
        return response()->json([
            'siswa' => $siswa
        ]);
    }
}
