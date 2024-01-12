<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Models\product;
class category extends Model
{
    use HasFactory;
    protected $fillable =['id','name'];

    public function products()
    {
        return $this->hasMany('App\Models\Models\product','category_id');
        
    }
}
