<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
  

    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard';

  
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
       
        return view('auth.login');
    }

    public function postlogin(Request $request){
       
        $validator=  $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ],
    [
'email.required'=>'Please provide email',
'password.required'=>'Please provide password',
    ]);
  
    if(auth()->attempt(array('email' => $request->email, 'password' => $request->password)))
        {
            if (auth()->user()->roll_type == 0) {
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('admin.login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }

    public function logout(){
        Auth::logout();
         Session::flush(); 
        return redirect()->route('admin.login');

    }
}
