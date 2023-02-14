@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Good Morning {{ Auth::user()->username }}!</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">Sekolah</h3>
                                <h6 class="text-muted">SMKN 4 Bandung</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0"> <i class="fas fa-school"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 style="card_widget_header">Diterima</h3>
                                <h6 class="text-muted">{{ 'Rp. ' . number_format(@$diterima) }}</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                                        fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-dollar-sign">
                                        <line x1="12" y1="1" x2="12" y2="23"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg></span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 style="card_widget_header">Tagihan</h3>
                                <h6 class="text-muted">Rp.2.500.000.00</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0"><i class="fas fa-balance-scale"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 style="card_widget_header">Siswa</h3>
                                </h3>
                                <h6 class="text-muted">{{ $siswa }}</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0"><i class="fas fa-users"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Rekap Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Rekap Pendapatan</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart1"></div>
                    </div>
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
                            <a href="/management/siswa/export" class="btn btn-warning"><i class="fas fa-print"></i>
                                Cetak</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="datatable table table-stripped">
                                <thead>
                                    <tr class="text-center">
                                        <th>No.</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $data)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nis }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->kelas->kelas }}</td>
                                        <td>{{ $data->proli->proli }}</td>
                                        <td>
                                            <a href="{{ route('siswa.edit', $data->id_siswa) }}" class="btn btn-warning"
                                                data-toggle="tooltip" title='Edit'><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('siswa.show', $data->id_siswa) }}"
                                                class="btn btn-secondary" data-toggle="tooltip" title='Lihat'><i
                                                    class="fas fa-eye"></i></a>
                                            <form action="{{ route('siswa.destroy', $data->id_siswa) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger show_confirm"
                                                    data-toggle="tooltip" title="Delete"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    {{-- {{ $siswa->links() }} --}}
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