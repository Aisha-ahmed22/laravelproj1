

    
             @foreach($AllCategories as $category)
             <ul>
            <li class="nav-item active">
                 <a class="nav-link" href="{{route('cat_products','kids_girl', $category->id)}}" style='color: #3a6f8f;'>{{$category['name']}}<span class="sr-only">(current)</span></a>
            </li>
             </ul>
             @endforeach 
              