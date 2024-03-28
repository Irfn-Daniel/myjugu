<?php

namespace App\Http\Controllers;

use App\Models\LLG;
use App\Models\Clan;
use App\Models\Ward;
use App\Models\Member;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use App\Models\Sub_subclan;
use App\Models\Subclan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function showRegisterForm()
    {
        $provinces = Province::all();
        $clans = Clan::all();
        return view('register', compact('provinces', 'clans'));
    }
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

    public function logout(Request $request) {
        // Logout the user
        Auth::guard('')->logout();
        Session::flush();
        $request->session()->invalidate();
        //$request->session()->regenerateToken();
        // Redirect to the login page
        return redirect()->route('login');
    }

    public function getRegions(Request $request)
    {
        $type = $request->input('type');
        $selected = $request->input('selected');
        try {
            if ($type == 'district') {
                $districts = District::where('province_id', $selected)->get(['id', 'name']);
                return response()->json([
                    'status' => true,
                    'data' => $districts,
                    'message' => "Data found"
                ]);
            } else if ($type == 'llg') {
                $llgs = LLG::where('district_id', $selected)->get(['id', 'name']);
                return response()->json([
                    'status' => true,
                    'data' => $llgs,
                    'message' => "Data found"
                ]);
            } else if ($type == 'ward') {
                $wards = Ward::where('llg_id', $selected)->get(['id', 'name']);
                return response()->json([
                    'status' => true,
                    'data' => $wards,
                    'message' => "Data found"
                ]);
            } else if ($type == 'village') {
                $villages = Village::where('ward_id', $selected)->get(['id', 'name']);
                return response()->json([
                    'status' => true,
                    'data' => $villages,
                    'message' => "Data found"
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => "Data not found",
                'data' => []
            ], 404);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => "Data not found. " . $th->getMessage(),
                'data' => []
            ], 500);
        }
    }

    public function getClans(Request $request)
    {
        $type = $request->input('type');
        $selected = $request->input('selected');
        try {
            if ($type == 'subclan') {
                $subclans = Subclan::where('clan_id', $selected)->get(['id', 'name']);
                return response()->json([
                    'status' => true,
                    'data' => $subclans,
                    'message' => "Data found"
                ]);
            } else if ($type == 'sub_subclan') {
                $sub_subclans = Sub_subclan::where('subclan_id', $selected)->get(['id', 'name']);
                return response()->json([
                    'status' => true,
                    'data' => $sub_subclans,
                    'message' => "Data found"
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => "Data not found",
                'data' => []
            ], 404);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => "Data not found. " . $th->getMessage(),
                'data' => []
            ], 500);
        }
    }
}
