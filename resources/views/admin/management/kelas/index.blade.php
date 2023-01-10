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

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><a href="{{ route('kelas.create') }}"
                                class="open-button btn btn-primary veiwbutton" onclick="openForm()"><i
                                    class="fas fa-plus"></i>
                                Tambah</a>
                            <form action="" class="form-horizontal float-right" method="get" accept-charset="utf-8">
                                <div class="input-group input-group" style="width: 260px;">
                                    <input type="text" id="field" autofocus name="n" placeholder="Nama Kelas"
                                        class="form-control" required>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default veiwbutton"><i
                                                class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kelas</th>
                                        <th>ID Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($kelas as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_kelas}}</td>
                                        <td>{{ $data->id}}</td>
                                        <td>
                                            <a href="{{ route('kelas.edit',$data->id) }}" class="btn btn-warning"><i
                                                    class="fas fa-edit"></i></a>
                                            <form action="/kelas/{{ $data->id_kelas }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-danger"
                                                    onclick="return confirm('Apakah Anda Yakin?')"><i
                                                        class="fas fa-trash-alt"></i></button>
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
@endsection