<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){

//        dd(bcrypt('123'));

        if(Auth::check())
        {
            return redirect()->route('admin.index');
        }
        return view('pages.admin.users.login',['title'=>'Login System']);
    }
    public function store(Request $request){
        $credentials = $request->validate([
            'username' => 'required|min:6',
            'password' => 'required',
        ],[
            'username.required' => 'username is not required',
            'password.required' => 'password is not required'
        ]);

        $user = DB::table('users')->where('username',$request->username)->first();

        if(!$user)
            return back()->withErrors([
                'username' => 'username does not exist',
            ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        }
        return back()->withErrors([
            'password' => 'Incorrect password',
        ]);
    }
    public function logout(){

        if(Auth::check())
        {
            Auth::logout();
        }
        return redirect()->route('login');
    }
}
