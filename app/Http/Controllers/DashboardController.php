<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class DashboardController extends Controller
{
    public function index()
    {
        $chart = new Chart;

        $chart->labels(['Januari', 'Februari', 'Maret', 'April', 'Mei']);
        $chart->dataset('Arsip Per Bulan', 'bar', [120, 150, 100, 180, 80])
            ->backgroundColor('#1388ed');

        return view('dashboard.index', compact('chart'));
    }
}
