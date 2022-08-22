@extends('admin/layout/main')
@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="card mb-8">
            <img src="{{ url('storage/'.$produk->image)}}" class="card-img-top" alt="{{ $produk->category->name }}" style="height: 500px; width:800px">
            <div class="card-body ">
                <h2 class="card-title text-center">
                    {{ $produk->nama }}
                </h2>
                <a href="/admin/produk/edit/{{ $produk->slug }}"class="btn btn-warning"><i class="fa fa-pencil" ></i></a>
                <form action="/admin/produk/{{ $produk->slug }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus')">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" type="submit"><i class="fa fa-trash" ></i></button>
                </form>
                <article>
                    <p class="text-content-center">{{ $produk->harga }}</p>  
                    <p class="card-text">{!! $produk->deskripsi !!}</p>
                    <p class="card-text">{!!  $produk->spesifikasi  !!}</p>
                </article>
                <a href="/admin/produk" class="text-decoration-none btn btn-primary">back</a>      
            </div>
        </div>
    </div>
</div>

@endsection