@extends('layout/main')

@section('body')

<main class="form-signin w-100 m-auto">
    <div class="row justify-content-center">
        <div class="col-md-5">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session()->has('loginerror'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginerror') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="/login" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Please Log In!</h1>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
            </form>
        </div>
        <small class="box text-center mt-2">Not Register? <a href="/register">Register Now!</a></small>
    </div>
  </main>

@endsection