@extends('layout/main')

@section('body')

<main class="form-signin w-100 m-auto">
    <div class="row justify-content-center">
        <form class="col-md-5" action="/register" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Register Form!</h1>
            <div class="form-floating">
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" required value="{{ old('nama') }}">
                <label for="nama">Nama</label>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
        </form>
        <small class="box text-center mt-2">Already Register? <a href="/login">Login Now!</a></small>
    </div>
  </main>

@endsection