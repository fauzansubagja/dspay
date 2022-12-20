@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Kelas</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">List</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Kelas</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kelas.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Nama Kelas</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror"
                                        name="nama_kelas">
                                    @error('nama_kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                            <button class="btn btn-danger btn-block" type="submit">Batal</button>
                            </form>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection