<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Son extends Model
{
    use HasFactory;

    protected $fillable = ['id','user_id','son_name','age'];

     public function User()
     {
         return $this->belongsTo('App\Models\User');//el son byantamy ll parent aw user
     }
}
