@vite('resources/js/app.js')

<div class="container">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ $product_selected->image }}" class="card-img-top" alt="...">
            </div>
    <div class="col-md-8">
        <div class="card-body">
      <h5 class="card-title">{{ $product_selected->name }}</h5>
      <h6 class="card-subtitle">{{ $product_selected->isbn }}</h6>
      <p class="card-text">{{ $product_selected->description }}</p>
      <a href="{{ route('home') }}" class="btn btn-primary">Torna indietro</a>
    </div>
    </div>
  </div>
</div>

