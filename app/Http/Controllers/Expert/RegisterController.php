<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Expert;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct()
        {
            $this->middleware('guest:expert');
        }

        public function showRegistrationForm()
        {
            return view('expert.register');
        }
        
    
    
    public function register(Request $request)
    {
        //validate form data
        $this->validate($request,
        [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:experts'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        //create expert user
        try {

            $expert = Expert::create([
                'name' => $request -> name,
                'email' => $request -> email,
                'password' => Hash::make($request->password),
            ]);

            //log the expert in
            Auth::guard('expert')->loginUsingId($expert->id);
            return redirect()->route('expert.home');
        } catch (\exception $e){
            return redirect()->back()->withInput($request->only('name', 'email'));
        }
    }
}
