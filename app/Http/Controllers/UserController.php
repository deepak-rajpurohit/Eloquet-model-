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
    //     $response= Users::where('id', '5')->delete();

    //     if($response){
    //         return "data dleted";
    //     }else{
    //         return "data not deleted";
    //     }
    //     // return view('user', ['users'=>$response]);
    // }
    // function post(){
    //     return "this is a post method function";
    // }
    // function put(){
    //     return "This is a put method function";
    // }
    // function delete(){
    //     return 'This is a delete method function';
    // }
    // function any(){
    //     return "This is any function";
    // }
    // function group1(){
    //     return "This is group 1";
    // }
    // function group2(){
    //     return "This is group 2";
    // }

}
function login(Request $request){
    echo "Request method is ". $request->method();
    echo "</br>";
    echo "Request path is ". $request->path();
    echo "</br>";
    echo "Request url is ". $request->url();
    echo "</br>";
    echo "Request name is ". $request->user_name; //input('user_name');
    echo "</br>";
    print_r($request->input());
    echo "</br>";
    print_r($request->collect());
    echo "</br>";
    if($request->isMethod('post')){
        echo "execute code for post request";
    }else{
        echo "execute code for other request";
    }
    echo "</br>";

    if($request->is('users')){
        echo "execute code for users path";
    }else{
        echo "execute code for other path";
    }

    echo "</br>";
    echo "Request IP is ". $request->ip();
}

}
