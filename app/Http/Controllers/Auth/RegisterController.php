<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    


        public function register(Request $request)
    {
        //validate form data
        $this->validate($request,
        [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'pseudo' => ['required', 'string', 'min:6', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        //create  user
        try {
            $z=$request->pseudo;
            if($z!= 'GDVFRPOK' && $z!='XXHGREKO' && $z!='WMGDAUKP' && $z!='STREHNBL' && $z!='SXPLOIPD' && $z!='WWXXJASI'
                && $z!='DZZHREUO' && $z!='OUYTRPOJ' && $z!='GFDRYUKK' && $z!='FDHYTGHH' && $z!='ARVZFVBN' && $z!='OJHGFTYY')  
            {
                return redirect()->back()->withInput($request->only('name', 'email', 'pseudo'))->with('error', 'wrong infos!');
            }

            $user = User::create([
                'name' => $request -> name,
                'email' => $request -> email,
                'pseudo' => $request -> pseudo,
                'password' => Hash::make($request->password),
                
            ]);

            //log the expert in
            Auth::guard('web')->loginUsingId($user->id);
            return redirect()->route('home');
        } catch (\exception $e){
            return redirect()->back()->withInput($request->only('name', 'email', 'pseudo'));
        }
    }
    
}
