<div class="card" style="width: 30rem;">
  <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
  <div class="card-body">
    <h5 class="card-title">{{ $comic->title }}</h5>
    <p class="card-text">{{ $comic->description }}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{ $comic->series }}</li>
    <li class="list-group-item">{{ $comic->sale_date }}</li>
    <li class="list-group-item">{{ $comic->price }}</li>
    <li class="list-group-item">{{ $comic->type }}</li>
  </ul>
  <div class="card-body">
    <a href="{{ route('comics.index') }}" class="card-link">Back to all comics</a>
    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="card-link">Edit</a>
    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST" class="mt-3">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to dlete this item?')">Delete!!!</button>
    </form>
  </div>
</div>