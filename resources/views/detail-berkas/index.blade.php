@extends('layouts.vertical', ['title' => 'Detail Berkas'])

@section('topbar')
    @include('layouts.partials.topbar')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-flex gap-3 align-items-center">
            <button class="btn btn-light-green rounded-pill fw-bold px-4 py-2" style="color: #5568ca">Detail Berkas</button>
            <form method="GET" class="search-bar">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>

                    <input type="search" name="q" class="form-control" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </div>


        <div class="table-container mt-5">
            <div class="table-responsive-xxl">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Berkas</th>
                            <th>Tanggal</th>
                            <th>Jenis</th>
                            <th>Pengirim/Penerima</th>
                            <th>Status</th>
                            <th>Unduh</th>
                            <th>Cetak</th>
                            <th>Bagikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berkasList as $i => $obj)
                            <tr>
                                <td class="row-number">{{ $i + 1 }}</td>
                                <td>{{ $obj->nomor }}</td>
                                <td>{{ \Carbon\Carbon::parse($obj->tanggal)->format('d M Y') }}</td>
                                <td>{{ $obj->jenis }}</td>
                                <td>{{ $obj->pengirim }}</td>
                                <td>
                                    <span class="status-badge status-{{ $obj->status }}">-</span>
                                </td>
                                <x-table-actions action="unduh" />
                                <x-table-actions action="cetak" />
                                <x-table-actions action="bagikan" />
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>

    </div>
@endsection
