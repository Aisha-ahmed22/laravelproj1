
@extends ('web.mainFrame')<!--namespace.bladename -->

@section ('content')


<!--card-->
@foreach($productDetails as $product)
<div class="card" style="width: 50rem; margin-left: 15rem;">
    
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('$product->image')}}" class="d-block w-100" alt="...">
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
    
    

  <div class="card-body">
    <h2 class="card-title">{{$product->name}}</h2>
    <p class="card-text">{{$product->description}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$product->material}}</li>
    <li class="list-group-item">{{$product->size}}</li>
    <li class="list-group-item">{{$product->colour}}</li>
    <li class="list-group-item">{{$product->price}}</li>
    
  </ul>
  <div>
    @endforeach
   <button type="button" class="btn btn-warning button2" >ADD TO CART  <i class="fas fa-cart-plus fa-lg"></i></button>
  </div>
</div>
</body>
    
    
    
    @endsection