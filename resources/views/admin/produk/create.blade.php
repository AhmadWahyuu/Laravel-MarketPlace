@extends('admin.layout.main')

@section('body')
<div class="col-lg-8">
    <form action="/admin/produk/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Produk</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}">
        </div>
        <select class="form-select mb-3" name="category_id">
            @foreach($categories as $c)
            <option value="{{ $c->id }}">{{ $c->nama }}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <label for="image" class="form-label">File Image</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input id="deskripsi" type="hidden" name="deskripsi">
            <trix-editor input="deskripsi"></trix-editor>
        </div>
        <div class="mb-3">
            <label for="spesifikasi" class="form-label">Spesifikasi</label>
            <input id="spesifikasi" type="hidden" name="spesifikasi">
            <trix-editor input="spesifikasi"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });
</script>
@endsection