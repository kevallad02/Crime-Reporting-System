<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliceController extends Controller
{
    function index(){
        return view('police_complain_detail');
    }
    function add(){
        return view('police_add');
    }
    function done(){
        return view('police_complete');
    }
    function pending(){
        return view('police_pending_complain');
    }
    function station(){
        return view('police_station_add');
    }
}
