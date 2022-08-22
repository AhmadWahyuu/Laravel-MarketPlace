@extends('layout/main')
@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="card mb-8">
            <img src="{{ url('storage/'.$produk->image)}}" class="card-img-top" alt="{{ $produk->category->name }}" style="height: 500px; width:800px">
            <div class="card-body ">
                <h2 class="card-title text-center">
                    <a href="/market/{{ $produk->slug }}" class="text-dark text-decoration-none">
                    {{ $produk->nama }}
                    </a>
                </h2>
                <article>
                    <p class="text-content-center">{{ $produk->harga }}</p>
                    <p class="card-text">{!! $produk->deskripsi !!}</p>
                    <p class="card-text">{!!  $produk->spesifikasi  !!}</p>
                </article>
                <a href="/market" class="text-decoration-none btn btn-primary">back</a>      
            </div>
        </div>
    </div>
</div>

@endsection