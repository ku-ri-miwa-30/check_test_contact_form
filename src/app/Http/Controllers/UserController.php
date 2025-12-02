<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

     public function store(Request $req)
    {
        $user=$req->only('name','email', 'password');
        User::create($user);
        return view('admin');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function login_check(Request $req)
    {
        $user_login=$req->only('email', 'password');
        User::find($user_login);

        return view('admin');
    }

    public function admin()
    {
        return view('admin');
    }

}
