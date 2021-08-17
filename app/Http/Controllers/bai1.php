<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class x1controller extends Controller
{
    //
    function addData(Request $req)
    {
       $user= new user;
       $user->name=$req->name;
       $user->email=$req->email;
       $user->save();


    }
}