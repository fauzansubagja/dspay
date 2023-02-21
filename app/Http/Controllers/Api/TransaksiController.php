<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\Siswa;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SiswaTransaksiPivot;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate($this->rules);
        $input = $request->all();
        $data = [
            'nominal_dibayar' => $input['nominal'],
            'tgl_bayar' => Carbon::now(),
        ];

        DB::beginTransaction();

        $create = Transaksi::create($data);
        $transaksi = Transaksi::where('id_transaksi', $create->id_transaksi)->first();

        $id_transaksi = $transaksi->id_transaksi;
        $id_siswa = Siswa::where('nis', $input['nis'])->first('id_siswa')->id_siswa;
        $dataTransaksi = [
            'id_siswa' => $id_siswa,
            'id_transaksi' => $id_transaksi
        ];
        SiswaTransaksiPivot::create($dataTransaksi);

        $jumlah_dibayar = Siswa::where('id_siswa', $id_siswa)->first()->transaksi->sum('nominal_dibayar');
        $jumlah = $transaksi->nominal_bayar - $jumlah_dibayar;
        $lunas = 0;
        if ($jumlah == 0) {
            $lunas = 1;
        }
        $dataUpdate = [
            'nominal_bayar' => $jumlah,
            'lunas' => $lunas
        ];
        $transaksi->update($dataUpdate);

        DB::commit();

        return response()->json([
            'message' => 'Success',
            'data' => Siswa::where('id_siswa', $id_siswa)->with('kelas', 'proli', 'transaksi')->first(),
            'lunas' => Siswa::where('id_siswa', $id_siswa)->first()->transaksi->where('lunas', true)->count()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($nis)
    {
        return response()->json([
            'data' => Siswa::where('nis', $nis)->with('kelas', 'proli', 'transaksi')->first(),
            'lunas' => Siswa::where('nis', $nis)->first()->transaksi->where('lunas', true)->count()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
