<?php

namespace App\Http\Controllers\decideur;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
    
        protected function rules()
        {
            return [
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed|min:8',
            ];
        }

        $response = $this->broker()->reset(
            $this->credentials($request),
            
        function ($decideur, $password) 
        {
            $this->resetPassword($decideur, $password);
        }
        );
    

    public function showResetForm(Request $request, $token = null)
    {
        return view('decideur.passwords.reset')->with(
        ['token' => $token, 'email' => $request->email]
        );
    }

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::DECIDEUR;
}
