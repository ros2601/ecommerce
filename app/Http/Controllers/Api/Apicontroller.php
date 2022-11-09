<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\business;
use App\Models\product;
use App\Models\query;
use App\Models\cart;
use App\Models\contact;

class Apicontroller extends Controller
{
    //for api submit form
    public function formsubmit(Request $request)
    {
    $add= new business;
    if($request->isMethod('post'))
    {
        $add->name=$request->get('name');
        $add->email=$request->get('email');
        $add->password=$request->get('password');
        $add->save();
    }
     }
}
    // return response()->json(
    //     [
    //         "message"=>"Record Inserted";
    //     ],201);
    

    //for displaying in api
    // public function formdisplay()
    // {
    // $person=business::get()->toJson(JSON_PRETTY_PRINT);
    // return response($person,200); 
    // }
//http://localhost/laravel/work/commerce/routes/api/display-form

