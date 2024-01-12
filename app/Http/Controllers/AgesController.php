<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgesController extends Controller
{
    //
    public function __construct ()
    {
        $this->middleware('auth');
    }

    public function ageCheck ()
    {
        return 'you are allowed to use this function';
    }
}
