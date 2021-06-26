<?php

namespace App\Http\Controllers\user\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('web.auth.index');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'      => 'required|email|exists:users,email',
            'password'   => 'required|min:6',
        ]);
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        } else {
            return back()
                ->with('message', 'Incorrect Password! Try again')
                ->withInput(['email' => $request->email]);
        }
    }
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);

        $user = User::create([
            'name'       => $request->first_name . ' ' . $request->last_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('home');
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('home');
    }
}
