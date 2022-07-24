@extends('layouts.main')

@section('content')
    @foreach ( $berita as $post )
        <article class="mb-5">
            <a href="/berita/{{ $post->slug }}"><h2>{{ $post->title }}</h2></a>
            <h5>By : {{ $post->author }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection


