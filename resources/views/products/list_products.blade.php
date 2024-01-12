@extends ('web.mainFrame')<!--namespace.bladename -->

@section ('content')


<style>
  th{width:200px}
</style>

<div class ='container'>
<div class ='row'>
<table>
<tr>
  <th>#ID</th>
  <th>Name</th>
  <th>Price</th>
  <th>Image</th>
  <th>Description</th>
</tr>

@foreach ($products as $product)<!--3shan 23red elsora fe foreach-->
<tr>
  <td>{{ $product->id }}</td>
  <td>{{ $product->name }}</td>
  <td>{{ $product->price }}</td>
  <td><img src="{{ asset ('Uploads/'.$product->image) }}" style="width: 300px"/></td><!--asset function btwasalny l public y3ny byd5ol 3la file public-->
  <td>{{ $product->description }}</td>
  <td>
  <!--buttons for edit & delete-->
  <a class='btn btn-success' href="{{route('read_product', $product->id)}}">Read</a>
      <a class='btn btn-info' href="{{route('edit_product', $product->id)}}">Edit</a>
      <a class='btn btn-danger' href="{{route('delete_product', $product->id)}}">Delete</a>
     
  </td>
</tr>
 
@endforeach

</table>

</div>

</div>


     

</body>
    
    
    
    
@endsection