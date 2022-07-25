@extends('layouts.main')

@section('content')
    <ul>
      @foreach ( $categories as $category )
      <li class="mb-3"><a class="text-decoration-none" href="/category/{{ $category->slug }}"><h4>{{ $category->name }}</h4></a></li>
      @endforeach
    </ul>
@endsection