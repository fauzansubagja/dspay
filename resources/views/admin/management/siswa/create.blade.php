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
                    {{-- <div class="card-header">
                        <h4 class="card-title">Solid Rounded</h4>
                    </div> --}}
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                            <li class="nav-item"><a class="nav-link active" href="#solid-rounded-tab1"
                                    data-toggle="tab">Data Pribadi</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="#solid-rounded-tab2" data-toggle="tab">Data
                                    Sekolah</a></li>
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-tab3" data-toggle="tab">Data
                                    Keluarga</a></li> --}}
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="solid-rounded-tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form id="form-siswa" action="{{ route('siswa.store') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div class="form-group">
                                                                <label>NISN</label>
                                                                <input type="number" id="in-nisn" class="form-control"
                                                                    placeholder="NISN" name="nisn">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Lengkap</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Nama Lengkap" name="nama">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kelas</label>
                                                                <select class="form-control" name="kelas">
                                                                    <option>Kelas</option>
                                                                    @foreach ($kelass as $kelas)
                                                                        <option value="{{ $kelas->id_kelas }}">{{ $kelas->kelas }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Proli</label>
                                                                <select class="form-control" name="proli">
                                                                    <option>Proli</option>
                                                                    @foreach ($prolis as $proli)
                                                                        <option value="{{ $proli->id_proli }}">{{ $proli->proli }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            {{-- <div class="form-group">
                                                                <label class="d-block">Jenis Kelamin</label>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="gender" id="laki-laki" value="option1">
                                                                    <label class="form-check-label"
                                                                        for="laki-laki">Laki-Laki</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="gender" id="perempuan" value="option2">
                                                                    <label class="form-check-label"
                                                                        for="perempuan">Perempuan</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tempat Lahir</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Tempat Lahir">
                                                            </div> --}}
                                                            {{-- <div class="form-group">
                                                                <label>Tanggal Lahir</label>
                                                                <input type="date" class="form-control">
                                                            </div> --}}
                                                        </div>
                                                        <div class="col-md-6">
                                                            {{-- <div class="form-group">
                                                                <label>Hobi</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Hobi">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>No. Handphone</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="No Handphone">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Alamat Tempat Tinggal">
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="tab-pane" id="solid-rounded-tab2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label>NIS</label>
                                                        <input type="text" class="form-control" placeholder="NIS Siswa">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        {{-- <div class="form-group">
                            <label class="d-block">Status</label>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <img src="/app/img/404.jpg" class="img-thumbnail img-responsive">
                        </div> --}}
                        {{-- <div class="form-group">
                            <input class="form-control" type="file">
                        </div> --}}
                        <h4 class="card-title">
                            <button class="btn btn-primary btn-block mb-2" id="btn-simpan">Simpan</button>
                            <form action="" method="get" accept-charset="utf-8">
                                <button class="btn btn-danger btn-block" type="submit">Batal</button>
                            </form>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script-page')
    <script>
        $('#in-nisn').on('keyup', function () {
            if (this.value.length >= 10) {
                var textVal = $('#in-nisn').val();
                $('#in-nisn').val(textVal.substring(10, textVal.lastIndexOf('.')));    
            }
        });
        $('#btn-simpan').on('click', function () {
            $('#form-siswa').submit();
        });
    </script>
@endpush