<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CehckController extends Controller
{
    public  function test(){

        $email = Auth::user()->id;

        return  $email;
    }
}
