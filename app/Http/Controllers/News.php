<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class News extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // return 'index function';

       $data =['name'=>'Ahmed', 'age'=> 25,'id'=> 2];
       
       $obj = new \stdClass();
       $obj->name ='Mohammed';
       $obj->age = 33;
      //return view ('News.add_form')->with(['name'=>'Ahmed', 'age'=> 25]);//dictionary 3shan ab3t data ll view 3n tareea2 with or variable
     //return view ('News.add_form', $data);
      //return view('News.add_form' , compact('obj'));//bt7awl el obj l array 3shan 2st2belha fe el view
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return 'index create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
