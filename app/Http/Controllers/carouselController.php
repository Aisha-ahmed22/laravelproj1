<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Models\product;
class carouselController extends Controller
{
    //
    public function carousel()
    {
        $carousels = Carousel::get();
        return view('web.home',compact('carousels'));
    }


    public function createCarousel()                     //3shan 23red elblade aw el form
    
    {
        return view ('createCarousel');
    }


    public function insertCarousel(Request $request)           // 3shan 23mel submit lldata
    {
        
            $file_extention = $request->image->getClientOriginalExtension();
            $file_name ='products_'.time().'.'.$file_extention;//3shan ydy kol sora ra8m mo5talef
            $path = 'images';

            $request->image->move($path, $file_name);//3shan yn2el elmlaf
    

              //
            $carousels = Carousel::create([
                
                'image' => $file_name,
                ]);
               
                return redirect()->back()->with(['success' => 'Data Added successfully']);

               
        }
}


