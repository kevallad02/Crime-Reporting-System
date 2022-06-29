<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo(){
        if(Auth()->user()->role == 1){
            return route('hq.dashboard');
        }
        elseif(Auth()->user()->role == 2){
            return route('inc.dashboard');
        }
        elseif(Auth()->user()->role == 3){
            return route('police.dashboard');
        }
        elseif(Auth()->user()->role == 4){
            return route('user.dashboard');
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if( auth()->attempt(array('email'=>$input['email'],'password'=>$input['password']))){

            if( auth()->user()->role == 1){
                return redirect()->route('hq.dashboard');
            }
            elseif( auth()->user()->role == 2){
                return redirect()->route('inc.dashboard');     
            }
            elseif( auth()->user()->role == 3){
                    return redirect()->route('police.dashboard');
            }
            elseif( auth()->user()->role == 4){
                    return redirect()->route('user.dashboard');
            }
        }
        else
        {
            return redirect()->route('login')->with('error','Email and Password are wrong');
        }
    }
}


