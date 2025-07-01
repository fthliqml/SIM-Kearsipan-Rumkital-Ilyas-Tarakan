<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnggahBerkasController extends Controller
{
    public function index()
    {
        return view('unggah-berkas.index');
    }
}
