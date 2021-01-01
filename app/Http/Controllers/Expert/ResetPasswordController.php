<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

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
    
    public function showResetForm(Request $request, $token = null)
    {
        return view('expert.passwords.reset')->with(
        ['token' => $token, 'email' => $request->email]
        );
    }

    public function resetPassword ($expert, $password) 
   {
    $this->validate($request, $this->rules(), $this->validationErrorMessages());
    }

        protected function rules($response)
        {
            return [
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed|min:8',
            ];
        }

        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
            $this->resetPassword($user, $password);
            }
            );
            
            
    
        
    


    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::EXPERT;
}
