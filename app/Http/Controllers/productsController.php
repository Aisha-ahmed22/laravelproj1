<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\product;
use App\Models\User;

use App\Http\Requests\productsRequest;
use Illuminate\Contracts\Session\Session;
use Auth;
use Cartalyst\Stripe\Laravel\Facades\Stripe;



class productsController extends Controller
{
    //view products
    public function index()
    {
        $products =product::all();
        return view('products', compact('products'));
    }
   

    public function cart()
    {
        return view('web.cart');
    }
    
    public function addToCart($product_id)
    {
        $product = product::findOrFail($product_id);
       /*
        $product = product::find($product_id);

        if(!$product) {

            abort(404);

        }
*/
        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $product_id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "image" => $product->image
                    ]
            ];

            session()->put('cart', $cart);

           
            return redirect()->back()->with(['success'=> 'product added to cart successfully']);
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$product_id])) {

            $cart[$product_id]['quantity']++;

            session()->put('cart', $cart);

            
            return redirect()->back()->with(['success'=> 'product added to cart successfully']);

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$product_id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with(['success'=> 'product added to cart successfully']);
    }

    public function update(Request $request)
    {

        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'product removed successfully');
        }
    }

   
    public function store()
    {
        $latestproducts = product::latest()->take(3)->get();
      //  return  $latestproducts;

      return view('store',compact('latestproducts'));
    }

    public function checkout($total)
    {
        //return $total;
        return view('web.checkout',compact('total'));
    }
    
    public function charge(Request $request) {

      //  dd($request->stripeToken);
       
        $charge = Stripe::charges()->create([
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'amount'   => $request->total,
            'description' => ' Test from laravel new app'
        ]);

        $chargeId = $charge['id'];

        if ($chargeId) {
            // save order in orders table ...
            
            auth()->user()->orders()->create([
                'cart' => serialize( session()->get('cart'))
            ]);
            // clearn cart 

            session()->forget('cart');  
            return redirect()->route('store')->with('success', " Payment was done. Thanks");
        } else {
            return redirect()->back();
        }
        
    }
    

}


