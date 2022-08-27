@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">

        <div class="col-lg-6">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>✅ {{ session('success') }}</strong> Silahkan login
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginErr'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>⚠️ {{ session('loginErr') }} </strong> masukin data yang bener yaa!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="/login" method="post" class="border px-3 py-2 d-flex flex-column gap-2 w-100">
                @csrf
                <div class="form-floating">
                    <input class="form-control w-100 @error('username') is-invalid @enderror" id="username" type="text"
                        name="username" placeholder="input username" autofocus required value="{{ old('username') }}">
                    <label for="username">
                        <p class="fw-500">Username</p>
                    </label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input class="form-control w-100" id="password" type="password" name="password"
                        placeholder="input password" required>
                    <label for="password">
                        <p class="fw-500">Password</p>
                    </label>
                </div>
                <label>
                    <input type="checkbox" name="remember">
                    <span>remember me</span>
                </label>
                <input type="submit" value="➡️ Login" class="btn btn-primary mt-3">
                <p>belum punya akun ? <a href="/register" class="text-decoration-none fw-bold">daftar sekarang !</a></p>
            </form>
        </div>

    </div>
@endsection
