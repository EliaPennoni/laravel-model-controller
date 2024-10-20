@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
@foreach ($movies as $movie)
    <p>{{ $movie->title }}</p>
@endforeach

@endsection
