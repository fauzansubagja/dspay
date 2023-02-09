<?php

namespace App\Http\Controllers;

use App\Models\Proli;
use Illuminate\Http\Request;
use Alert;

class ProliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proli = Proli::all();
        return view('admin.management.proli.index', compact('proli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.management.proli.create');
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
            'proli' => 'required',
        ]);

        if ($validateData) :
            $store = proli::create([
                'proli' => $request->proli
            ]);
            if ($store) :
                Alert::success('Berhasil', 'Data Berhasil Di Tambahkan!');
            else :
                Alert::error('Terjadi Kesalahan', 'Data Gagal Di Tambahkan!');
            endif;
        endif;
        return redirect('/management/jurusan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proli  $proli
     * @return \Illuminate\Http\Response
     */
    public function show(Proli $proli)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proli  $proli
     * @return \Illuminate\Http\Response
     */
    public function edit(Proli $proli, $id_proli)
    {
        $proli = Proli::find($id_proli);
        return view('admin.management.proli.edit', [
            'proli' => $proli
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proli  $proli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proli $id_proli)
    {
        $validateData = $request->validate([
            'proli' => 'required',
        ]);

        if ($validateData) :
            $update = Proli::findOrFail($id_proli)->update([
                'proli' => $request->proli
            ]);
            dd($update);
            if ($update) :
                Alert::success('Berhasil', 'Data Berhasil Di Ubah!');
            else :
                Alert::error('Terjadi Kesalahan', 'Data Gagal Di Ubah!');
            endif;
        endif;
        return redirect('/management/jurusan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proli  $proli
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proli $proli, $id_proli)
    {
        Proli::where('id_proli', $id_proli)->delete();
        return back();
    }
}