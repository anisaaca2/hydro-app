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
        return view('profile.pembeli', compact('produk'));
    }
}
