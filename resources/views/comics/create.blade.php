@extends('layouts.app')

@section('title')
  New Comic
@endsection

@section('main_content')
  <div class="container">
    <h5>Add a new Comic</h5>

    {{-- FEEDBACK ERRORI FORM PER UTENTE --}}
    {{-- si può mettere anche dopo la form oppure campo per campo per farlo uscire sotto il campo --}}
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    {{-- /FEEDBACK ERRORI FORM PER UTENTE --}}

    {{-- FORM PER CREAZIONE NUOVO FUMETTO --}}
    <form action="{{ route('comics.store') }}" method="post">
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        {{-- TEXT area non ha attributo value quindi old() va all'interno del tag --}}
        <textarea type="text" class="form-control" id="description" name="description">{{ old('description') }}</textarea>
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Image source</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Comic type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {{-- /FORM PER CREAZIONE NUOVO FUMETTO --}}
  </div>
@endsection