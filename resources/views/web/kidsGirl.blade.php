@extends ('web.mainFrame')<!--namespace.bladename -->

@section ('content')



<!--<h2 class='lang'>{{__('messages.products')}}</h2> //language page.table -->
<div class="card-deck">
<div class='row' >
@foreach($products as $product)
<div class='col-lg-4'>
<div class="card" >
  
    <img src="{{asset('Uploads/'.$product->image)}}" class="card-img-top" style='height: 500px'alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <p class="card-text"><small class="text-muted">{{$product->price}}</small></p>
    <button type ='button' class ='btn btn-md btn-outline-warning'>View Product</button>
    <a href ="{{url('cartAddItem', $product->product_id)}}" class ='btn btn-md btn-outline-warning' >Add To Cart<i class="fas fa-shopping-cart fa-lg fa-fw"></i></a>
    </div>
  </div>
  </div>

@endforeach
        
</div>
  </div>
        
        
       
          @endsection