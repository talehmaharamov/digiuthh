<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        //$credentials = $request->only('email', 'password');
        

        
        if (Auth::attempt([$fieldType => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->to('/');
        }

        return redirect()->back()->with('error', __('auth.failed'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('login'));
    }
}
