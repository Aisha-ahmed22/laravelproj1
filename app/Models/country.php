<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Models\product;
class country extends Model
{
    use HasFactory;

    protected $fillable =['id','country_name'];

    
    //relation many to many
    public function product ()
    {
        return $this->belongsToMany('App\Models\Models\product','products_countries');//(msar elmodel,gadwal waseet)
    }
}
