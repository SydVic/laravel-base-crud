@extends('layouts.app')

@section('title')
  New Comic
@endsection

@section('main_content')
<div class="container">
  <h5>Add a new Comic</h5>
  <form action="{{ route('comics.store') }}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text-area" class="form-control" id="description" name="description">
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Image source</label>
      <input type="text" class="form-control" id="thumb" name="thumb">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" name="series">
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale date (YY-mm-dd)</label>
      <input type="text" class="form-control" id="sale_date" name="sale_date">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Comic type</label>
      <input type="text" class="form-control" id="type" name="type">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection