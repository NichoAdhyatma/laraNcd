@extends('layouts.main')

@section('content')
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <h5>By : {{ $post->author }}</h5>
        {!! $post->body !!}
    </article>
    <a href="/berita">Kembali</a>
@endsection
