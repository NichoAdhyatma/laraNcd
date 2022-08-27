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
                            <div class="card-img-overlay d-flex align-items-center justify-content-center category-bg">
                                <h5 class="card-title text-center fs-3 fw-bold me-2">
                                    {{ $category->name }}
                                </h5>
                                <small class="mb-3">Category</small>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <a href="/berita" class="text-decoration-none mt-3 badge bg-primary p-2 fs-6"><i class="bi bi-arrow-left"></i> Kembali</a>
    </div>
@endsection
