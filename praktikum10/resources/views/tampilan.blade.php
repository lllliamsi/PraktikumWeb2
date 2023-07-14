@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row p-5 ">
            <!-- looping card -->
            @foreach ($produk as $p) 
            <div class="col-md-4 col-sm-6 pb-4">
                <div class="card">
                    <img src="" class="card-img-top" alt="gambar">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $p->nama }}
                        </h5>
                        <p class="card-text">
                            {{ $p->nama_kategori }}
                        </p>
                        <a class="btn btn-warning" href="">Beli</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection()
