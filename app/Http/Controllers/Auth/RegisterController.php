<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller 
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd('abc');
        // dd($request->get('email'));
        // dd($request->email);
        // Validation
        $this->validate($request, [
            // 'name' => ['required', 'max' => 255],
            'name' => 'required|max:255',
            'username' => 'required',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        dd('store');

        // store user
        // sign user in
        // redirect 
    }
}
