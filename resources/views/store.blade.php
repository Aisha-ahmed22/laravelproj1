@extends('layout')


@section('content')

<div class="container">
    <div class="section">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{route('index')}}" role="button">Learn more</a>
            </p>
        </div>
    </div>

    <div class="section">
        <div class="row">
            @foreach ($latestProducts as $product)
                <div class="col-md-4">
                    <div class="card" >
                        <img class="card-img-top" src="{{ asset('Uploads/'.$product->image)}}" >
                        <div class="card-body">
                        <h5 class="card-title">{{ $product->name}}</h5>
                        <p class="card-text"> {{$product->price}}</p>
                        <p class="card-text"> {{$product->description}}</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                        </div>
                    </div>

                </div>
            @endforeach
           
        </div>
    </div>
</div>

@endsection