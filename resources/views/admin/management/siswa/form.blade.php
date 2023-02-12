@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">{{ @$siswa ? 'Edit' : 'Tambah' }} Siswa</h3>
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
                            {{-- <li class="nav-item"><a class="nav-link active" href="#solid-rounded-tab1"
                                    data-toggle="tab">Data Pribadi</a></li> --}}
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
                                                <form id="form-siswa" action="{{ @$siswa ? route('siswa.update', $siswa->id_siswa) : route('siswa.store')}}" method="POST">
                                                    @csrf
                                                    @if (@$siswa)
                                                        @method('PUT')
                                                    @endif
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>NIS</label>
                                                                <input type="number" id="in-nis" class="form-control"
                                                                    placeholder="NIS" name="nis" value="{{old('nis', @$siswa ? $siswa->nis : '')}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kelas</label>
                                                                <select id="sel-kel" class="form-control" name="kelas">
                                                                    <option id="opt-kel">Kelas</option>
                                                                    @foreach ($kelass as $kelas)
                                                                        <option value="{{$kelas->id_kelas}}" {{@$siswa && $siswa->kelas->id_kelas == $kelas->id_kelas ? 'selected' : '' }}>{{$kelas->kelas}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nama Lengkap</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Nama Lengkap" name="nama" value="{{old('nis', @$siswa ? $siswa->nama : '')}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jurusan</label>
                                                                <select id="sel-pro" class="form-control" name="proli">
                                                                    <option id="opt-pro">Jurusan</option>
                                                                    @foreach ($prolis as $proli)
                                                                        <option value="{{$proli->id_proli}}" {{@$siswa && $siswa->proli->id_proli == $proli->id_proli ? 'selected' : '' }}>{{$proli->proli}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
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
                            <a href="/management/siswa" class="btn btn-danger btn-block" >Batal</a>
                            {{-- <form action="" method="get" accept-charset="utf-8">
                            </form> --}}
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

        // delete option proli
        $('#sel-pro').on('click', function(){
            $('#opt-pro').remove()
        })
        $('#sel-pro').on('change', function(){
            $('#opt-pro').remove()
        })

        // delete option kelas
        $('#sel-kel').on('click', function(){
            $('#opt-kel').remove()
        })
        $('#sel-kel').on('change', function(){
            $('#opt-kel').remove()
        })
    </script>
@endpush