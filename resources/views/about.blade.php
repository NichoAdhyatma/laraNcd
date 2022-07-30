@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-column align-items-center">
        <img class="rounded-circle border img-thumbnail mb-3" id="foto-saya" src="asset/{{ $image }}" alt="foto-saya"
            width="200px">
        <h3 class="mb-3">{{ $nama }}</h3>
        <div class="container d-flex justify-content-center gap-1 mb-3 flex-wrap">
            <div class="badge bg-primary fw-bold p-3 fs-6">✨ {{ $job }} ✨</div>
            <div class="badge bg-success fw-bold p-3 fs-6">✨ Informatic Engineering Student ✨</div>
        </div>
        <h5><a class="text-decoration-none fw-bold" href="#">{{ $email }}</a></h5>
    </div>
@endsection
