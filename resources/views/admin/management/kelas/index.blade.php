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
                                    {{-- <input type="text" id="field" autofocus name="n" placeholder="Nama Kelas"
                                        class="form-control" required>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default veiwbutton"><i
                                                class="fa fa-search"></i></button>
                                    </div> --}}
                                </div>
                            </form>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped">
                                <thead>
                                    <tr class="text-center">
                                        <th>No.</th>
                                        <th>Nama Kelas</th>
                                        <th>ID Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($kelas as $data)
                                    <tr class="text-center">
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->kelas}}</td>
                                        <td>{{ $data->id_kelas}}</td>
                                        <td>
                                            <a href="/management/kelas/{{ $data->id_kelas }}/edit"
                                                class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <form method="POST" class="d-inline"
                                                action="/management/kelas/{{ $data->id_kelas }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger show_confirm"
                                                    data-toggle="tooltip" title='Delete'><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @include('sweetalert::alert')
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
{{-- Sweet Alert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript">
    $(document).on('click', '.show_confirm', function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          Swal.fire({
            title: 'PERINGATAN!',
            text: 'Yakin ingin menghapus data kelas?',
            icon: 'warning',
            showCancelButton:true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        })
          .then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Hapus!',
                    'Data Berhasil di hapus',
                    'success'
                )
                setTimeout(() => {
                    form.submit();
                }, 100);
            }
          });
      });
  
</script>
@endsection