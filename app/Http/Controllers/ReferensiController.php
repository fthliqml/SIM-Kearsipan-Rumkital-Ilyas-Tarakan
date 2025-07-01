<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferensiController extends Controller
{
    public function index()
    {
        // dummy data
        $berkasList = [
            (object) [
                'nomor' => '2914440384',
                'tanggal' => '2024-01-15',
                'tanggal_kadaluarsa' => '2026-01-12',
                'jenis' => 'Surat Masuk',
                'pengirim' => 'Kementerian Kesehatan RI',
                'status' => 'success',
            ],
            (object) [
                'nomor' => '4013449971',
                'tanggal' => '2024-01-14',
                'tanggal_kadaluarsa' => '2027-01-5',
                'jenis' => 'Data Personal',
                'pengirim' => 'Bagian Kepegawaian',
                'status' => 'success',
            ],
            (object) [
                'nomor' => '0376094284',
                'tanggal' => '2024-01-13',
                'tanggal_kadaluarsa' => '2027-01-18',
                'jenis' => 'MoU',
                'pengirim' => 'RS Mitra Sehat',
                'status' => 'danger',
            ],
            (object) [
                'nomor' => '4562457704',
                'tanggal' => '2024-01-12',
                'tanggal_kadaluarsa' => '2025-01-15',
                'jenis' => 'Arsip Medis',
                'pengirim' => 'Poliklinik Umum',
                'status' => 'danger',
            ],
            (object) [
                'nomor' => '1794000537',
                'tanggal' => '2024-01-11',
                'tanggal_kadaluarsa' => '2026-01-15',
                'jenis' => 'Surat Keluar',
                'pengirim' => 'Bagian Keuangan',
                'status' => 'danger',
            ],
            (object) [
                'nomor' => '3554926113',
                'tanggal' => '2024-01-10',
                'tanggal_kadaluarsa' => '2025-01-15',
                'jenis' => 'Latihan Fungsional',
                'pengirim' => 'Diklat Kesehatan',
                'status' => 'success',
            ],
        ];

        return view('referensi.index', compact('berkasList'));
    }
}
