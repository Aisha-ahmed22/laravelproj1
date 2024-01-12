@extends ('web.mainFrame')<!--namespace.bladename -->

@section ('content')



        <!--form-->
        
<div class='container-fluid' >



@if(Session::has('success') )      <!--mgmo3et mot3yrat btt7d gwaha shbah el cookies-->
<div class="alert alert-success" role="alert">
{{ Session::get('success')}}
</alert>
</div>
@endif

<form action="{{route('update_product')}}" method='Post'  enctype="multipart/form-data"><!--enctype to upload image-->
@csrf        <!--for security-->
  <div class="form-group">
  <!--Product name -->
    <label>Product name</label>
      <input type="text" class="form-control" name="name" value="{{$product_data->name}}">
      @error('name')
     <span class="error">{{$message}}</span>
      @enderror
      </div>

    <!--category -->
    <div class="control-group form-group">
    <label>Category Name</label>
    <select name='category_id' class='form-control' ><!--multiple to make countries multiple select-->
      @foreach($categories as $cat)
        <option value="{{$cat->id}}" <?php echo $product_data->category_id == $cat->id ? 'selected' : '';?>>{{$cat->name}}</option><!--if el id elly gaya mn elgadwal (eladmin submit) hya hya bta3et eloption-->
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
      <input type="text" class="form-control" name="price" value="{{$product_data->price}}"><!--value :bte3red-->
      @error('price')
     <span class="error">{{$message}}</span>
      @enderror
    </div>

      <!--description -->
    <div class="form-group">
    <label>Description</label>
      <input type="text" class="form-control" name="description" value="{{$product_data->description}}">
      @error('description')
     <span class="error">{{$message}}</span>
      @enderror
      </div>

     <!--image -->
      <label>image</label>
      <img src="{{ url ('Uploads/'.$product_data->image) }}" /><!--fe el blade el index byt3ered k variable-->
      <input type="file" class="form-control" name='image'>
      @error('image')
     <span class="error">{{$message}}</span>
      @enderror
  </div>

    <input type="hidden" class="form-control" name='product_id' value='{{$product_data->id}}'><!--value bte3red eldefault value el 2deema 3shan 23melha edit-->


  <div id ='success'></div>
<!--for success /fail messages-->
  <!--add and back buttons-->
  <button type="submit" class="btn btn-primary" id ='sendMessageButton'>ُEdit</button>
  <a class='btn btn-secondary' href ="{{route('list_product')}}">Back</a>
</form>


 <!--delete product -->

<script>
  $('#delete_image').click(function(event){    //link
    event.preventDefault();
    $("#img").hide();//to hide img tag
    $("#delete_image").hide();//to hide delete link or button
    $("#img_input").show();//to show upload input aw bar
  })

</script>




</body>
    
    
    
    
@endsection