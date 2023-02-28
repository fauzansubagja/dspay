<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>DSPay | SMKN4BDG</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/dspay-logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feathericon.min.css') }}">
    <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="{{ asset('/plugins/datatables/datatables.min.css') }}">
    <style>
        /* input nis */
        Chrome,
        Safari,
        Edge,
        Opera input#in-nis::-webkit-outer-spin-button,
        input#in-nis::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input#in-nis::-webkit-outer-spin-button,
        input#in-nis::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input#in-no[type=number] {
            -moz-appearance: textfield;
        }

        /* input no_hp */
        Chrome,
        Safari,
        Edge,
        Opera input#in-no::-webkit-outer-spin-button,
        input#in-no::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input#in-no::-webkit-outer-spin-button,
        input#in-no::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input#in-no[type=number] {
            -moz-appearance: textfield;
        }

        .bold-header {
            font-weight: bold;
        }
    </style>

    {{-- midtrans --}}
    @can('user')
        <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-fSC6dpdJ28E0hOVV"></script>
    @endcan
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo"> <img src="{{ asset('/img/dspay-logo.png') }}" width="50"
                        height="70" alt="logo">
                    <span class="logoclass">DSPay</span> </a>
                <a href="index.html" class="logo logo-small"> <img src="{{ asset('/img/dspay-logo.png') }}"
                        alt="Logo" width="30" height="30"> </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
            <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i
                            class="fe fe-bell"></i>
                        <span class="badge badge-pill">3</span> </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a
                                href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media"> <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                                    approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media"> <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">International Software
                                                        Inc</span> has sent you a invoice in the amount of <span
                                                        class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media"> <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span>
                                                    sent
                                                    a cancellation request <span class="noti-title">Apple iPhone
                                                        XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media"> <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Mercury Software
                                                        Inc</span> added a new product <span class="noti-title">Apple
                                                        MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins
                                                        ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
                    </div>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span
                            class="user-img"><img class="rounded-circle" src="{{ asset('img/profile-img.jpg') }}"
                                width="31" alt="Soeng Souy"></span> </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm"> <img src="{{ asset('img/profile-img.jpg') }}"
                                    alt="User Image" class="avatar-img rounded-circle"> </div>
                            <div class="user-text">
                                <h6>{{ Auth::user()->username }}</h6>
                                <p class="text-muted mb-0">{{ Auth::user()->role }}</p>
                            </div>
                        </div> <a class="dropdown-item" href="{{ route('user.show',Auth::user()->id) }}">My Profile</a>
                        {{-- <a class="dropdown-item" href="settings.html">Account Settings</a> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        @can('admin')
                            <li class="{{ request()->is('dashboard*') ? 'active' : '' }}"> <a
                                    href="{{ url('/dashboard') }}"><i class="fas fa-tachometer-alt"></i>
                                    <span>Dashboard</span></a> </li>
                            <li class="list-divider"></li>
                            <li class="{{ request()->is('admin/pembayaran*') ? 'active' : '' }}"> <a
                                    href="{{ route('pembayaran.index') }}"><i class="fas fa-credit-card"></i> <span>
                                        Pembayaran
                                        Siswa
                                    </span></a>
                            </li>
                            <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> management Data
                                    </span>
                                    <span class="menu-arrow"></span></a>
                                <ul class="submenu_class" style="display: none;">
                                    <li><a class="{{ request()->is('management/periode*') ? 'active' : '' }}"
                                            href="/management/periode">Tahun Ajaran </a></li>
                                    <li><a class="{{ request()->is('management/kelas*') ? 'active' : '' }}"
                                            href="/management/kelas">
                                            Kelas </a></li>
                                    <li><a class="{{ request()->is('management/siswa*') ? 'active' : '' }}"
                                            href="/management/siswa">
                                            Siswa </a></li>
                                    <li><a class="{{ request()->is('management/jurusan*') ? 'active' : '' }}"
                                            href="/management/jurusan">
                                            Jurusan </a></li>
                                </ul>
                            </li>
                            {{-- <li class="{{ request()->is('kalender*') ? 'active' : '' }}"> <a href="/kalender"><i --}}
                                        {{-- class="fas fa-calendar-alt"></i> <span>Kalender</span></a> </li> --}}
                            </li>
                            <li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Laporan </span>
                                    <span class="menu-arrow"></span></a>
                                <ul class="submenu_class" style="display: none;">
                                    <li><a class="{{ request()->is('admin/laporan/keuangan*') ? 'active' : '' }}"
                                            href="/admin/laporan/keuangan"><span> Laporan Keuangan </span></a></li>
                                    {{-- <li><a class="{{ request()->is('admin/laporan/rekapitulasi*') ? 'active' : '' }}"
                                            href="/admin/laporan/rekapitulasi"><span> Rekapitulasi </span></a>
                                    </li> --}}
                                </ul>
                            </li>
                            <li class="{{ request()->is('management/user*') ? 'active' : '' }}"> <a
                                    href="/management/user"><i class="fas fa-users-cog"></i> <span> management Pengguna
                                    </span></a>
                            {{-- <li class="{{ request()->is('admin/cities*') ? 'active' : '' }}"> <a href=""><i
                                        class="fas fa-cog"></i>
                                    <span>Settings</span></a> </li> --}}
                            <li class="list-divider"></li>
                            <li class=""> <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i
                                        class="fas fa-sign-out-alt"></i>
                                    <span> {{ __('Logout') }}
                                    </span></a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endcan
                        @can('user')
                            <li class="{{ request()->is('admin/pembayaran*') ? 'active' : '' }}"> <a
                                    href="{{ route('pembayaran.index') }}"><i class="fas fa-credit-card"></i> <span>
                                        Pembayaran
                                        Siswa
                                    </span></a>
                            </li>
                            <li class="list-divider"></li>
                            <li class=""> <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i
                                        class="fas fa-sign-out-alt"></i>
                                    <span> {{ __('Logout') }}
                                    </span></a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endcan
                    </ul>
                </div>
            </div>
        </div>
        {{-- konten --}}
        @yield('konten')
    </div>
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('js/chart.morris.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/apexcharts') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js') }}"></script>

    <script>
        var options = {
            series: [{
                name: 'Kelas X',
                data: ['{{ @$jumlah_transaksi['kelas10'][1] }}', '{{ @$jumlah_transaksi['kelas10'][2] }}',
                    '{{ @$jumlah_transaksi['kelas10'][3] }}', '{{ @$jumlah_transaksi['kelas10'][4] }}',
                    '{{ @$jumlah_transaksi['kelas10'][5] }}', '{{ @$jumlah_transaksi['kelas10'][6] }}',
                    '{{ @$jumlah_transaksi['kelas10'][7] }}', '{{ @$jumlah_transaksi['kelas10'][8] }}',
                    '{{ @$jumlah_transaksi['kelas10'][9] }}', '{{ @$jumlah_transaksi['kelas10'][10] }}',
                    '{{ @$jumlah_transaksi['kelas10'][11] }}', '{{ @$jumlah_transaksi['kelas10'][12] }}'
                ]
            }, {
                name: 'Kelas XI',
                data: ['{{ @$jumlah_transaksi['kelas11'][1] }}', '{{ @$jumlah_transaksi['kelas11'][2] }}',
                    '{{ @$jumlah_transaksi['kelas11'][3] }}', '{{ @$jumlah_transaksi['kelas11'][4] }}',
                    '{{ @$jumlah_transaksi['kelas11'][5] }}', '{{ @$jumlah_transaksi['kelas11'][6] }}',
                    '{{ @$jumlah_transaksi['kelas11'][7] }}', '{{ @$jumlah_transaksi['kelas11'][8] }}',
                    '{{ @$jumlah_transaksi['kelas11'][9] }}', '{{ @$jumlah_transaksi['kelas11'][10] }}',
                    '{{ @$jumlah_transaksi['kelas11'][11] }}', '{{ @$jumlah_transaksi['kelas11'][12] }}'
                ]
            }, {
                name: 'Kelas XII',
                data: ['{{ @$jumlah_transaksi['kelas12'][1] }}', '{{ @$jumlah_transaksi['kelas12'][2] }}',
                    '{{ @$jumlah_transaksi['kelas12'][3] }}', '{{ @$jumlah_transaksi['kelas12'][4] }}',
                    '{{ @$jumlah_transaksi['kelas12'][5] }}', '{{ @$jumlah_transaksi['kelas12'][6] }}',
                    '{{ @$jumlah_transaksi['kelas12'][7] }}', '{{ @$jumlah_transaksi['kelas12'][8] }}',
                    '{{ @$jumlah_transaksi['kelas12'][9] }}', '{{ @$jumlah_transaksi['kelas12'][10] }}',
                    '{{ @$jumlah_transaksi['kelas12'][11] }}', '{{ @$jumlah_transaksi['kelas12'][12] }}'
                ]
            }, {
                name: 'Kelas XIII',
                data: ['{{ @$jumlah_transaksi['kelas13'][1] }}', '{{ @$jumlah_transaksi['kelas13'][2] }}',
                    '{{ @$jumlah_transaksi['kelas13'][3] }}', '{{ @$jumlah_transaksi['kelas13'][4] }}',
                    '{{ @$jumlah_transaksi['kelas13'][5] }}', '{{ @$jumlah_transaksi['kelas13'][6] }}',
                    '{{ @$jumlah_transaksi['kelas13'][7] }}', '{{ @$jumlah_transaksi['kelas13'][8] }}',
                    '{{ @$jumlah_transaksi['kelas13'][9] }}', '{{ @$jumlah_transaksi['kelas13'][10] }}',
                    '{{ @$jumlah_transaksi['kelas13'][11] }}', '{{ @$jumlah_transaksi['kelas13'][12] }}'
                ]
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                type: 'area',
                export: {
                    csv: {
                        filename: 'Pembayaran Kelas X-XIII',
                        headerCategory: 'Kelas;Bulan',
                        headerValues: ['X', 'XI', 'XII', 'XIII', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                        columnDelimiter: ';',
                        cssClass: 'bold-header'
                    },
                    png: {
                        filename: 'Pembayaran Kelas X-XIII',
                    },
                    svg: {
                        filename: 'Pembayaran Kelas X-XIII',
                    },
                }
                },
            },
            plotOptions: {
                bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['X', 'XI', 'XII', 'XIII', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            },
            yaxis: {
                title: {
                text: '(Pembayaran)'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                formatter: function(val) {
                    return "" + val + " Pembayaran"
                }
                }
            }
            };

            var categories = options.xaxis.categories;
            var newCategories = categories.slice(4).concat(categories.slice(0, 4));
            options.xaxis.categories = newCategories;

            // for (var i = 0; i < options.series.length; i++) {
            // var data = options.series[i].data;
            // var newData = data.slice(4).concat(data.slice(0, 4));
            // options.series[i].data = newData;
            // }

            options.chart.toolbar.export.csv.headerCategory = 'Bulan';
            options.chart.toolbar.export.csv.headerValues = ['X', 'XI', 'XII', 'XIII', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
    <script>
        Morris.Donut({
            element: 'chart1',
            data: [{
                    label: "Lunas",
                    value: '{{ @$lunas }}'
                },
                {
                    label: "Belum Lunas",
                    value: '{{ @$belum_lunas }}'
                },
            ],
            backgroundColor: "#f2f5fa",
            labelColor: "#009688",
            // colors: ["#00FF00", "#FF0000"],
            colors: ["#0BA462", "#39B580", "#67C69D", "#95D7BB"],
            resize: true,
            redraw: true,
        });
    </script>
    @stack('script-page')
</body>

</html>
