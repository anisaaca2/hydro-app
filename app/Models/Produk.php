<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{

    protected $fillable = [
        'name',
        'description',
        'harga',
        'stok',
        'gambar',
        'status',
    ];

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'produk_id');
    }

    protected $attributes = [
        'status' => true,
    ];


}
