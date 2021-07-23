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
        dd($request->email);
        // Validation

        // store user
        // sign user in
        // redirect 
    }
}
