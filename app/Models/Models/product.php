<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\country;
use App\Models\category;
use Gloudemans\Shoppingcart\Contracts\Buyable;
class product extends Model implements Buyable
{

    public function getBuyableIdentifier($options = null) {
        return $this->id;
    }
    public function getBuyableDescription($options = null) {
        return $this->name;
    }

    public function getBuyablePrice($options = null) {
        return $this->price;
    }
    use HasFactory;

    //protected $table = "products";//protected or public 3shan a3'yar aw access 3la variable
    protected $fillable =['name', 'description', 'price' ,'image','active','category_id'];//by3mel access 3la el7okool de mn eltable
   //protected $hidden =['created_at', 'updated_at'];//mabyzhrsh lma b3mel select
    public $timestamps = false;//kol ma yegy ydeef row elmafrod maylzmosh ykteb etkaryet emta


        //relation many to many

    public function countries ()
    {
        return $this->belongsToMany('App\Models\country','products_countries');
    }

    ////relation one to many 3shan 1geeb el products elly gwa category wa7ed
    public function categories ()
    {
        return $this->belongsTo('App\Models\category');
    }


}

