<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLoginForm(): View
    {
        return view('admin.auth.login');
    }


    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:admins,email'],
            'password' => ['required', 'min:6']
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        } else {
            return back()->withInput(['email' => $request->email])->with('message', 'Incorrect password! Try Again');
        }
    }

    public function dashboard(): View
    {
        return view('admin.dashboard');
    }


    public function password(): View
    {
        return view('admin.auth.password.change');
    }

    public function updatepassword(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'min:6']
        ]);
        $admin = Admin::FindorFail(Auth::guard('admin')->user()->id);
        $admin->update([
            'password' => Hash::make($request->password)
        ]);
        return back()->with('message', 'Password updated successfully');
    }


    public function logout(): RedirectResponse
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.showLoginForm');
    }
}
