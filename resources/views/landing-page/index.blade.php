@extends('layouts.base', ['title' => 'Rumkital Ilyas Tarakan'])

@section('topbar')
    @include('layouts.partials.topbar')
@endsection

@section('content')
    <section class="container-fluid" style="background-color: #e2e2e3;">
        <div class="container-lg">

            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 text-center text-md-start d-flex gap-3 flex-column">
                    <h2 class="fw-bold">Selamat Datang di Sistem Informasi Arsip Surat RSIAL Tarakan</h2>
                    <p>Sistem untuk membantu Anda mengelola arsip surat dengan lebih mudah dan terstruktur. Anda dapat
                        menyimpan,
                        mencari, dan mengakses surat dengan cepat serta menjaga keamanan data dengan optimal</p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-primary rounded-3 px-lg-5 py-lg-3">Contact Us</button>

                        <a href="/dashboard" class="btn btn-outline-light-blue rounded-3 px-lg-5 py-lg-3">View More</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/archive-hero.png') }}" alt="Archive" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">

            <div class="row gy-5 gx-md-5">

                <!-- 1. Arsip -->
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="/arsip-tu" class="feature-card d-flex gap-3 align-items-start">
                        <div class="icon-box icon-arsip">
                            <i class="fa-solid fa-folder"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1">ARSIP</h4>
                            <p class="text-muted mb-0">Dokumen Arsip</p>
                        </div>
                    </a>
                </div>

                <!-- 2. Unggah Berkas -->
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="/unggah-berkas" class="feature-card d-flex gap-3 align-items-start">
                        <div class="icon-box icon-upload">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1">UNGGAH BERKAS</h4>
                            <p class="text-muted mb-0">Unggah File Berkas Anda</p>
                        </div>
                    </a>
                </div>

                <!-- 3. Detail Berkas -->
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="detail-berkas" class="feature-card d-flex gap-3 align-items-start">
                        <div class="icon-box icon-detail">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1">DETAIL BERKAS</h4>
                            <p class="text-muted mb-0">Lihat dan Edit Detail Data</p>
                        </div>
                    </a>
                </div>

                <!-- 4. Referensi 5 Tahun -->
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="/referensi-5-tahun" class="feature-card d-flex gap-3 align-items-start">
                        <div class="icon-box icon-referensi">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1">REFERENSI 5 TAHUN</h4>
                            <p class="text-muted mb-0">Data 5 tahun terakhir</p>
                        </div>
                    </a>
                </div>

                <!-- 5. Pencarian Berkas -->
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="/pencarian" class="feature-card d-flex gap-3 align-items-start">
                        <div class="icon-box icon-pencarian">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1">Pencarian Berkas</h4>
                            <p class="text-muted mb-0">Cari Berkas Surat</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </section>
    </div>
@endsection
