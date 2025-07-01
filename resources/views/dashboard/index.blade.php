@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('topbar')
    @include('layouts.partials.topbar')
@endsection

@section('content')
    <div class="d-flex justify-content-between mb-4 mx-xl-5">
        <div style="width: 200px">
            <div class="card text-center border-success hover-shadow" style="background-color: #3091e0">
                <div class="card-body d-flex align-items-center justify-content-center gap-3">
                    <i class="fa fa-chart-line fs-1"></i>
                    <div class="text-white">
                        <h5>Total Arsip</h5>
                        <h5 class="text-start">120</h5>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 200px">
            <div class="card text-center border-success hover-shadow bg-danger">
                <div class="card-body d-flex align-items-center justify-content-center gap-3">
                    <i class="fa-solid fa-check fs-1 text-white"></i>
                    <div class="text-white">
                        <h5>Arsip Aktif</h5>
                        <h5 class="text-start">120</h5>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 200px">
            <div class="card text-center border-success hover-shadow bg-warning">
                <div class="card-body d-flex align-items-center justify-content-center gap-3">
                    <i class="fa-solid fa-envelope-open-text fs-1"></i>
                    <div class="text-white">
                        <h5>Arsip Baru</h5>
                        <h5 class="text-start">120</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        class="card hover-shadow d-flex flex-row align-items-center justify-content-center border border-secondary-subtle mb-4 mx-xl-5">
        <div class="text-center w-50">
            <h2><strong>Selamat Datang Rumkital Ilyas Tarakan</strong></h2>
            <p>Sistem ini dirancang untuk mempermudah pengelolaan arsip surat secara lebih efisien dan terstruktur. Pengguna
                dapat menyimpan, menelusuri, serta mengakses surat dengan cepat, sehingga mendukung pengelolaan data yang
                aman, tertata, dan mudah dijangkau kapan pun diperlukan.</p>
        </div>
        <img src="{{ asset('images/archive.jpg') }}" alt="Foto Profil" class="img-fluid" style="width: 300px">
    </div>

    <div class="card container ms-0 ms-xl-5 w-50">
        <div class="card-body">
            <h3><strong>Arsip Per Bulan</strong></h3>
            <div class="chart-container" style="position: relative; height:400px;">
                {!! $chart->container() !!}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {!! $chart->script() !!}
    </div>
    </div>
@endsection
