<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productsOffers extends Controller
{
    //
    public function __construct()//htt6b2 3la kol elfunctions
    {
        $this->middleware('auth')->except('offerDetails');
    }



    public function listOffers()
    {
    return'all offers in controller';
    }
    public function offerDetails()
    {
        return'welcome in offer details';
    }
}