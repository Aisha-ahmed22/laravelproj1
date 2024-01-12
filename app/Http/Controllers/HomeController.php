<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\product;
use App\Models\Carousel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');//->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
       
    }

    public function index()
    {
        $products=product::get();
        $carousels =Carousel::get();
        
        return view('web.home', compact('products','carousels'));
        
        
    }
}
