<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Homecontroller extends Controller
{
    public function home(){

      $users =User::all();



        return view('home',compact('users'));
    }
}
