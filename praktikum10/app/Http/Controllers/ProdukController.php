<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menjalankan fungsi getAllProduk
        $produk = Produk::getAllProduk();

        // kirim data ke view produk
        return view('admin.produk.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // simpan data tabel produk dari model
        $produk = Produk::all();

        // simpan data tabel kategori dari model
        $kategori_produk = KategoriProduk::all();

        // kirim data ke view create
        return view('admin.produk.create', compact('produk', 'kategori_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // fitur tambah data / validasi kirim data
        $produk = new Produk;

        // akses kolom kode lalu diisi dengan data input kode user
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;

        // simpan data ke database
        $produk->save();

        // menampilkan ke url produk
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // ambil data kategori dari model
        $kategori_produk = KategoriProduk::all();

        // ambil data tabel produk dari model berdasarkan id
        $produk = Produk::where('id', $id)->get();

        // mengirimkan data ke view
        return view('admin.produk.edit', compact('produk', 'kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // fitur edit data / validasi edit data
        $produk = Produk::find($request->id);

         // akses kolom kode lalu diisi dengan data input kode user
         $produk->kode = $request->kode;
         $produk->nama = $request->nama;
         $produk->harga_jual = $request->harga_jual;
         $produk->harga_beli = $request->harga_beli;
         $produk->stok = $request->stok;
         $produk->min_stok = $request->min_stok;
         $produk->deskripsi = $request->deskripsi;
         $produk->kategori_produk_id = $request->kategori_produk_id;
 
         // simpan data ke database
         $produk->save();
 
         // menampilkan ke url produk
         return redirect('produk');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // cari data berdasarkan id
        $produk = Produk::find($id);
        // delete data nya
        $produk->delete();
        // menampilkan ke url produk
        return redirect('produk');
    }
}
