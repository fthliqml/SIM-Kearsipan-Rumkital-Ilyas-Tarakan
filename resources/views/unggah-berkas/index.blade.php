@extends('layouts.vertical', ['title' => 'Unggah Berkas'])

@section('topbar')
    @include('layouts.partials.topbar')
@endsection

@section('content')
    <div class="container-fluid">
        <button class="btn btn-light-green rounded-pill fw-bold px-4 py-2" style="color: #5568ca">Unggah Berkas</button>
        <section class="container py-5">
            <form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
                <div class="row g-5">

                    <!-- Kolom KIRI -->
                    <div class="col-12 col-md-6">

                        <!-- Nama Berkas -->
                        <div class="row mb-3">
                            <label for="namaBerkas" class="col-12 col-xxl-4 col-form-label">Nama Berkas</label>
                            <div class="col-12 col-xxl-8">
                                <input id="namaBerkas" type="text" class="form-control" placeholder="Insert text here">
                            </div>
                        </div>

                        <!-- Jenis Berkas -->
                        <div class="row mb-3">
                            <label for="jenisBerkas" class="col-12 col-xxl-4 col-form-label">Jenis Berkas</label>
                            <div class="col-12 col-xxl-8">
                                <select id="jenisBerkas" class="form-select">
                                    <option selected disabled>Insert text here</option>
                                    <option>Arsip TU</option>
                                    <option>Arsip Medis</option>
                                </select>
                            </div>
                        </div>

                        <!-- Tanggal -->
                        <div class="row mb-3">
                            <label for="tanggal" class="col-12 col-xxl-4 col-form-label">Tanggal</label>
                            <div class="col-12 col-xxl-8">
                                <input id="tanggal" type="date" class="form-control">
                            </div>
                        </div>

                        <!-- Deskripsi -->
                        <div class="row mb-3">
                            <label for="deskripsi" class="col-12 col-xxl-4 col-form-label">Deskripsi&nbsp;(Optional)</label>
                            <div class="col-12 col-xxl-8">
                                <textarea id="deskripsi" class="form-control" placeholder="Insert text here"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom KANAN -->
                    <div class="col-12 col-md-6">

                        <!-- Pengirim -->
                        <div class="row mb-3">
                            <label for="pengirim" class="col-12 col-xxl-4 col-form-label">Pengirim / Penerima</label>
                            <div class="col-12 col-xxl-8">
                                <input id="pengirim" type="text" class="form-control" placeholder="Insert text here">
                            </div>
                        </div>

                        <!-- Pasien -->
                        <div class="row mb-3">
                            <label for="pasien" class="col-12 col-xxl-4 col-form-label">Pasien / Pihak Terkait</label>
                            <div class="col-12 col-xxl-8">
                                <input id="pasien" type="text" class="form-control" placeholder="Insert text here">
                            </div>
                        </div>

                        <!-- Kategori -->
                        <div class="row mb-3">
                            <label for="kategori" class="col-12 col-xxl-4 col-form-label">Kategori</label>
                            <div class="col-12 col-xxl-8">
                                <select id="kategori" class="form-select">
                                    <option selected disabled>Insert text here</option>
                                    <option>Internal</option>
                                    <option>Eksternal</option>
                                </select>
                            </div>
                        </div>

                        <!-- File -->
                        <div class="row mb-3">
                            <label for="file" class="col-12 col-xxl-4 col-form-label">Upload File</label>
                            <div class="col-12 col-xxl-8">
                                <input id="file" type="file" class="form-control">
                            </div>
                        </div>

                        <!-- Tombol -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary px-5">Upload</button>
                        </div>
                    </div>

                </div>
            </form>
        </section>


    </div>

    <script>
        const rentang = document.getElementById('tanggal');
        rentang.addEventListener('focus', openPicker);
        rentang.addEventListener('click', openPicker);

        function openPicker() {
            if (this.showPicker) this.showPicker();
        }
    </script>
@endsection
