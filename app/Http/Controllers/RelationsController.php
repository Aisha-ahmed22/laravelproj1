<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;
use App\Models\User;
use App\Models\Son;
use App\Models\country;
use App\Models\Models\product;

class RelationsController extends Controller
{
    //
    public function user_details()
    {  // $users = User::findOrFail(2);//to get user data
       //$users = User::find(2)->address;//bget eldata 3n taree2 el id//to get user address
       
      /* $users = User::with(['address' =>function($q)      //find user data with address
       {
            $q->select('details' , 'user_id');
       }])->find(1);*/


       /* $users = User::with(['address' =>function($q)       //get all users data with address elly 3ndhom address relation fe model user
       {
            $q->select('details' , 'user_id');
       }])->whereHas('Address')->get();*/

      
        //$users =User::whereHas('Address')->get();      // to get users elly 3ndhom address without address //address is the function in model User
       
       // $users = User::whereDoesNTHave('Address')->get();
       return $users;//b3redha
    }
            //relation one to one

    public function address_details()
    { 
        $address = Address::find(1);//hatly el addres bta3 id =1 fe gdwal el users w e3redoh
        return $address->User;
    }
            //relation one to many

    public function User_sons()
        {
            $user_sons = User::with(['Son'=>function($q)//function aw relation son elly fe model user
            {
                $q->select('son_name','user_id','sons.id');
            }])->get();

            return $user_sons;
        }
            //relation many to many

        public function products_countries()
        {   //elproducts elly leeha kza country ezher lha el data de
            $products = product::with(['countries'=>function($q)//function aw relation countries elly fe model product
            {
                $q->select('country_name','countries.id');// countries:hya el table
            }])->get();

            return $products; 
        }   
    
}
