<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login()
    {
        return Inertia::render('Login', []);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if ($credentials['email'] === 'behat@st.vn' && $credentials['password'] === 'abc@123') {
            return redirect('/home');
        }
        return back();
    }
}
