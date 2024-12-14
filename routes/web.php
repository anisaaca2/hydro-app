<?php

use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PembeliController;

use App\Models\Produk;
use App\Http\Middleware\EnsureUserIsSeller;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $produk = Produk::all();

    return view('landing', compact('produk'));
})->name('landing');

// Route::get('/profil-pembeli', [PembeliController::class, 'profile'])->name('pembeli.profile');


// Route untuk mengelola profil pengguna
// Route::middleware(['auth', EnsureUserIsSeller::class])->prefix('seller')->name('seller.')->group(function () {
//     Route::get('profile', [PenjualController::class, 'index']);
//     // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route yang hanya bisa diakses oleh buyer
Route::middleware(['auth', EnsureUserIsSeller::class])->prefix('buyer')->group(function () {
    Route::get('profile', [PembeliController::class, 'index'])->name('profile.pembeli');

});

// Route yang hanya bisa diakses oleh seller
Route::middleware(['auth', EnsureUserIsSeller::class])->prefix('seller')->group(function () {
    Route::get('profile', [PenjualController::class, 'index'])->name('profile.penjual');
    Route::get('produk', [ProdukController::class, 'index'])->name('produk');
    Route::get('produk/create', [ProdukController::class, 'create']);
    Route::post('produk', [ProdukController::class, 'store']);
    Route::get('produk/{produk}', [ProdukController::class, 'show']);
    Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
    Route::put('produk/{produk}', [ProdukController::class, 'update']);
    Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);
});

require __DIR__.'/auth.php';
