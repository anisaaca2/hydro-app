<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class PembeliController extends Controller
{
    public function index() {
        $produk = Produk::all();
        return view('profile.pembeli', compact('produk'));
    }

    public function show(Produk $produk)
    {
        return view('produk.pembeli.produkshow', compact('produk'));
    }
}
