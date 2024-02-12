<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Account successfully created');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
       $credentials = [
        'email'=> $request->email,
        'password'=> $request->password,
       ];

       if(Auth::attempt($credentials)){
        return redirect('/admin')->with('success', 'Login Berhasil');
       }

       return back()->with('error', 'email or password salah');
    }
}
