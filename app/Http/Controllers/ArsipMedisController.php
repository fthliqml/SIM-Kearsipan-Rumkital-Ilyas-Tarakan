<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;


class ArsipMedisController extends Controller
{

    /**
     * Konfigurasi jenis arsip yang diizinkan
     */
    private $jenisArsip = [
        'sertifikat' => 'Sertifikat',
        'surat-hibah' => 'Surat Hibah',
        'barang-masuk' => 'Barang Masuk',
        'pengadaan-alat' => 'Pengadaan Alat',
        'pembelian' => 'Pembelian'
    ];

    public function index($jenis)
    {

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

        // Validasi jenis arsip
        if (!array_key_exists($jenis, $this->jenisArsip)) {
            abort(404, 'Jenis arsip tidak ditemukan');
        }

        // Get title untuk jenis arsip ini
        $title = $this->jenisArsip[$jenis];

        // Get dummy data berdasarkan jenis
        $data = $this->getDummyData($jenis);

        return view('arsip-medis.index', compact(
            'chart',
            'title',
            'data'
        ));

    }

    /**
     * Get dummy data berdasarkan jenis arsip
     */
    private function getDummyData($jenis)
    {
        // Load dummy data from config file
        $allDummyData = config('dummy-data-medis');
        $dummyData = $allDummyData[$jenis] ?? [];

        // Convert to collection for easier handling (mirip dengan Eloquent Collection)
        return collect($dummyData);
    }
}
