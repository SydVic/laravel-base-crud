<div class="card m-3" style="width: 18rem;">
  <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
  <div class="card-body">
    <h5 class="card-title">{{ $comic->title }}</h5>
    <a href="{{ route('comics.show', ['comic' => $comic->id] ) }}" class="card-link">Go to details</a>
  </div>
</div>