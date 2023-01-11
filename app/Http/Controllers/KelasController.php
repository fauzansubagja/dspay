<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Alert;
use Hash;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $kelas = Kelas::all();
        return view('admin.management.kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.management.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_kelas' => 'required',
        ]);

        if ($validateData) :
            $store = Kelas::create([
                'nama_kelas' => $request->nama_kelas
            ]);
            if ($store) :
                Alert::success('Berhasil', 'Data Berhasil Di Tambahkan!');
            else :
                Alert::error('Terjadi Kesalahan', 'Data Gagal Di Tambahkan!');
            endif;
        endif;
        return redirect('/management/kelas')->with('success', 'Data Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas, $id_kelas)
    {
        $kelas = Kelas::find($id_kelas);
        return view('admin.management.kelas.edit', [
            'kelas' => $kelas
        ]);
        // $kelas = Kelas::all();
        // return view('admin.management.kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kelas)
    {
        $validateData = $request->validate([
            'nama_kelas' => 'required',
        ]);

        if ($validateData) :
            $update = Kelas::findOrFail($id_kelas)->update([
                'nama_kelas' => $request->nama_kelas
            ]);
            if ($update) :
                Alert::success('Berhasil', 'Data Berhasil Di Ubah!');
            else :
                Alert::error('Terjadi Kesalahan', 'Data Gagal Di Ubah!');
            endif;
        endif;
        return redirect('/management/kelas')->with('success', 'Data berhasil di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $id_kelas)
    {
        if (Kelas::find($id_kelas)->delete()) :
            Alert::success('Berhasil', 'Data Berhasil di hapus');
        else :
            Alert::error('Terjadi Kesalahan', 'Data Gagal di hapus');
        endif;

        return back();
    }
}