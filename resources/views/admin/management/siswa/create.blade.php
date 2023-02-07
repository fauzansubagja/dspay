@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Tambah Siswa</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">List</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Data Siswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nis</label>
                                                            <input type="text" class="form-control" placeholder="Nis">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kelas</label>
                                                            <input type="text" class="form-control" placeholder="Kelas">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nama Lengkap</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Nama Lengkap">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jurusan</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Jurusan">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="form-group">
                            <label class="d-block">Status</label>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <img src="/app/img/404.jpg" class="img-thumbnail img-responsive">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="file">
                        </div>
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