<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(Request $request)
    {
        $userType = $request->input('user_type');
        return view('login', compact('userType'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            // Authentication passed
            $user = Auth::user();            

            if ($user->user_roles === 'Admin') {
                // Paginate members data before passing it to the view
                $members = Member::select('id', 'name', 'email', 'subclan', 'sub_subclan')->paginate(10);
                return redirect()->route('admin.dashboard');
            } elseif ($user->user_roles === 'Member') {
                $members = Member::select('id', 'name', 'email', 'subclan', 'sub_subclan')->paginate(10);
                return redirect()->route('member.dashboard');
            }
        }

        // Authentication failed
        //return back()->withErrors(['email' => 'Invalid credentials']);
        return view('test');
    }
}
