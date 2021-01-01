<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
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

    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::EXPERT;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:expert')->except('logout');
    }

    public function showLoginExpert() 
    {
         return view('expert.login');
    }

    public function guard()
    {
        return Auth::guard('expert');
    }

    public function login(Request $request)
    {
        // validate form data
        $this->validate($request,
    [
        'email' => 'required|string|email',
        'password' => 'required|string|min:8'
    ]
    );

    //Attempt to login as expert
    if (Auth::guard('expert')->attempt([
        'email' => $request->email,
        'password' => $request->password],
        $request->remember
    )){
        //if successful then redirect to intended route or expert home
        return redirect()->intended(route('expert.home'));
        }

    //if unsuccessful then redirect back to login page with email and remember fields
    
        return redirect()->back()->withInput($request->only('email', 'remember'))->with('info', 'Could not sign in with those details');
        
        } 

    public function logout(Request $request)
    {
        $this->guard('expert')->logout();

        $request->session()->invalidate();
        
        return $this->loggedOut($request) ?: redirect('/expert');
    }

}

