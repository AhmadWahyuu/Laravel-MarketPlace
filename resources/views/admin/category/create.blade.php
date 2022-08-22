@extends('admin.layout.main')

@section('body')
<form action="/admin/category/new" method="POST">
    @csrf
    <input type="text" name="nama" value="{{ old('nama') }}">
    <button class="btn btn-primary" type="submit">Create</button>
</form>


@endsection