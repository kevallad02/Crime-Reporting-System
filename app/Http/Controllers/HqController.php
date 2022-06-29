<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HqController extends Controller
{
    function index(){
        return view('headHome');
    }
    function detail(){
        return view('head_case_details');
    }
    function view(){
        return view('head_view_policestation');
    }
    function add(){
        return view('police_station_add');
    }
}
