<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\product;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    //
    public function index()
    {
        $cartItems = Cart::content();//this function from laravel shopping cart plugin github.com
        return view('web.cart',compact('cartItems'));
    }

    public function addItem( $product_id)
    {
        $product = product::findOrFail($product_id);
        Cart::add([$product_id, $product->name, 1 ,$product->price, $product->description]);
        //this function from laravel plugin
        return back();
      
    }
}
