@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-column align-items-center">
        <img class="rounded-circle border img-thumbnail mt-3 mb-3" id="foto-saya" src="asset/{{ $image }}"
            alt="foto-saya" width="200px">
        <h3>{{ $nama }}</h3>
        <h3>{{ $job }}</h3>
        <p>{{ $email }}</p>
    </div>
@endsection
