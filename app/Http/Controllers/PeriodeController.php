<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;
use Alert;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periode = Periode::all();
        return view('admin.management.periode.index', compact('periode'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.management.periode.create');
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
            'periode' => 'required',
        ]);

        if ($validateData) :
            $store = Periode::create([
                'periode' => $request->periode,
            ]);
            if ($store) :
                Alert::success('Berhasil', 'Data Berhasil Di Tambahkan!');
            else :
                Alert::error('Terjadi Kesalahan', 'Data Gagal Di Tambahkan!');
            endif;
        endif;
        return redirect('/management/periode');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function show(Periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function edit($id_periode)
    {
        $periode = Periode::find($id_periode);
        return view('admin.management.periode.edit', [
            'periode' => $periode
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_periode)
    {
        $validateData = $request->validate([
            'periode' => 'required',
        ]);

        if ($validateData) :
            $update = Periode::findOrFail($id_periode)->update([
                'periode' => $request->periode,
            ]);
            if ($update) :
                Alert::success('Berhasil', 'Data Berhasil Di Ubah!');
            else :
                Alert::error('Terjadi Kesalahan', 'Data Gagal Di Ubah!');
            endif;
        endif;
        return redirect('/management/periode');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_periode)
    {
        Periode::find($id_periode)->delete();
        return back();
    }
}