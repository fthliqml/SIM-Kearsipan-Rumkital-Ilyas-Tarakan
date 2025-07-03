@extends('layouts.vertical', ['title' => $title ? "Arsip Medis $title" : 'Arsip Medis'])

@section('topbar')
    @include('layouts.partials.topbar')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-flex gap-3 align-items-center">
            <button class="btn btn-light-primary rounded-pill fw-bold px-4 py-2" style="color: #5568ca">ARSIP</button>
            <button class="btn btn-grey rounded-pill fw-bold px-4 py-2" style="color: #5568ca">BERKAS MEDIS</button>
            <span class="">{{ $title }}</span>
        </div>

        <div class="d-flex flex-column flex-xxl-row gap-3 align-items-xxl-center">

            <div class="table-container mt-5">

                <div class="table-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Tambah Berkas
                    </button>
                    <!-- Drop‑down -->
                    <div class="dropdown">
                        <button class="px-0 btn btn-light rounded-3 border-2 d-flex align-items-center fw-normal"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="px-3">Semua Surat</span>
                            <span class="dropdown-toggle dropdown-toggle-split ps-3 pe-3 py-2 border-start"
                                style="line-height:0"></span>
                        </button>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Surat Masuk</a></li>
                            <li><a class="dropdown-item" href="#">Surat Keluar</a></li>
                            <li><a class="dropdown-item" href="#">MoU</a></li>
                        </ul>
                    </div>
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

                <div class="table-responsive-xxl">
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Berkas</th>
                                <th>Tanggal</th>
                                <th>Jenis</th>
                                <th>Pasien/Pihak Terkait</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td class="row-number">{{ $item->id }}</td>
                                    <td>{{ $item->nama_berkas }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</td>
                                    <td>{{ $item->jenis }}</td>
                                    <td>{{ $item->pasien }}</td>
                                    <td>
                                        <span class="status-badge status-{{ $item->status }}">-</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="ms-4 ms-xxl-0">
                <div class="d-flex gap-9">
                    <div class="d-flex flex-column gap-2">
                        <span>Statistik Arsip Medis (Contoh)</span>
                        <span class="fs-5 fw-semibold">2.568</span>
                        <span style="color: red"><i class="fa-solid fa-arrow-down me-1"></i>Total
                            Surat</span>
                        <p class="mt-2">Sales from 1-6 Dec, 2020</p>
                    </div>
                    <button class="btn btn-outline-primary" style="height: 40px">View Report</button>
                </div>
                <div style="height:205px; width: 450px;">
                    {!! $chart->container() !!}
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {!! $chart->script() !!}
@endsection
