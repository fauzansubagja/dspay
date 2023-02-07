@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Siswa</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">List</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <a href="/management/siswa/create" class="btn btn-primary"><i class="fas fa-plus"></i>
                                Tambah</a>
                            <a href="add-booking.html" class="btn btn-danger"><i class="fas fa-upload"></i>
                                Upload Siswa</a>
                            <a href="add-booking.html" class="btn btn-warning"><i class="fas fa-print"></i>
                                Cetak</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="/management/siswa" method="get">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <label for="" class="form-label">Nama</label>
                                        <input name="nama" type="text" class="form-control" placeholder="Nama"
                                            value="{{isset($_GET['nama']) ? $_GET['nama'] : ''}}">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" class="form-label">Kelas</label>
                                        <input name="kelas" type="text" class="form-control" placeholder="Kelas"
                                            value="{{isset($_GET['kelas']) ? $_GET['kelas'] : ''}}">
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Jurusan</label>
                                        <select class="form-control" id="sel1" name="role">
                                            <option>User</option>
                                            <option>Administrator</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-primary mt-4">Search</button>
                                    </div>
                                </div>
                            </form>
                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($siswa as $data)
                                    <tr>
                                        {{-- {{ dd($data) }} --}}
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nis }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->kelas->kelas }} </td>
                                        <td>{{ $data->proli->proli }}</td>
                                        <td>
                                            <a href="{{ route('siswa.edit', $data->id_siswa) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            <form action="{{ route('siswa.destroy', $data->id_siswa) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection