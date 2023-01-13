<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    protected $rules;

    public function __construct()
    {
        $this->rules = [];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.management.siswa.index', [
            'siswas' => Siswa::all(),
            'i' => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.management.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules);
        $input = $request->all();

        if ($request->hasFile('foto_siswa')) {
            $input['foto_siswa'] = $request->file('foto_siswa')->store('photo-siswa');
        }
        Siswa::create($input);
        return back()->with('success', 'Sukses Menambah Siswa!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('admin.management.siswa.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('admin.management.siswa.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate($this->rules);

        $input = $request->all();

        if ($request->hasFile('foto_siswa')) {
            if ($request->old_product_image) {
                Storage::delete($request->old_product_image);
            }
            $input['foto_siswa'] = $request->file('foto_siswa')->store('photo-siswa');
        } else {
            $input['foto_siswa'] = $siswa->foto_siswa;
        };
        $siswa->update($input);
        return back()->with('success', 'Sukses Mengubah Siswa!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Storage::delete($siswa->foto_siswa);
        $siswa->delete();
        return back()->with('success', 'Sukses Menghapus Siswa!');
    }
}