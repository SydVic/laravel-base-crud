@extends('layouts.app')

@section('title')
{{ $comic->title }}
@endsection

@section('main_content')
  <div class="container d-flex justify-content-center">
    @include('components.comic-card-detailed', $comic)
  </div>
@endsection