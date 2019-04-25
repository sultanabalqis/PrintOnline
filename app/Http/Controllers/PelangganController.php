<?php

namespace App\Http\Controllers;

use App\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public funtion index()
    {
        return view('/pelanggan/home');
    }
}
