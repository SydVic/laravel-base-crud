@extends('layouts.app')

@section('title')
  Comics | Index
@endsection

@section('main_content')
  <div class="comics-container d-flex">
    @foreach ($comics as $comic)
        @include('components.comic-card', $comic)
    @endforeach
  </div>
@endsection