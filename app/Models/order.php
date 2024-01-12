<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $table = "orders"; 

    protected $fillable = ['id','user_id','cart'];
    protected $hidden = ['created_at','updated_at'] ;         
    public $timestamp = 'false';

/*
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['quantity']);
    }

    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
