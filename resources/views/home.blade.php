<!DOCTYPE html>
<html>

  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <meta charset="UTF-8" />
    <title>Featured Products</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    @vite('resources/js/app.js')
  </head>

  <body>
    <div class="container d-flex justify-content-center flex-wrap p-5 gap-2">
    @foreach ($all_products as $item)
    <div class="card" style="width: 18rem;">
      <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->name }}">
      <div class="card-body">
        <h5 class="card-title">{{ $item->name }}</h5>
        <div class="mb-1">
        <span class="badge rounded-pill bg-warning">{{ $item->category->label }}</span>
      </div>
        <a href="{{ route('product',['id'=>$item->id]) }}" class="btn btn-primary">Vai all'articolo</a>
     
      </div>
    </div>
    @endforeach
   </div>
 
  </body>

</html>
