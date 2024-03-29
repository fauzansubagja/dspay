@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Tahun Ajaran</h3>
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
                        <h4 class="card-title">Tambah Tahun Ajaran</h4>
                    </div>
                    <div class="card-body">
                        <form action="/management/periode/{{ $periode->id_periode }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Periode</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control @error('periode') is-invalid @enderror"
                                        name="periode" value="{{ $periode->periode }}">
                                    @error('periode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Status</label>
                                <div class="col-lg-9">
                                    <select class="form-control" id="sel1" name="status">
                                        <option>Aktif</option>
                                        <option>Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <p class="text-muted">*) Kolom Wajib Diisi.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                            <a href="/management/periode" class="btn btn-danger btn-block" type="submit">Batal</a>
                            </form>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection