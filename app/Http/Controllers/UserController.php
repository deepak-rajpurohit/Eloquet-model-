<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    //
    function user(){
        // $response= Users::all();
        // $response=Users::where('city','Jodhpur')->get();
        // $response=Users::where('city','Jodhpur')->first();

        //
        // $response = Users::find(1);
        // $response = [$response];
        // $response = Users::insert([
        //     'name'=>'Ramesh',
        //     'email'=>'ramesh@email.com',
        //     'city'=>'Mumbai',
        // ]);
        // if($response){
        //     return "data inserted";
        // }else{
        //     return "Data not inserted";
        // }
        // $response= Users::where('id', '3')->update(['city'=>'Ajmer']);

        // if($response){
        //     return "data updated";
        // }else{
        //     return "data not updated";
        // }
        $response= Users::where('id', '5')->delete();

        if($response){
            return "data dleted";
        }else{
            return "data not deleted";
        }
        // return view('user', ['users'=>$response]);
    }
}
