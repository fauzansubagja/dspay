@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Tambah Pengguna</h3>
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
                        <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Email" name="email"
                                    value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="username"
                                    value="{{ $user->username }}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" placeholder="Password" name="password"
                                    value="{{ $user->password }}">
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="text" class="form-control" placeholder="Konfirmasi Password"
                                    name="password" value="{{ $user->password }}">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" placeholder="Deskripsi" name="user_description"
                                    value="{{ $user->user_description }}">
                            </div>
                            <div class="form-group">
                                <label>Hak Akses</label>
                                <select class="form-control" id="sel1" name="role">
                                    <option>User</option>
                                    <option>Administrator</option>
                                </select>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <div class="form-group">
                                <label>Foto</label>
                                @if ($user->user_img)
                                <img src='/user_img/{{ $user->user_img }}' class="img-thumbnail img-responsive">
                                @else
                                <img class="img-thumbnail img-responsive">
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="user_img" type="file" name="user_img"
                                    onchange="previewImage()">
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                            <button class="btn btn-danger btn-block" type="submit">Batal</button>
                        </h4>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(){
            const image = document.querySelector('#user_img')
            const imgPreview = document.querySelector('.img-thumbnail')

            imgPreview.style.display = 'dblock';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

    {{-- <script type="text/javascript">
        var readFoto = function(event){
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function(){
                var dataURL = reader.result;
                var output = document.getElementById('output');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        };
    </script> --}}
    @endsection