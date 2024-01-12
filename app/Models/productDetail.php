<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productDetail extends Model
{
    use HasFactory;

    protected $fillable =['id','name', 'description' ,'image','price','colour', 'material','category_id', 'country_id'];

}