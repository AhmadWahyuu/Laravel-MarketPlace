@extends('layout/main')

@section('body')
<h2>{{ $title }}</h2>
<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/market">
            @csrf
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="input-group mb-3 text-center mb-4">
                <input type="text" class="form-control" placeholder="Search...." name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-primary" type="submit" >Search</button>
            </div>
        </form>
    </div>
</div>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        @foreach($list as $l)
        <form action="/market">
            @csrf
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <input type="hidden" value="{{ $l }}" name="list">
            <li class="page-item"><button class="btn btn-outline-primary {{ (request('list') === $l)? 'active' : '' }}"  type="submit">{{ $l }}</button></li>
        </form>
        @endforeach
    </ul>
</nav>
<div class="dropdown mb-5">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      Kategori
    </button>
    <ul class="dropdown-menu" style="max-height: 200px; overflow-y:scroll">
        <li><a href="/market" class="dropdown-item">Semua</a></li>
        <li><hr class="dropdown-divider"></li>
        @foreach($categories as $c)
            <li><a class="dropdown-item {{ (request('category') === $c->slug)? 'active' : '' }}" href="/market?category={{ $c->slug }}">{{ $c->nama }}</a></li>
        @endforeach
    </ul>
</div>
@if ($produk->count()>0)
    <div class="container">
        <div class="row">
            @foreach ($produk as $p)
                <div class="col-md-4 mb-2">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)">{{ $p->category->nama }}</div>
                    <img src="{{ url('storage/'.$p->image)}}" alt="{{ $p->category->name }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/market/{{ $p->slug }}" class="text-dark text-decoration-none">
                                {{ $p->nama }}
                            </a>
                        </h5>
                        <p class="card-text text-center">{{ $p->harga }}</p>
                        @auth
                            <a class="btn btn-primary text-right" href="/checkout"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Buy</a>
                        @else
                            <a class="btn btn-primary text-right" href="/login"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Buy</a>
                        @endauth
                        
                        <a href="/market/{{ $p->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya >></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@else
    <p class="text-center fs-4">Post Not Found</p>
@endif
    <div class="d-flex position-absolute">
        {{ $produk->links() }}
    </div>
@endsection