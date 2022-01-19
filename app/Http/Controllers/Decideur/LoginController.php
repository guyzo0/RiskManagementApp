<?php

namespace App\Http\Controllers\Decideur;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
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
    protected $redirectTo = RouteServiceProvider::DECIDEUR;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:decideur')->except('logout.decideur');
      
    }

    public function showLoginForm() 
    {
         return view('decideur.login');
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

    //Attempt to login as decideur
    if (Auth::guard('decideur')->attempt([
        'email' => $request->email,
        'password' => $request->password],
        $request->remember
    )){
        //if successful then redirect to intended route or decideur home
        return redirect()->intended(route('decideur.home'));
        }

    //if unsuccessful then redirect back to login page with email and remember fields
    
        return redirect()->back()->withInput($request->only('email', 'remember'))->with('merror', 'Could not sign in with those details');
        
        
        }
        

    public function logout(Request $request)
    {
        $this->guard('decideur')->logout();

        $request->session()->invalidate();
        
        return $this->loggedOut($request) ?: redirect('decideur.login');
    }

    

    protected function guard()
    {
        return Auth::guard('decideur');
    }


}