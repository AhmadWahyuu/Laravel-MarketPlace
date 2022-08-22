@extends('admin.layout.main')


@section('body')
<div class="table-responsive col-lg-10">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a class="btn btn-outline-primary" href="/admin/category/new">Create</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <td >No</td>
                <td >Nama</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection