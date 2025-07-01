<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;


class ArsipTUController extends Controller
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

        $chart = new Chart;

        // Label sumbu-X
        $chart->labels(['01', '02', '03', '04', '05', '06']);

        /* ---------- DATASET BIRU ---------- */
        $chart->dataset('Last 6 days', 'line', [12, 9, 20, 18, 7, 26])
            ->options([
                'borderColor' => '#3f51b5',
                'borderWidth' => 3,
                'pointRadius' => 0,
                'fill' => false,
                'lineTension' => 0
            ]);

        /* ---------- DATASET ABU ---------- */
        $chart->dataset('Last Week', 'line', [15, 25, 5, 22, 17, 21])
            ->options([
                'borderColor' => '#d1d5db',
                'borderWidth' => 3,
                'pointRadius' => 0,
                'fill' => false,
                'lineTension' => 0
            ]);

        /* ---------- OPSI GLOBAL ---------- */
        $chart->options([
            'maintainAspectRatio' => false,
            'scales' => [
                'xAxes' => [
                    [
                        'gridLines' => ['display' => false],
                        'ticks' => [
                            'fontColor' => '#a0a4ab',
                            'fontFamily' => 'Inter',
                            'fontSize' => 14
                        ]
                    ]
                ],
                'yAxes' => [
                    [
                        'display' => false,
                        'gridLines' => [
                            'drawBorder' => false,
                            'color' => '#e5e7eb',
                            'borderDash' => [4, 4]
                        ]
                    ]
                ]
            ],
            'legend' => [
                'position' => 'bottom',
                'labels' => [
                    'usePointStyle' => true,
                    'boxWidth' => 10,
                    'fontColor' => '#6b7280',
                    'fontFamily' => 'Inter',
                    'fontSize' => 16
                ]
            ],
            'tooltips' => ['intersect' => false]
        ]);

        return view('arsip-tu.index ', compact(['chart', 'berkasList']));
    }
}
