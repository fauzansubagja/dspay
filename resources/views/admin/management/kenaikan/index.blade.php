@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Kenaikan Kelas</h3>
                    <div class="alert alert-danger">Warning!... ! Jika ada siswa yang telah dibuatkan tagihan dan
                        dipindah kelasnya melalui halaman ini, maka tagihan tetap ada di kelas sebelumnya!</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <form action="" method="get" accept-charset="utf-8">
                                <div class="form-group">
                                    <div class="input-group">
                                        <select class="form-control" name="pr" onchange="this.form.submit()">
                                            <option value="">-- Pilih Kelas --</option>
                                            <option value="1">XII</option>
                                        </select>
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
                                        <th><input type="checkbox" name="checkbox"></th>
                                        <th>No</th>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
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

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <form action="" method="get" accept-charset="utf-8">
                                <div class="form-group">
                                    <div class="input-group">
                                        <select class="form-control" name="pr" onchange="this.form.submit()">
                                            <option value="">-- Pilih Kelas --</option>
                                            <option value="1">XII</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-danger btn-block" type="submit">Proses Pindah/Naik Kelas</button>
                            </form>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection