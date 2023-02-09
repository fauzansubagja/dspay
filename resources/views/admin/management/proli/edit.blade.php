@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Edit Jurusan</h3>
                    <ul class="breadcrumb">
                        {{-- <li class="breadcrumb-item active">List</li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <form action="/management/jurusan/{{ $proli->id_proli }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Nama Jurusan</label>
                                <input type="text" class="form-control" name="proli" value="{{ $proli->proli }}">
                                {{-- <input type="text" class="form-control" placeholder="kelas" name="kelas"
                                    value="{{ $kelas->kelas }}"> --}}
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <button class="btn btn-primary btn-block" type="submit">Update</button>
                            <button class="btn btn-danger btn-block" type="submit">Batal</button>
                        </h4>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection