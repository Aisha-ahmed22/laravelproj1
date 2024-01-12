<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\product;//lazem aktebhom
use App\Models\category;
use App\Models\country;
use App\Models\productDetail;
use Illuminate\Support\Facades\Validator;//lazem aktebhom
use App\Http\Requests\ProductsRequest;//lazem aktebhom

class productsController extends Controller

{
    //
    public function  listProducts()             //bcreate function 3shan t connect 3la elmodel 'product'
    {
        $products = product::get();
        $products = product::paginate(PAGINATION_LIMIT);
        return view('Products.list_products', compact('products'));//compact or with 3shan 2b3at eldata bdoon $ w da5el string
    /* Models\product::create(['name'=>'haha',//function create 3shan 23mel insert
                        'description'=>'jkh',
                        'price'=>'100']);
        //$products  = Models\product::get();//3shan tget eldata mn elgadwal
        */
        
        //return $products;

    }

    public function Create()                     //3shan 23red elblade aw el form
    {

        $categories = category::get();
        $countries = country::get();

        $output = [ 'categories'=>$categories, 
                    'countries'=>$countries ];
                    

        return view ('products.create_form')->with($output);//namespace.bladename
        }
       

         //insertion function

    public function insertProduct(ProductsRequest $request)           // 3shan 23mel submit lldata
    {
            //image insertion
            $file_extention = $request->image->getClientOriginalExtension();
            $file_name ='products_'.time().'.'.$file_extention;//3shan ydy kol sora ra8m mo5talef
            $path = 'Uploads';

            $request->image->move($path, $file_name);//3shan yn2el elmlaf


            //return '12221';
            $product = product::create([            //function create to insert data
                'name' => $request->name,
                'price' => $request->price,
                'description' =>$request->description,
                'image' => $file_name,
                'category_id' => $request->category_id,
            ]);
                
        $product->countries()->attach($request->country_id);//countries hya function gwa model product//attach to insert with keeping old value
       
        return redirect()->back()->with(['success' => 'Data Added successfully']);
    
    }

   
    //function edit bget feeha el models w breturn el view nfs function create laken edit bta5od id :el2 b3red beehom el form
    
    public function editProduct ($product_id)
    {
        $details= product::findOrFail($product_id);//id
        $categories = category::get();
        $countries = country::get();

        $output = [ 'product_data' =>$details,
                    'categories'=>$categories, 
                    'countries'=>$countries];

        return view ('products.edit_products')->with($output);//namespace.bladename


       // return view ('products.edit_products')->with(['product_data'=>$details]);//index yomthel mota3yer 7amel mgmo3et 6yam

    }



    public function updateProduct (ProductsRequest $request)
    
    {   //2wel 5atwa ( far2 )

        $details = product::findOrFail($request->product_id);//request 3shan ba5odha mn el user
       
        //image insertion
        if($request->hasFile('image'))
        {   $file_extention = $request->image->getClientOriginalExtension();
            $file_name ='products_'.time().'.'.$file_extention;//3shan ydy kol sora ra8m mo5talef
            $path = 'Uploads';

            $request->image->move($path, $file_name);//3shan yn2el elmlaf
        }
        else
        {
            $file_name =$details->image;
        }
        //return '12221';
        $details->update([            //to update data//tany far2
            'name' => $request->name,
            'price' => $request->price,
            'description' =>$request->description,
            'image' => $file_name,
            'category_id' => $request->category_id,

    ]);
            //insert data repeatedly
        //$details->countries()->attach($request->country_id);//countries hya function gwa model product//attach to insert with keeping old value

            //delete old data then insert only selected data
       //$details->countries()->sync($request->country_id);

            //update only the different valuue
       $details->countries()->syncWithoutDetaching($request->country_id);

        return redirect()->back()->with(['success' => 'Data Updated successfully']);

}


    public function deleteProduct ($product_id)
    {
        $details = product::findOrFail($product_id);//details da mot3ayer feeh eldata elly gaya mn elgadwal database ,findorfail lw la2a data hykamel lw mfeesh y6al3 error404
        $details->delete();

        return redirect()->back()->with(['success' => 'Data Added successfully']);
        
    }


    public function readProduct ($product_id)//3n taree2  el id htmsek eldata  bta3et elproduct
    {
        $product_data = product::findOrFail($product_id);

        return view('products.read_products', compact('product_data'));
    }

    public function productDetails ($product_id)
    {
        $productDetails = productDetail::findOrFail($product_id);
        $categories = category::get();
        $countries = country::get();

        $output = [ 'productDetails' =>$productDetails,
                    'categories'=>$categories, 
                    'countries'=>$countries];
        
        return view('web.productDetails'->with($output));
    }


    public function insertProductDetails(ProductsRequest $request)           // 3shan 23mel submit lldata
    {
            //image insertion
            $file_extention = $request->image->getClientOriginalExtension();
            $file_name ='products_'.time().'.'.$file_extention;//3shan ydy kol sora ra8m mo5talef
            $path = 'Uploads';

            $request->image->move($path, $file_name);//3shan yn2el elmlaf


            //return '12221';
            $productDetails = productDetail::create([            //function create to insert data
                'name' => $request->name,
                'price' => $request->price,
                'description' =>$request->description,
                'image' => $file_name,
                'material' => $$request->material,
                'size' => $request->size,
                'colour' => $request->colour,
                'category_id' => $request->category_id,
                'country_id' =>  $request->country_id,
                
            ]);
                
       
        return redirect()->back()->with(['success' => 'Data Added successfully']);
    
    }

   
}

