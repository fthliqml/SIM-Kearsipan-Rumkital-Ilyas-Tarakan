@extends('layouts.vertical', ['title' => 'Pencarian'])

@section('topbar')
    @include('layouts.partials.topbar')
@endsection

@section('content')
    <div class="container-fluid">
        <button class="btn btn-light-green rounded-pill fw-bold px-4 py-2" style="color: #5568ca">Pencarian</button>
        <section class="container py-5">
            <form class="form-horizontal" action="#" method="GET">

                <!-- ── baris 1: Jenis Arsip • Kategori • Tombol Search ── -->
                <div class="row gx-5 gy-4 align-items-center">

                    <!-- Jenis Arsip -->
                    <div class="col-12 col-lg-5">
                        <label for="jenisArsip" class="form-label">Jenis Arsip</label>
                        <select id="jenisArsip" class="form-select">
                            <option selected disabled>Insert text here</option>
                            <option>Arsip TU</option>
                            <option>Arsip Medis</option>
                        </select>
                        <small class="text-muted">Insert text here to help users.</small>
                    </div>

                    <!-- Kategori -->
                    <div class="col-12 col-lg-5">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select id="kategori" class="form-select">
                            <option selected disabled>Insert text here</option>
                            <option>Internal</option>
                            <option>Eksternal</option>
                        </select>
                        <small class="text-muted">Insert text here to help users.</small>
                    </div>

                    <!-- Tombol Search -->
                    <div class="col-12 col-lg-2 d-grid">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>

                <!-- ── baris 2: Rentang Tanggal • Input Search ── -->
                <div class="row gx-5 gy-4 mt-2">

                    <!-- Rentang Tanggal -->
                    <div class="col-12 col-lg-5">
                        <label for="rentangTanggal" class="form-label">Rentang Tanggal</label>

                        <input type="date" id="rentangTanggal" class="form-control">

                        <small class="text-muted">Insert text here to help users.</small>
                    </div>

                    <!-- Kolom Search -->
                    <div class="col-12 col-lg-5">
                        <label for="keyword" class="form-label">&nbsp;</label>

                        <form method="GET" class="search-bar">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </span>

                                <input type="search" name="q" class="form-control" placeholder="Search"
                                    aria-label="Search">
                            </div>
                        </form>
                    </div>

                </div>
            </form>
        </section>


    </div>

    <script>
        const rentang = document.getElementById('rentangTanggal');
        rentang.addEventListener('focus', openPicker);
        rentang.addEventListener('click', openPicker);

        function openPicker() {
            if (this.showPicker) this.showPicker();
        }
    </script>
@endsection
