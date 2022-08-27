@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="/register" method="post" class="border px-3 py-2 d-flex flex-column gap-2 w-100">
                @csrf
                <label>
                    <p class="fw-bold">Name</p>
                    <input class="form-control w-100 @error('name') is-invalid @enderror" type="text" name="name"
                        required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label>
                    <p class="fw-bold">Username</p>
                    <input class="form-control @error('username') is-invalid @enderror" type="text" name="username"
                        class="w-100" required value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label>
                    <p class="fw-bold">Email</p>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                        class="w-100" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label class="mt-3">
                    <p class="fw-bold">Password</p>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                        class="w-100" required >
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label class="mt-3">
                    <p class="fw-bold">Konfirmasi Password</p>
                    <input class="form-control @error('password_confirm') is-invalid @enderror" type="password"
                        name="password_confirm" class="w-100" required>
                    @error('password_confirm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>

                <input type="submit" value="Register" class="btn btn-primary mt-3">
                <p>sudah punya akun ? <a href="/login" class="text-decoration-none fw-bold">login sekarang !</a></p>
            </form>
        </div>
    </div>
@endsection
