@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Tambah Tahun Ajaran</h3>
                    <ul class="breadcrumb">
                        {{-- <li class="breadcrumb-item active">List</li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h4 class="card-title">Edit Tahun Ajaran</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="First Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Last Name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_male"
                                            value="option1" checked>
                                        <label class="form-check-label" for="aktif">
                                            Aktif
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_female"
                                            value="option2">
                                        <label class="form-check-label" for="tidak_aktif">
                                            Tidak Aktif
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted">*) Kolom Wajib Diisi.</p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <form action="" method="get" accept-charset="utf-8">
                                <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                                <button class="btn btn-danger btn-block" type="submit">Batal</button>
                            </form>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection