@extends('layouts.app')

@section('title')
  Edit Comic
@endsection

@section('main_content')
  <div class="container">
    <h5>Edit Comic</h5>

    {{-- FEEDBACK ERRORI FORM PER UTENTE --}}
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

    {{-- FORM PER MODIFICA FUMETTO --}}
    <form action="{{ route('comics.update', ['comic' => $comic_to_edit->id]) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $comic_to_edit->title }}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea type="text" class="form-control" id="description" name="description">{{  old('description') ? old('description') : $comic_to_edit->description }}</textarea>
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Image source</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{   old('thumb') ? old('thumb') : $comic_to_edit->thumb }}">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{   old('price') ? old('price') : $comic_to_edit->price }}">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{   old('series') ? old('series') : $comic_to_edit->series }}">
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date (YYYY-mm-dd)</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{   old('sale_date') ? old('sale_date') : $comic_to_edit->sale_date }}">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Comic type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{   old('type') ? old('type') : $comic_to_edit->type }}">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {{-- /FORM PER MODIFICA FUMETTO --}}
  </div>
@endsection