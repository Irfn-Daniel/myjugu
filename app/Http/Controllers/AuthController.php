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

        // if (Auth::guard('web')->attempt($credentials)) {
        //     // Authentication passed
        //     return redirect()->intended('/');
            
        // }


        if (Auth::guard('web')->attempt($credentials)) {
            // Authentication passed
            $user = Auth::user();            
            //dd($user->toArray());
            // if ($user->user_roles === 'Member') {

            //     $members = Member::all();
            //     return view('index', ['members' => $members]);
            //     //return view('index');

            // } elseif ($user->user_roles === 'Admin') {
            //     return view('admin');
            // }
            if ($user->user_roles === 'Admin') {
                // Paginate members data before passing it to the view
                $members = Member::select('id', 'name', 'email', 'subclan', 'sub_subclan')->paginate(5);
                return view('jugumember.index', compact('members'));
            } elseif ($user->user_roles === 'Member') {
                $members = Member::select('id', 'name', 'email', 'subclan', 'sub_subclan')->paginate(5);
                return view('members.bruh', compact('members'));
            }
        }

        // Authentication failed
        //return back()->withErrors(['email' => 'Invalid credentials']);
        return view('test');
    }
}
