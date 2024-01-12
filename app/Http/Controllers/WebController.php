     <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Models\product;
use  App\Models\category;

class WebController extends Controller

{
   
    public function index()
        {
            $products = product::get();
            $categories = category::get();
            //get only categories which have products without products
            //$categories = category::whereHas('products')->get();//function product gwa model category
            
            //return $categories;
            return view('web.kidsGirl', compact(['products','categories']));
           //return view('web.mainFrame',compact(['products','categories']));
        }
    public function categoryProducts($cat_id)
        {
            $products = product::where('category_id', $cat_id ,'=')->get();
            return $products;
            

        }

        public function Location()
        {
            return view('web.location');
        }
}
