<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/home';
    protected function authenticated(Request $request, $user)
    {
        if($user->isAdmin()){
            return redirect('admin.dashboard');
        }
        return redirect('/home');
    }
    public function index(){
        return view('auth.login');
    }
    /**
     * Handle the login form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $re){
        $re->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        if(auth()->attempt($re->only('email', 'password'))){
            return redirect()->intended('/dashboard');
        }
        return back()->withInput()->withError(['email' => 'Invalid credentials']);
    }
    public function logout(){
        return redirect('login');
    }
}
