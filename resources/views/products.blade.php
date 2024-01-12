@extends('layout')

@section('title', 'Products')

@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}

</div>
@endif


    <div class="container products">

        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ asset('Uploads/'.$product->image)}}"  height="300">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ $product->description }}</p>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                            
                            
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->

    </div>

@endsection