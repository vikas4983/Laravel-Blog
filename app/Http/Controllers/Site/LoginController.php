<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/'; // Customize the redirect path after login
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function userlogin()
    {
        return view('site.auth.user');
    }
    public function user(Request $request)
    {
        // Your custom validation logic here
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Your custom login logic here
if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication passed, redirect or perform other actions
            return $this->sendLoginResponse($request);
        }

        // Authentication failed, handle it
        return $this->sendFailedLoginResponse($request);
    }
}
