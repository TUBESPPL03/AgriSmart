<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptimasiPertanianController extends Controller
{
    public function index()
    {
        // Tampilkan view untuk optimasi pertanian
        return view('optimasi.index');
    }
}
