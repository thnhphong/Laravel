<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index(){
        return view('auth.signup');
    }
    public function store(Request $re){
        $re->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $user = new User();
        $user->name = $re->input('name');
        $user->email = $re->input('email');
        $user->password = Hash::make($re->input('password'));
        $user->save();
        return redirect()->route('home')->with('success', 'Account created successfully. ');
    }
}
