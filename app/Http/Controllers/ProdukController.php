<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class ProdukController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('seller');
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        $produk = Produk::where('status', true)->get();
        $produk = Produk::orderBy('id', 'desc')->paginate(5);
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer|min:0',
            'gambar' => 'required|image|max:1024'
        ]);

        $path = $request->file('gambar') ? $request->file('gambar')->store('images', 'public') : null;

        Produk::create([
            'name' => $request->name,
            'description' => $request->description,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $path,
        ]);

        return redirect()->route('seller.produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        return view('produk.pembeli.produkshow', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer|min:0',
            'gambar' => 'nullable|image|max:1024'
        ]);

        $path = $produk->gambar;
        if($request->file('gambar')) {
            $path = $request->file('gambar')->store('images', 'public');
        }

        $produk->update([
            'name' => $request->name,
            'description' => $request->description,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $path,
        ]);

        return redirect()->route('seller.produk.index')->with('success', 'Produk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        if($produk->gambar) {
            Storage::delete('public/' . $produk->gambar);
        }

        $produk->delete();
        return redirect()->route('seller.produk.index')->with('success', 'Produk berhasil dihapus');
    }

    public function togglestatus(Produk $produk)
    {
        $produk->status = !$produk->status;
        $produk->save();

        $message = $produk->status
            ? 'Produk berhasil diaktifkan.'
            : 'Produk berhasil dinonaktifkan.';

        return redirect()->route('seller.profile.penjual')->with('success', $message);
    }

    public function search(Request $request)
    {
        $query = $request->input('q');

        $produk = Produk::where('name', 'like', '%' . $query . '%')
                        ->orWhere('description', 'like', '%' . $query . '%')
                        ->get();

        return view('produk.search', compact('produk', 'query'));
    }
}
