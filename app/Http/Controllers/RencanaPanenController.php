<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RencanaPanenController extends Controller
{
    public function index()
    {
        // Tampilkan view untuk rencana panen
        return view('rencana.index');
    }
}
