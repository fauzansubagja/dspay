<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Proli;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Alert;

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
    public function index(Request $request)
    {
        $siswa = Siswa::query();
        // filter by nama
        $siswa->when($request->nama, function ($query) use ($request) {
            return $query->where('nama', 'like', '%' . $request->nama . '%');
        });
        // filter by kelas
        $siswa->when($request->kelas, function ($query) use ($request) {
            return $query->where('kelas', 'like', '%' . $request->kelas . '%');
        });
        return view('admin.management.siswa.index', ['siswa' => $siswa->paginate(10)]);
        // return view('admin.management.siswa.index', [
        //     'siswas' => Siswa::all(),
        //     'i' => 1
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.management.siswa.form', [
            'kelass' => Kelas::all(),
            'prolis' => Proli::all()
        ]);
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
        $data = [
            'nis' => $input['nis'],
            'nama' => $input['nama'],
            'id_kelas' => $input['kelas'],
            'id_proli' => $input['proli'],
        ];
        // if ($request->hasFile('foto_siswa')) {
        //     $input['foto_siswa'] = $request->file('foto_siswa')->store('photo-siswa');
        // }

        $create = Siswa::create($data);
        if ($create) {
            alert::success('Berhasil!', "Siswa Berhasil Ditambahkan");
        } else {
            alert::error('Gagal!', "Siswa Gagal Ditambahkan");
        }
        return redirect(route('siswa.index'));
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
        return view('admin.management.siswa.form', [
            'siswa' => $siswa,
            'kelass' => Kelas::all(),
            'prolis' => Proli::all()
        ]);
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

        $data = [
            'nis' => $input['nis'],
            'nama' => $input['nama'],
            'id_kelas' => $input['kelas'],
            'id_proli' => $input['proli'],
        ];

        // if ($request->hasFile('foto_siswa')) {
        //     if ($request->old_product_image) {
        //         Storage::delete($request->old_product_image);
        //     }
        //     $input['foto_siswa'] = $request->file('foto_siswa')->store('photo-siswa');
        // } else {
        //     $input['foto_siswa'] = $siswa->foto_siswa;
        // };
        $update = $siswa->update($data);
        // dd($update);
        if ($update) {
            alert::success('Berhasil!', "Siswa Berhasil Diubah");
        } else {
            alert::error('Gagal!', "Siswa Gagal Diubah");
        }
        return redirect(route('siswa.index'));
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
