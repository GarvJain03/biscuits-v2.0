<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('dashboard');
            }
        }

        return back()->with('error', 'Email or password is incorrect');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users|max:255',
            'first_member' => 'required',
            'first_member_email' => 'required|email:rfc,dns',
            'second_member_email' => 'email:rfc,dns',
            'first_member_grade' => 'required',
            'category' => 'required',
            'password' => 'required'
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->first_member = $request->first_member;
        $user->second_member = $request->second_member;
        $user->first_member_email = $request->first_member_email;
        $user->second_member_email = $request->second_member_email;
        $user->first_member_grade = $request->first_member_grade;
        $user->second_member_grade = $request->second_member_grade;
        $user->category = $request->category;
        $user->password = Hash::make($request->password);
        $user->auth_token = Str::random(32);
        $user->save();
        Auth::login($user);

        return redirect('/dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/auth/login');
    }
}
