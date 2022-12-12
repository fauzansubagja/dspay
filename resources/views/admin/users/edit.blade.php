@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Edit Pengguna</h3>
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
                        <form action="#">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap"
                                    value="{{ $user->username }}">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" placeholder="Deskripsi"
                                    value="{{ $user->user_description }}">
                            </div>
                            <div class="form-group">
                                <label>Hak Akses</label>
                                <select class="form-control" id="sel1" name="role">
                                    @if ($user->role === "Admin")
                                    <option value="Admin" selected>Admin</option>
                                    <option value="Administrator">Administrator</option>
                                    @else
                                    <option value="Admin">Admin</option>
                                    <option value="Administrator" selected>Administrator</option>
                                    @endif
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <div class="form-group">
                                <label>Foto</label>
                                <img src="/app/img/404.jpg" class="img-thumbnail img-responsive">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="file">
                            </div>
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