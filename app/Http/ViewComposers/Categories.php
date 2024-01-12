<?php
//ana elly bktebhom
namespace App\Http\ViewComposers;
use Illuminate\View\View;//view hwa el model
use App\Models\category;
class Categories{
    public function compose(View $view)
    {
       /* $Categories =     //b get el data fe class categories
        [
            ['id' => 1, 'name' => 'Php'],
            ['id' => 2, 'name' => 'Javascript'],
            ['id' => 3, 'name' => 'HTML'],
            ['id' => 4, 'name' => 'CSS'],
            ['id' => 5, 'name' => 'Jquery'],
        ];
        */
        $Categories = category::get();
        $view->with(['AllCategories'=>$Categories]);      //bb3at eldata llview
      // return view ('web.mainFrame');
    }
}