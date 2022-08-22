@extends('admin.layout.main')

@section('body')
    <h2>Welcom Back, {{ auth()->user()->username }}</h2>
@endsection