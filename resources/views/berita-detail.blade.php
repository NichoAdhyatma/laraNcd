@extends('layouts.main')

@section('content')
    <article class="mb-4">
        <h5>Writen By : <a class="text-decoration-none" href="#">{{ $post->user->name }}</a></h5>
        <h5 class="mb-3">Category : <a class="text-decoration-none badge bg-primary" href="/category/{{ $post->category->slug }}">{{ $post->category->name  }}</a></h5>
        {!! $post->body !!}
    </article>
    <a class="text-decoration-none p-2" href="/berita"><h6>Kembali ke Artikel</h6></a>
@endsection


