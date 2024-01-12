
@extends ('web.mainFrame')<!--namespace.bladename -->

@section ('content')



        <!--form-->
        <body>
<div class='container' >



<a href="{{route('create_product')}}"><button type="button" class="btn btn-info" style ='margin: 100px'>Add Product</button></a>

<a href="{{route('list_product')}}"><button type="button" class="btn btn-info" style ='margin: 100px'>products List</button></a>

<a href="{{route('create_carousel')}}"><button type="button" class="btn btn-info" style ='margin: 100px'>Add carousel</button></a>





</div>
</body>
    
    
    
    
@endsection