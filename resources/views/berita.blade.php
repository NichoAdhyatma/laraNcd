@extends('layouts.main')

@section('content')
    @foreach ( $berita as $post )
        <article class="mb-5 border-bottom pb-4">
            <a class="text-decoration-none text-dark" href="/berita/{{ $post->slug }}"><h2>{{ $post->title }}</h2></a>
            <h5>Writen By : <a class="text-decoration-none" href="#">{{ $post->user->name }}</a></h5>
            <h5 class="mb-3">Category : <a class="text-decoration-none badge bg-primary" href="/category/{{ $post->category->slug }}">{{ $post->category->name  }}</a></h5>
            <p>{{ $post->excerpt }}</p>
            <a class="text-decoration-none" href="/berita/{{ $post->slug }}"><h6>Read more.,.</h6></a>
        </article>
    @endforeach
@endsection


