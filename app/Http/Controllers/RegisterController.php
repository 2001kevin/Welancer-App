<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        $data['title'] = 'Register';
        return view('register', $data);
    }

    public function register_action(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email:rfc,dns',
            'password' => 'required',
            'paasword_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success, Please Login!');
    }

    public function login(){
        $data['title'] = 'Login';
        return view('login', $data);
    }
}