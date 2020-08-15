<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    /**
     * Show the form for Login.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login.index');
    }

    /**
     * Authenticate user after submitting form.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            print "hi";
            // Authentication passed...
            return redirect()->intended('/dashboard');
        } else {
            print "wrong";
        }
    }
}
