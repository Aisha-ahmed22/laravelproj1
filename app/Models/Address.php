<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Address extends Model
{
    use HasFactory;

    protected $fillable =['id','user_id','details'];
    protected $hidden =['created_at','updated_at'];

    public function User()
    {
        return $this->belongsTo('App\Models\User', 'user_id');//this user elly 3enwano ytwagad fe (msar elmodel,foreign key)
    }
}
