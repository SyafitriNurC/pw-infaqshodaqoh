@extends('layouts.userdash')
@section('content')

    <body class="g-sidenav-show  bg-gray-200">
        <aside
            class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
            id="sidenav-main">
            <div class="sidenav-header">
                <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                    aria-hidden="true" id="iconSidenav"></i>
                <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
                    target="_blank">
                    <img src="{{ asset('assets/img/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                    {{-- <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span> --}}
                </a>
            </div>
            <hr class="horizontal light mt-4 mb-2">
            <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white " href="/user/dashboard">

                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>

                            <span class="nav-link-text ms-1">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white " href="/user/dashboard/unggah">

                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-arrow-up-from-bracket" style="color: #ffffff;"></i>
                            </div>

                            <span class="nav-link-text ms-1"> Unggah</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white " href="/user/dashboard/tagihan">

                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-money-bill-wave" style="color: #ffffff;"></i>
                            </div>

                            <span class="nav-link-text ms-1">Tagihan</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white " style="background: linear-gradient(to bottom, #16364E, #16364E)">

                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-book" style="color: #ffffff;"></i>
                            </div>

                            <span class="nav-link-text ms-1">Riwayat</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="sidenav-footer position-absolute w-100 bottom-0 ">
                <div class="mx-3">
                    <a class="btn bg-white w-100" href="{{ route('logout') }}" type="button"><i
                            class="fa-solid fa-arrow-right-from-bracket" style="color: #2E4B60;"></i>
                        <span class="nav-link-text ms-1"
                            style="color: #2E4B60; font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 14px;">Logout</span></a>
                    <div class="caption" style="padding-bottom: 24px; padding-top: 20px;">
                        <div style="display: flex; align-items: center;">
                            <img src="{{ asset('assets/img/wikrama-logo.png') }}"
                                style="width: 50px; height: auto; margin-right: 10px;">
                            <div>
                                <h4 style="color: #fff; font-size: 13px; font-weight: 300;">Di bawah naungan</h4>
                                <h4 style="color: #fff; font-size: 13px; font-weight: 500;">SMK WIKRAMA BOGOR</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <main class="main-content d-flex flex-column position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
                data-scroll="true">

                <div class="container-fluid py-3 px-3">
                    <nav aria-label="breadcrumb">
                        <h5 class="font-weight-bolder mb-0"
                            style="font-family: 'Poppins', sans-serif; color: #00233D; font-weight:bold;">Riwayat Pembayaran
                        </h5>
                        <p id="tanggal" class="mb-0"
                            style="color: #868686; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 500;">
                        </p>

                    </nav>

                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                {{-- <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "> --}}
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                {{-- <img src="../assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 "> --}}
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                            fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link text-body px-0">
                                <span
                                    style="display: none; font-family: 'Poppins', sans-serif; color: #2E4B60; font-weight: 600;"
                                    class="d-sm-inline d-none">Hai, {{ Auth::user()->nama }}&ensp;</span>
                                <i class="fa fa-user me-sm-1" style="color: #2E4B60;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="container-fluid py-4 m-0 mt-2" style="padding-right: 20px; padding-left: 20px; width: 600px;">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="border-radius-lg pt-4 pb-3"
                        style="background-color: #ffffff; opacity: 95%; box-shadow: 5px 5px 10px #c8c8c8; border-radius: 20px;">
                        <div class="row" style="padding-left: 25px;">
                            <div class="container" style="width: 40%">
                                <h4
                                    style="color: #2E4B60; font-size: 16px; font-weight: 600; font-family: 'Poppins', sans-serif;">
                                    NIS</h4>
                                <h4
                                    style="color: #2E4B60; font-size: 16px; font-weight: 600; font-family: 'Poppins', sans-serif;">
                                    Nama</h4>
                                <h4
                                    style="color: #2E4B60; font-size: 16px; font-weight: 600; font-family: 'Poppins', sans-serif;">
                                    Rombel</h4>
                                <h4
                                    style="color: #2E4B60; font-size: 16px; font-weight: 600; font-family: 'Poppins', sans-serif;">
                                    Rayon</h4>
                                <h4
                                    style="color: #2E4B60; font-size: 16px; font-weight: 600; font-family: 'Poppins', sans-serif;">
                                    Pembimbing Rayon</h4>
                            </div>
                            <div class="container" style="width: 60%">
                                <h4
                                    style="color: #2E4B60; font-size: 16px; font-weight: 600; font-family: 'Poppins', sans-serif;">
                                    : {{ Auth::user()->nis }}</h4>
                                <h4
                                    style="color: #2E4B60; font-size: 16px; font-weight: 600; font-family: 'Poppins', sans-serif;">
                                    : {{ Auth::user()->nama }}</h4>
                                <h4
                                    style="color: #2E4B60; font-size: 16px; font-weight: 600; font-family: 'Poppins', sans-serif;">
                                    : {{ Auth::user()->rombel }}</h4>
                                <h4
                                    style="color: #2E4B60; font-size: 16px; font-weight: 600; font-family: 'Poppins', sans-serif;">
                                    : {{ Auth::user()->rayon->nama_rayon }}</h4>
                                <h4
                                    style="color: #2E4B60; font-size: 16px; font-weight: 600; font-family: 'Poppins', sans-serif;">
                                    : {{ Auth::user()->rayon->pembimbing }}</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <form action="#" method="GET">
                <div class="search-bar d-flex align-items-center px-3 py-1 gap-4">
                    <i class="fa-solid fa-magnifying-glass"></i><input placeholder="Cari riwayat pembayaran disini"
                        class="w-100 border-0" type="text" style="font-family: 'Poppins', sans-serif;">
                </div>
            </form>
            <table class="table-content">
                <thead>
                    <td class="td-first">Tagihan
                    </td>
                    <td>Nominal Tagihan
                    </td>
                    <td>Tanggal Pembayaran
                    </td>
                    <td class="td-last">Status
                    </td>
                </thead>
                <tbody>
                    @foreach ($infaq as $infaqs)
                        @if ($infaqs->status == 'success')
                            <tr>
                                <td>{{ $infaqs->waktu_pembayaran }}</td>
                                <td>Rp. {{ number_format($infaqs->nominal, 0, ',', '.') }}</td>
                                <td>{{ \Carbon\Carbon::parse($infaqs->created_at)->IsoFormat('dddd, D MMMM Y') }}</td>
                                <td>
                                    <div class="button-container">
                                        <button type="button" class="btn-lunas">Sudah Dibayar</button>
                                        {{-- <span class="icon" id="icon-trigger"><i class="fa-solid fa-expand"></i></span>  --}}
                                        <button type="button" class="btn-detail" data-toggle="modal"
                                            data-target="#myModal{{ $infaqs->id }}" style="cursor: pointer;">
                                            <i class="fa-solid fa-expand"></i>
                                        </button>
                                        <!-- The Modal -->
                                        <div class="modal" id="myModal{{ $infaqs->id }}" style="z-index:9999">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h1 class="modal-title"
                                                            style="font-family: 'Poppins', sans-serif; font-size: 19px; font-weight: 900; color: #00233D;">
                                                            Detail Pembayaran</h1>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">×</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body"
                                                        style="color: #00233D; font-family: 'Poppins', sans-serif;">
                                                        <div class="container" style="padding-bottom: 20px;">
                                                            <div class="row">
                                                                <div class="column"
                                                                    style="width: 50%; display: flex; flex-direction: column; align-items: flex-start;">
                                                                    <p
                                                                        style="text-align: left; font-weight: 500; font-size: 13px; margin-bottom: 3px;">
                                                                        Diperiksa oleh</p>
                                                                    <p
                                                                        style="text-align: left; font-weight: 900; font-size: 13px; margin-bottom: 4px;">
                                                                        Admin</p>
                                                                </div>
                                                                <div class="column"
                                                                    style="width: 50%; display: flex; flex-direction: column; align-items: flex-end;">
                                                                    <p
                                                                        style="text-align: left; font-weight: 500; font-size: 13px; margin-bottom: 3px;">
                                                                        16 Mei 2023</p>
                                                                    <p
                                                                        style="text-align: left; font-weight: 500; font-size: 13px; margin-bottom: 4px; color: green;">
                                                                        LUNAS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="{{ asset('assets/bukti/'. Auth::user()->nis.'/'. $infaqs->bukti_pembayaran) }}"
                                                            style="width: 350px; height: auto; margin-bottom: 30px; text-align: center;">
                                                        <p
                                                            style="text-align: left; font-weight: 500; font-size: 14px; margin-bottom: 4px;">
                                                            Nama pengirim : {{ $infaqs->pengirim }}</p>
                                                        <p
                                                            style="text-align: left; font-weight: 500; font-size: 14px; margin-bottom: 4px;">
                                                            Tanggal Pembayaran : {{ \Carbon\Carbon::parse($infaqs->created_at)->IsoFormat('dddd, D MMMM Y') }}</p>
                                                        <p
                                                            style="text-align: left; font-weight: 500; font-size: 14px; margin-bottom: 4px;">
                                                            Nama bank : {{ $infaqs->bank }}</p>
                                                        <p
                                                            style="text-align: left; font-weight: 500; font-size: 14px; margin-bottom: 30px;">
                                                            Bulan Pembayaran : {{ $infaqs->waktu_pembayaran }}</p>

                                                        <p
                                                            style="text-align: left; font-weight: 900; font-size: 14px; margin-bottom: 4px;">
                                                            Catatan :</p>
                                                        <p
                                                            style="text-align: left; font-weight: 500; font-size: 14px; margin-bottom: 50px;">
                                                            {{ $infaqs->catatan }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    {{-- @foreach ($user as $i)
                        <tr>
                            <td>
                                {{ $i->nama }}
                            </td>
                            <td>
                                {{ $i->nis }}
                            </td>
                            <td>
                                {{ $i->role->subRole->rayon->nama_rayon }}
                            </td>
                            @foreach ($i->role->subRole->infaq as $j)
                            <td>
                                {{ $j->rombel->rombel }}
                            </td>
                            <td>
                               {{ $j->nominal }}
                            </td>
                            @endforeach
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>

            </div>
        </main>

        <!--   Core JS Files   -->
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="../assets/js/plugins/chartjs.min.js"></script>
        {{-- SCRIPT TANGGAL OTOMATIS --}}
        <script>
            var tanggalElement = document.getElementById('tanggal');
            var tanggalSaatIni = new Date();
            var namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                'November', 'Desember'
            ];

            var hariString = namaHari[tanggalSaatIni.getDay()];
            var tanggalString = tanggalSaatIni.getDate() + ' ' + namaBulan[tanggalSaatIni.getMonth()] + ' ' + tanggalSaatIni
                .getFullYear();
            tanggalElement.innerText = hariString + ', ' + tanggalString;
        </script>

        <script>
            var ctx = document.getElementById("chart-bars").getContext("2d");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["M", "T", "W", "T", "F", "S", "S"],
                    datasets: [{
                        label: "Sales",
                        tension: 0.4,
                        borderWidth: 0,
                        borderRadius: 4,
                        borderSkipped: false,
                        backgroundColor: "rgba(255, 255, 255, .8)",
                        data: [50, 20, 10, 22, 50, 10, 40],
                        maxBarThickness: 6
                    }, ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Poppins",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                                color: "#fff"
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });


            var ctx2 = document.getElementById("chart-line").getContext("2d");

            new Chart(ctx2, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Mobile apps",
                        tension: 0,
                        borderWidth: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "rgba(255, 255, 255, .8)",
                        pointBorderColor: "transparent",
                        borderColor: "rgba(255, 255, 255, .8)",
                        borderColor: "rgba(255, 255, 255, .8)",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                        maxBarThickness: 6

                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });

            var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

            new Chart(ctx3, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Mobile apps",
                        tension: 0,
                        borderWidth: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "rgba(255, 255, 255, .8)",
                        pointBorderColor: "transparent",
                        borderColor: "rgba(255, 255, 255, .8)",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                        maxBarThickness: 6

                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: '#f8f9fa',
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });
        </script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
    </body>
@endsection
