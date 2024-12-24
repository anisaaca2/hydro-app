<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function store(Request $request, Produk $produk)
    {
        // Validasi input
        $request->validate([
            'rating' => 'required|integer|between:1,5',
        ]);

        // Cari rating yang sudah ada
        $existingRating = Rating::where('user_id', auth()->id())
                                ->where('produk_id', $produk->id)
                                ->first();

        if ($existingRating) {
            // Update rating yang sudah ada
            $existingRating->update([
                'nilai' => $request->rating,
            ]);

            return back()->with('success', 'Rating berhasil diperbarui!');
        }

        // Jika belum ada rating, buat rating baru
        Rating::create([
            'user_id' => auth()->id(),
            'produk_id' => $produk->id,
            'nilai' => $request->rating,
        ]);

        return back()->with('success', 'Rating berhasil ditambahkan!');
    }
}
