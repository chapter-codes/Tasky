<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('users.index' , ['users'=>json_encode(User::all())]);
    }
    public function show(User $name){
        print_r($name);
        // (dd(Request:));
         // return view('users.user', ['user'=>$name]);
    }
    // public function search(User $name, Request $request){
    //     dd($request);

    //      return view('users.user', ['user'=>$name]);
    // }

}
