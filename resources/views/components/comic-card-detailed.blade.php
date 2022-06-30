<div class="card" style="width: 18rem;">
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
    <a href="#" class="card-link">Buy</a>
  </div>
</div>