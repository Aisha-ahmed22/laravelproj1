@extends ('web.mainFrame')<!--namespace.bladename -->

@section ('content')



        <!--form-->
        
<div class='container-fluid' >
<div class='row'>
<div class='col-lg-8 mb-4'>





@if(Session::has('success') )      <!--mgmo3et mot3yrat btt7d gwaha shbah el cookies-->
<div class="alert alert-success" role="alert">
{{ Session::get('success')}}
</alert>
</div>
@endif


<form action="{{route('insert_product')}}" method='Post'  enctype="multipart/form-data"><!--route:name listed for route-->
@csrf         <!--for security-->
  <div class="control-group form-group">
  <div class= 'controls'>

    <!--product name -->

    <label>Product name</label>
     
      <input type="text" class="form-control" name="name">
      @error('name')
     <span class="error">{{$message}}</span>
      @enderror
      </div>

    <!--category -->
    <div class="control-group form-group">
    <label>Category Name</label>
    <select name='category_id' class='form-control' ><!--multiple to make countries multiple select-->
      @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
      @error('category_id')
        <span class="error">{{$message}}</span>
      @enderror
    </div>

     <!--country -->
    <div class="control-group form-group">
    <label>Country Name</label>
    <select name='country_id[]' class='form-control' multiple =''><!--multiple to make countries multiple select-->
    @foreach($countries as $country)
      <option value="{{$country->id}}">{{$country->country_name}}</option>
    @endforeach
    </select>
      @error('country_id')
        <span class="error">{{$message}}</span>
      @enderror
    </div>

    <!--price -->

    <div class="form-group">
    <label>Price</label>
      <input type="text" class="form-control" name="price">
      @error('price')
     <span class="error">{{$message}}</span>
      @enderror
    </div>

      <!--description -->
    <div class="form-group">
    <label>Description</label>
      <input type="text" class="form-control" name="description">
      @error('description')
     <span class="error">{{$message}}</span>
      @enderror

      <!--image -->
      <label>image</label>
      
      <input type="file" class="form-control" name='image'>
      @error('image')
     <span class="error">{{$message}}</span>
      @enderror
  </div>
  </div>


  <div id ='success'></div>

  <!--add and back buttons-->
  <button type="submit" class="btn btn-primary" id ='sendMessageButton'>Add</button>
  <a class='btn btn-secondary' href ="{{route('list_product')}}">Back</a>
</form>
</div>
  </div>

  </div>


</body>
    
    
@endsection