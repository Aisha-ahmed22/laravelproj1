@extends ('web.mainFrame')<!--namespace.bladename -->

@section ('content')




<div class ='container'>
<div class ='row'>
<table>


<tr>
<th>#ID</th>
  <td>{{ $product_data->id }}</td>
  <tr>

  <tr>
  <th>Name</th>
  <td>{{ $product_data->name }}</td>
</tr>

  <tr>
  <th>Price</th>
  <td>{{ $product_data->price }}</td>
</tr>
  
  <tr>
  <th>Image</th>
  <td><img src="{{ asset ('Uploads/'.$product_data->image) }}" /></td><!--asset function btwasalny l public y3ny byd5ol 3la file public-->
</tr>

  <tr>
  <th>Description</th>
  <td>{{ $product_data->description }}</td>
</tr>

  <td>
  <!--buttons for edit & delete-->
  <a class='btn btn-success' href="{{route('read_product', $product->id)}}">Read</a>
      <a class='btn btn-info' href="{{route('edit_product', $product->id)}}">Edit</a>
      <a class='btn btn-danger' href="{{route('delete_product', $product->id)}}">Delete</a>
     
  </td>
</tr>
 


</table>

</div>

</div>


     

</body>
    
    
    
    
@endsection