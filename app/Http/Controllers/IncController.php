<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncController extends Controller
{
    function index(){
        return view('incharge_complain_detail');
    }
    function page(){
        return view('incharge_complain_page');
    }
    function view(){
        return view('incharge_view_police');
    }
    function add(){
        return view('police_add');
    }
}
