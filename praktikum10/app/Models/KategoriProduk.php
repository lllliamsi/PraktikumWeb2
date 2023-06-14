<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    // menghubungkan ke tabel kategori_produk
    protected $table = 'kategori_produk';

    // menentukan kolom yang bisa diisi
    protected $fillable = [
        'nama', // Nama Produk
    ];

    // membuat fungsi untuk relasi one to many : hasMany
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }

}