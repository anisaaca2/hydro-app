<?php

// use App\Http\Middleware\EnsureUserIsBuyer;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Middleware\EnsureUserHasRole;

use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    $produk = Produk::all();
    return view('landing', compact('produk'));
})->name('landing');

// Seacrh
Route::get('search', [ProdukController::class, 'search'])->name('produk.search');

// Khusus Buyer
Route::middleware(['auth', 'role:buyer'])->prefix('buyer')->name('buyer.')->group(function () {
    Route::get('profile', [PembeliController::class, 'index'])->name('profile.pembeli');
    Route::post('/rating/{produk}', [RatingController::class, 'store'])->name('rating.store');
});

Route::get('produk/{produk}', [ProdukController::class, 'show'])->name('produk.pembeli.produkshow');

// Route::get('/user/{id}', [RegisteredUserController::class, 'show'])->name('layouts.partials.navbar');

// Khusus Seller
Route::middleware(['auth', 'role:seller'])->prefix('seller')->name('seller.')->group(function () {
    Route::get('profile', [PenjualController::class, 'index'])->name('profile.penjual');
    Route::get('produk/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::get('produk', [ProdukController::class, 'index'])->name('produk.index');
    Route::post('produk', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('produk/{produk}', [PenjualController::class, 'show'])->name('produk.show');
    Route::get('produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('produk/{produk}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');
    Route::post('/produk/{produk}/toggle-status', [ProdukController::class, 'togglestatus'])->name('produk.toggle-status');
});


require __DIR__ . '/auth.php';
