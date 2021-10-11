<?php

namespace App\Http\Controllers\Admin\Front_Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {

        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
            $this->validate($request, [
                'email'     => 'required|email',
                'password'  => 'required',
            ]);

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password ])) {
                return redirect('/dashboard');
            }
            return redirect('/login')->with('error', 'Invalid Email or Password');

    }

}
