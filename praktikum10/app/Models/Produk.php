<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;

    // menghubungkan dengan tabel produk
    protected $table = 'produk';

    // ubah timestamps menjadi false
    public $timestamps = false;

    // menentukan kolom yang bisa diisi 
    protected $fillable = [
        'kode',
        // Kode Produk
        'nama',
        // Nama Produk
        'harga_jual',
        // Harga jual produk
        'harga_beli',
        // Harga beli produk    
        'stok',
        // jumlah stok produk
        'min_stok',
        // jumlah minimal stok produk
        'deskripsi',
        'kategori_produk_id',
    ];

    // buat fungis untuk relasi ke tabel kategori_produk
    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class);
    }

    // buat fungsi untuk menampilkan data produk
    public static function getAllProduk()
    {
        // return DB::table('produk')->get();

        // membuat query untuk menampilkan nama kategori
        $alldata = DB::table('produk')
            ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();

        return $alldata;
    }

}