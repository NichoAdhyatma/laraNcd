@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/berita?category={{ $category->slug }}">
                        <div class="card text-white">
                            <img src="https://source.unsplash.com/500x500/?{{ $category->name }}" class="card-img"
                                alt="img-category">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center p-0 category-bg">
                                <h5 class="card-title text-center fs-3 fw-bold">
                                    {{ $category->name }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <a href="/berita" class="text-decoration-none mt-3 badge bg-primary p-2 fs-6">Kembali</a>
    </div>
@endsection
