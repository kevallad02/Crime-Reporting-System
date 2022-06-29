<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view('complainer');
    }
    function details(){
        return view('complain_details');
    }
    function history(){
        return view('complain_history');
    }
}
