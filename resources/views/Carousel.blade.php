@extends ('web.mainFrame')<!--namespace.bladename -->

@section ('content')


<body>      
    
    <!--@include('web.AllCategories')-->
        
    <div class='container-fluid' >
<div class='row'>
<div class='col-lg-8 mb-4'>





@if(Session::has('success') )      <!--mgmo3et mot3yrat btt7d gwaha shbah el cookies-->
<div class="alert alert-success" role="alert">
{{ Session::get('success')}}
</alert>
</div>
@endif


<form action="{{route('insert_carousel')}}" method='Post'  enctype="multipart/form-data"><!--route:name listed for route-->
@csrf         <!--for security-->
  <div class="control-group form-group">
  <div class= 'controls'>
        
        <!--carousel-->
       
      <label>image</label>
      
      <input type="file" class="form-control" name='image'>
     
  </div>
  </div>

  </form>
</div>
  </div>

  </div>


</body>
    
    
@endsection