<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers\Auth\User;

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
        // dd($request);
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

        User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'username' => $request -> username,
            'password' => Hash::make($request -> password),
        ]);

        // store user
        // sign user in
        // redirect 
    }
}
