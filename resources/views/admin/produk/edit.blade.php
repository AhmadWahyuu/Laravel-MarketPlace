@extends('admin.layout.main')

@section('body')
<div class="col-lg-8">

    {{-- Form Inputan User --}}
    <form action="/admin/produk/edit/{{ $produk->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $produk->nama }}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Produk</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $produk->harga }}">
        </div>
        <select class="form-select mb-3" name="category_id">

            {{-- menampilkan categori sesuai dengan yang ada didalam database dengan melakukan looping--}}
            @foreach($categories as $c)
            <option value="{{ $c->id }}" {{ ($c->id == $produk->category_id) ? 'selected' : '' }}>{{ $c->nama }}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <label for="image" class="form-label">File Image</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" value="{{ $produk->image }}">
          </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            {{-- insialisasi text editor --}}
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ $produk->deskripsi }}">
            <trix-editor input="deskripsi" ></trix-editor>
        </div>
        <div class="mb-3">
            <label for="spesifikasi" class="form-label">Spesifikasi</label>
            {{-- insialisasi text editor --}}
            <input id="spesifikasi" type="hidden" name="spesifikasi" value="{{ $produk->spesifikasi }}">
            <trix-editor input="spesifikasi"  ></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection