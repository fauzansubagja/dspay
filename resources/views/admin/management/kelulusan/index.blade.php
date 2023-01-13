@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Kelulusan Siswa</h3>
                    <div class="alert alert-danger">Warning!... ! Halaman ini digunakan untuk merubah status siswa
                        menjadi lulus. Pastikan siswa yang di proses adalah siswa kelas akhir.</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <select class="form-control" name="pr" onchange="this.form.submit()">
                                <option value="">-- Pilih Kelas --</option>
                                <option value="1">XII</option>
                            </select>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" name="checkbox"></th>
                                        <th>No</th>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Status Kelulusan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <form action="" method="get" accept-charset="utf-8">
                                <button class="btn btn-primary btn-block" type="submit"><i
                                        class="fas fa-chevron-right"></i> Proses Lulus</button>
                                <button class="btn btn-danger btn-block" type="submit"><i
                                        class="fas fa-chevron-left"></i> Batal Lulus</button>
                            </form>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Data Kelulusan
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" name="checkbox"></th>
                                        <th>No</th>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Status Kelulusan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
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