@extends('layouts.app')

@section('title')
  Comics | Index
@endsection

@section('main_content')
  @foreach ($comics as $comic)
      <h2>{{ $comic->title }}</h2>
  @endforeach
@endsection