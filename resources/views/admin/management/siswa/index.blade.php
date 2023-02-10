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
                        <div class="table">
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
                                        <select id="sel-kel" class="form-control" name="kelas">
                                            <option id="opt-kel" value="">Kelas</option>
                                            @foreach ($kelass as $kelas)
                                            <option value="{{$kelas->id_kelas}}">{{$kelas->kelas}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Jurusan</label>
                                        <select id="sel-pro" class="form-control" name="proli">
                                            <option id="opt-pro" value="">Jurusan</option>
                                            @foreach ($prolis as $proli)
                                            <option value="{{$proli->id_proli}}">{{$proli->proli}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mt-2">
                                        <button type="submit" class="btn btn-primary mt-4">Search</button>
                                    </div>
                                </div>
                            </form>
                            {{-- <form action="/management/siswa" method="get">
                                @csrf
                            </form> --}}
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
                                    @php $no = 1; @endphp
                                    @foreach ($siswa as $data)
                                    <tr class="text-center">
                                        <td>{{ $no++ }}</td>
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
@push('script-page')
{{-- Sweet Alert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>


<script type="text/javascript">
    $(document).on('click', '.show_confirm', function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: 'PERINGATAN!',
                text: 'Yakin ingin menghapus data siswa?',
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

<script>
    // delete option kelas
        $('#sel-kel').on('click', function(){
            $('#opt-kel').remove()
        })
        $('#sel-kel').on('change', function(){
            $('#opt-kel').remove()
        })
        
        // delete option proli
        $('#sel-pro').on('click', function(){
            $('#opt-pro').remove()
        })
        $('#sel-pro').on('change', function(){
            $('#opt-pro').remove()
        })
    </script>
@endpush


