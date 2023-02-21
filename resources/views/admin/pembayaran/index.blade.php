@extends('layouts.main')
@section('konten')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h3 class="card-title float-left mt-2">Pembayaran Siswa</h3>
                    </div>
                </div>
            </div>
        </div>

        @can('admin')
        <div class="row">
            <div class="col-lg-12">
                <div class="row formtype">  
                    {{-- <div class="col-md-3">
                        <div class="form-group">
                            <label>Tahun Ajaran</label>
                            <div class="form-group">
                                <select class="form-control" id="sel1" name="sellist1">
                                    <option>Select</option>
                                    <option>2021/2022</option>
                                </select>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Cari NIS Siswa</label>
                            <input class="form-control" type="text" value="" placeholder="NIS Siswa" id="in-nis-siswa">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Search</label> 
                            <button class="btn btn-success btn-block mt-0 search_button" id="btn-cari"> Cari </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informasi Siswa <a href="add-staff.html"
                                class="btn btn-danger float-right veiwbutton">Cetak semua tagihan</a></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive">
                                    <table class="table table-nowrap mb-0">
                                        <tr>
                                            <td width="20">Nama Siswa</td>
                                            <td class="px-2">:</td>
                                            <td id="nama-siswa"></td>
                                        </tr>
                                        <tr>
                                            <td width="20">Kelas</td>
                                            <td class="px-2">:</td>
                                            <td id="kelas-siswa"></td>
                                        </tr>
                                        <tr>
                                            <td width="20">Jurusan</td>
                                            <td class="px-2">:</td>
                                            <td id="jurusan-siswa"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="col-lg-3">
                                <img src="" class="img-thumbnail img-responsive">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Transaksi Terakhir</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0" id="table-transaksi">
                                    <tr>
                                        <th>Pembayaran</th>
                                        <th>Total Belum Dibayar</th>
                                        <th>Tanggal</th>
                                        <th>Lunas</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pembayaran</h4>
                    </div>
                    <div class="card-body">
                            <div class="form-group">
                                <label>Jumlah Bayar</label>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input class="form-control" type="text" id="in-bayar">
                            </div>
                            <button class="btn btn-success btn-block" id="btn-bayar" type="button">Bayar</button>
                    </div>
                </div>
            </div>
        @endcan
        
        @can('user')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informasi Siswa <a href="add-staff.html"
                                class="btn btn-danger float-right veiwbutton">Cetak semua tagihan</a></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive">
                                    <table class="table table-nowrap mb-0">
                                        <tr>
                                            <td width="20">Nama Siswa</td>
                                            <td class="px-2">:</td>
                                            <td id="nama-siswa">{{ $user->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td width="20">Kelas</td>
                                            <td class="px-2">:</td>
                                            <td id="kelas-siswa">{{ $user->kelas->kelas }}</td>
                                        </tr>
                                        <tr>
                                            <td width="20">Jurusan</td>
                                            <td class="px-2">:</td>
                                            <td id="jurusan-siswa">{{ $user->proli->proli }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="col-lg-3">
                                <img src="" class="img-thumbnail img-responsive">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Transaksi Terakhir</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0" id="table-transaksi">
                                    <tr>
                                        <th>Pembayaran</th>
                                        <th>Total Belum Dibayar</th>
                                        <th>Tanggal</th>
                                        <th>Lunas</th>
                                    </tr>
                                    @foreach ($user->transaksi as $transaksi)
                                    <tr id="table-data">
                                        <td id="nominal-bayar"> {{ 'Rp. ' . number_format($transaksi->nominal_dibayar) }}</td> 
                                        <td id="total-belum">{{ 'Rp. ' . number_format($transaksi->nominal_bayar) }}</td>
                                        <td id="tanggal-bayar">{{ str_replace("-", "/", date("d-m-Y", strtotime($transaksi->tgl_bayar))) }}</td>
                                        <td id="lunas">
                                            @if ($transaksi->lunas == 0 )
                                                Belum Lunas
                                            @else
                                                Lunas
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pembayaran</h4>
                    </div>
                    <div class="card-body">
                            <div class="form-group">
                                <label>Jumlah Bayar</label>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input class="form-control" type="text" id="in-bayar">
                            </div>
                            <button class="btn btn-success btn-block" id="btn-bayar" type="button">Bayar</button>
                    </div>
                </div>
            </div>
        @endcan

        
        

            {{-- <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        <form id="calcu" name="calcu" method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Total</label>
                                        <input type="text" class="form-control numeric" value="" name="harga" id="harga"
                                            placeholder="" onfocus="startCalculate()" onblur="stopCalc()">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Dibayar</label>
                                        <input type="text" class="form-control numeric" value="" name="bayar" id="bayar"
                                            placeholder="" onfocus="startCalculate()" onblur="stopCalc()">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kembalian</label>
                                <input type="text" class="form-control numeric" readonly="" name="kembalian"
                                    id="kembalian" onblur="stopCalc()">
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Jenis Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                            <li class="nav-item"><a class="nav-link active" href="#solid-rounded-tab1"
                                    data-toggle="tab">Bulanan</a></li>
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-tab2"
                                    data-toggle="tab">Bebas</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="solid-rounded-tab1">
                                <table class="table table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Jenis Pembayaran</th>
                                            <th>Sisa Tagihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="solid-rounded-tab2">
                                <table class="table table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Jenis Pembayaran</th>
                                            <th>Total Tagihan</th>
                                            <th>Dibayar</th>
                                            <th>Status</th>
                                            <th>Bayar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
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
            </div> --}}
@endsection
            
@push('script-page')
    <script type="text/javascript">
        $('#btn-bayar').on('click', function () {
            if ('{{ Auth::user()->role }}' == 'User') {
                $.ajax({
                    type: "GET",
                    url: "{{ url('/pembayaran')}}/{{ Auth::user()->nis }}",
                    data: {
                        'bayar' : $('#in-bayar').val(),
                        'nama' : "{{ @$user->nama }}",
                        'email' : "{{ Auth::user()->email }}",
                        'no' : "{{ Auth::user()->no_tlp }}"
                    },
                    success: function (response) {
                        const nis = "{{ @$user->nis }}";
                        window.snap.pay(response.midToken, {
                            onSuccess: function(result){
                                alert("payment success!"); console.log(result);
                                $.ajax({
                                    type: "POST",
                                    url: "{{ url('transaksi') }}",
                                    data: {
                                        'nominal': $('#in-bayar').val(),
                                        'nis': nis,
                                        '_token': "{{ csrf_token() }}"
                                    },
                                    success: function (response) {
                                        getReplace(nis);
                                    }
                                });
                            },
                            onPending: function(result){
                                /* You may add your own implementation here */
                                alert("wating your payment!"); console.log(result);
                            },
                            onError: function(result){
                                /* You may add your own implementation here */
                                alert("payment failed!"); console.log(result);
                            },
                            onClose: function(){
                                /* You may add your own implementation here */
                                alert('you closed the popup without finishing the payment');
                            }
                        }); 
                    }
                });
            }
            $.ajax({
                type: "POST",
                url: "{{ url('transaksi') }}",
                data: {
                    'nominal': $('#in-bayar').val(),
                    'nis': $('#in-nis-siswa').val(),
                    '_token': "{{ csrf_token() }}"
                },
                success: function (response) {
                    const nis = $('#in-nis-siswa').val();
                    getReplace(nis);
                }
            });

        });
        $('#in-bayar').on('keypress', function () {
            if (event.which === 13) {
                if ('{{ Auth::user()->role }}' == 'User') {
                    $.ajax({
                        type: "GET",
                        url: "{{ url('pembayaran')}}/{{ Auth::user()->nis }}",
                        data: {
                            'bayar' : $('#in-bayar').val(),
                            'nama' : "{{ @$user->nama }}",
                            'email' : "{{ Auth::user()->email }}",
                            'no' : "{{ Auth::user()->no_tlp }}"
                        },
                        success: function (response) {
                            const nis = "{{ @$user->nis }}";
                            window.snap.pay(response.midToken, {
                                onSuccess: function(result){
                                    alert("payment success!"); console.log(result);
                                    $.ajax({
                                        type: "POST",
                                        url: "{{ url('transaksi') }}",
                                        data: {
                                            'nominal': $('#in-bayar').val(),
                                            'nis': nis,
                                            '_token': "{{ csrf_token() }}"
                                        },
                                        success: function (response) {
                                            getReplace(nis);
                                        }
                                    });
                                },
                                onPending: function(result){
                                    /* You may add your own implementation here */
                                    alert("wating your payment!"); console.log(result);
                                },
                                onError: function(result){
                                    /* You may add your own implementation here */
                                    alert("payment failed!"); console.log(result);
                                },
                                onClose: function(){
                                    /* You may add your own implementation here */
                                    alert('you closed the popup without finishing the payment');
                                }
                            }); 
                        }
                    });
                }
                $.ajax({
                    type: "POST",
                    url: "{{ url('transaksi') }}",
                    data: {
                        'nominal': $('#in-bayar').val(),
                        'nis': $('#in-nis-siswa').val(),
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        const nis = $('#in-nis-siswa').val();
                        getReplace(nis);
                    }
                });
            }

        });

        $(document).on('click', '#btn-cari', function () {
            const nis = $('#in-nis-siswa').val();
            getReplace(nis)
        });
        $(document).on('keypress', '#in-nis-siswa', function () {
            if (event.which === 13) {
                const nis = $('#in-nis-siswa').val();
                getReplace(nis)
            }
        });
        
        function getReplace(nis) {
            const table = document.querySelectorAll('#table-data');
            $.each(table, function (idx, table) { 
                    $(table).remove();
            });
            $.ajax({
                type: "GET",
                url: "{{ url('transaksi') }}/" + nis,
                success: function (response) {
                    $('#nama-siswa').text(response.data.nama)
                    $('#kelas-siswa').text(response.data.kelas.kelas)
                    $('#jurusan-siswa').text(response.data.proli.proli)
                    const count = response.data.transaksi.length;

                    $.each(response.data.transaksi, function (idx, transaksi) {
                        let rows = '';
                        const tgl = new Date(transaksi.tgl_bayar);
                        const tgl_baru = tgl.toLocaleDateString("id-ID", {
                            day: "2-digit",
                            month: "2-digit",
                            year: "numeric"
                        });
                        let lunas = 0;
                        if (transaksi.lunas == 0) {
                            lunas = "Belum Lunas";
                        } else if (transaksi.lunas == 1) {
                            lunas = "Lunas"
                        }
                        const nominalBayar = transaksi.nominal_bayar.toLocaleString();
                        const nominalDibayar = transaksi.nominal_dibayar.toLocaleString();

                        rows += 
                                '<tr id="table-data">'+
                                    '<td id="nominal-bayar"> '+ 'Rp. ' + nominalDibayar +' </td>' +
                                    '<td id="total-belum">'+ 'Rp. ' + nominalBayar +'</td>'+
                                    '<td id="tanggal-bayar">'+ tgl_baru +'</td>'+
                                    '<td id="lunas">'+ lunas +'</td>'+
                                '</tr>';
                        $('#table-transaksi').append(rows)
                    });
            }
            });
        }
  </script>
@endpush












            {{-- <script type="text/javascript">
                function startCalculate(){
				interval=setInterval("Calculate()",10);
			}

			function Calculate() {
									var numberHarga = $('#harga').val(); // a string
									numberHarga = numberHarga.replace(/\D/g, '');
									numberHarga = parseInt(numberHarga, 10);

									var numberBayar = $('#bayar').val(); // a string
									numberBayar = numberBayar.replace(/\D/g, '');
									numberBayar = parseInt(numberBayar, 10);

									var total = numberBayar - numberHarga;
									$('#kembalian').val(total);
								}

								function stopCalc(){
									clearInterval(interval);
								}
            </script>
            <script>
                $(document).ready(function() {
									$("#selectall").change(function() {
										$(".checkbox").prop('checked', $(this).prop("checked"));
									});
								});
            </script>

            <script type="text/javascript">
                (function(a){
									a.createModal=function(b){
										defaults={
											title:"",message:"Your Message Goes Here!",closeButton:true,scrollable:false
										};
										var b=a.extend({},defaults,b);
										var c=(b.scrollable===true)?'style="max-height: 420px;overflow-y: auto;"':"";
										html='<div class="modal fade" id="myModal">';
										html+='<div class="modal-dialog">';
										html+='<div class="modal-content">';
										html+='<div class="modal-header">';
										html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>';
										if(b.title.length>0){
											html+='<h4 class="modal-title">'+b.title+"</h4>"
										}
										html+="</div>";
										html+='<div class="modal-body" '+c+">";
										html+=b.message;
										html+="</div>";
										html+='<div class="modal-footer">';
										if(b.closeButton===true){
											html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>'
										}
										html+="</div>";
										html+="</div>";
										html+="</div>";
										html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){
											a(this).remove()})}})(jQuery);

/*
* Here is how you use it
*/
$(function(){    
	$('.view-cicilan').on('click',function(){
		var link = $(this).attr('href');      
		var iframe = '<object type="text/html" data="'+link+'" width="100%" height="350">No Support</object>'
		$.createModal({
			title:'Lihat Pembayaran/Ciiclan',
			message: iframe,
			closeButton:true,
			scrollable:false
		});
		return false;        
	});    
});
            </script> --}}