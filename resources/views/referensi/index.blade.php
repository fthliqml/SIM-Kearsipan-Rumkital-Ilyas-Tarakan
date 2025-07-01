@extends('layouts.vertical', ['title' => 'Referensi'])

@section('topbar')
    @include('layouts.partials.topbar')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-flex gap-3 align-items-center">
            <button class="btn btn-light-green rounded-pill fw-bold px-4 py-2" style="color: #5568ca">Referensi 5
                Tahun</button>
        </div>


        <div class="table-container mt-5">

            <div class="table-responsive-xxl">

                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Berkas</th>
                            <th>Tanggal</th>
                            <th>Tanggal Kadaluarsa</th>
                            <th>Jenis</th>
                            <th>Pengirim/Penerima</th>
                            <th>Status</th>
                            <th>Kirim Pesan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berkasList as $i => $obj)
                            <tr>
                                <td class="row-number">{{ $i + 1 }}</td>
                                <td>{{ $obj->nomor }}</td>
                                <td>{{ \Carbon\Carbon::parse($obj->tanggal)->format('d M Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($obj->tanggal_kadaluarsa)->format('d M Y') }}</td>
                                <td>{{ $obj->jenis }}</td>
                                <td>{{ $obj->pengirim }}</td>
                                <td>
                                    <span class="status-badge status-{{ $obj->status }}">-</span>
                                </td>
                                <x-table-actions action="kirim-pesan" />
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>

    </div>
@endsection
