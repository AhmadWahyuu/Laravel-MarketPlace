@extends('admin.layout.main')


@section('body')
<div class="table-responsive col-lg-10">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a class="btn btn-outline-primary" href="/admin/produk/create">Create</a>
    <a class="btn btn-outline-primary" href="/admin/category/new">New Category</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <td >No</td>
                <td >Nama</td>
                <td >Kategori</td>
                <td >Harga</td>
                <td >Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->category->nama }}</td>
                    <td>{{ $p->harga }}</td>
                    <td>
                        <a href="/admin/produk/show/{{ $p->slug }}" class="btn btn-success"><i class="fa fa-eye" ></i></a>
                        <a href="/admin/produk/edit/{{ $p->slug }}"class="btn btn-warning"><i class="fa fa-pencil" ></i></a>
                        <form action="/admin/produk/{{ $p->slug }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger border-0" type="submit"><i class="fa fa-trash" ></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{-- fitur link page pada laravel --}}
    <div class="d-flex position-absolute">
        {{ $produk->links() }}
    </div>
</div>
@endsection