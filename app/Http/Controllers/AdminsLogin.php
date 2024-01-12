<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;//ana elly bktebha
class AdminsLogin extends Controller
{
    //

    public function adminLoginForm()
    {    
        return view ('auth.AdminLogin');
    }
    public function adminDoLoginForm (request $request)
    {
        $this->validate
        (
            $request,
            [
                'email' =>'required|email',
                'password' => 'required'
            ]   
        );

        //return $request
        if (Auth::guard('admins')->attempt(['email'=> $request->email , 'password'=> $request->password]));
        {
            //return 'you are admin';
            return view('web.adminPermissions');
        }
        
    }
}
