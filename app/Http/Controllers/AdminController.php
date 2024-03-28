<?php

namespace App\Http\Controllers;

use App\Models\LLG;
use App\Models\Clan;
use App\Models\Ward;
use App\Models\Member;
use App\Models\Subclan;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use Illuminate\View\View;
use App\Models\Sub_subclan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $members = Member::select('id', 'name', 'email', 'subclan', 'sub_subclan')->paginate(10); // Paginate with 10 items per page
        return view('jugumember.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::all();
        $clans = Clan::all();
        return view('jugumember.create', compact('provinces', 'clans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $member = new Member;
        
        $request->validate([
            'reg_date' => 'required|date',
            'name_first' => 'required|string',
            'name_middle' => 'required|string',
            'name_last' => 'required|string',
            'nid_number' => 'nullable|string',
            'email' => 'required|email',
            'password' => 'required|min:3', 
            'confirm_password' => 'required|same:password',  
            'mobile_num' => 'nullable|string',
            'gender' => 'required|in:male,female,other',
            'religion' => 'nullable|string',
            'birth_date' => 'nullable|date',
            'death_date' => 'nullable|date',
            'education' => 'nullable|string',
            'job_title' => 'nullable|string',
            'employer' => 'nullable|string',
            'postal_address' => 'nullable|string',
            'residential_address' => 'required|string',
            'province' => 'required|string',
            'district' => 'required|string',
            'llg' => 'required|string',
            'ward' => 'required|string',
            'village' => 'required|string',
            'father_name_first' => 'required|string',
            'father_name_last' => 'required|string',
            'mother_name_first' => 'required|string',
            'mother_name_last' => 'required|string',
            'clan' => 'required|string',
            'subclan' => 'required|string',
            'sub_subclan' => 'nullable|string',
            'bank_name' => 'nullable|string',
            'account_name' => 'nullable|string',
            'account_num' => 'nullable|string',
            'relationship' => 'nullable|string',
            'jugu_terms' => 'nullable|in:Yes,No',
            'recorder' => 'nullable|string',
            'verified' => 'nullable|string',
            'checked' => 'nullable|string',
            'witness' => 'nullable|string',
            // 'photo_id' => 'nullable|string',
            // 'photo_url' => 'nullable|string',
            // 'father_title' => 'nullable|string',
            // 'father_name_middle' => 'nullable|string',
            // 'mother_title' => 'nullable|string',
            // 'mother_name_middle' => 'nullable|string',
            // 'user_roles' => 'nullable|string',
            // 'user_status' => 'nullable|string',
        ]);

        // Hash the password before storing it
        $hashedPassword = Hash::make($request->password);
        
        $member->reg_date = $request->reg_date;
        $member->name_first = $request->name_first;
        $member->name_last = $request->name_last;
        $member->nid_number = $request->nid_number;
        $member->email = $request->email;
        $member->password = $hashedPassword;
        $member->mobile_num = $request->mobile_num;
        $member->gender = $request->gender;
        $member->religion = $request->religion;
        $member->birth_date = $request->birth_date;
        $member->death_date = $request->death_date;
        $member->education = $request->education;
        $member->job_title = $request->job_title;
        $member->postal_address = $request->postal_address;
        $member->residential_address = $request->residential_address;
        $member->province = $request->province;
        $member->district = $request->district;
        $member->llg = $request->llg;
        $member->ward = $request->ward;
        $member->village = $request->village;
        $member->father_name_first = $request->father_name_first;
        $member->father_name_last = $request->father_name_last;
        $member->mother_name_first = $request->mother_name_first;
        $member->mother_name_last = $request->mother_name_last;
        $member->clan = $request->clan;
        $member->subclan = $request->subclan;
        $member->sub_subclan = $request->sub_subclan;
        $member->bank_name = $request->bank_name;
        $member->account_name = $request->account_name;
        $member->account_num = $request->account_num;
        $member->relationship = $request->relationship;
        $member->recorder = $request->recorder;
        $member->verified = $request->verified;
        $member->checked = $request->checked;
        $member->witness = $request->witness;

        $member->save();

        return redirect()->back()->with('message', 'Member Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $members = Member::find($id);
        return view('jugumember.show')->with('members', $members);  //to show the students detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = Member::findOrFail($id);

        return view('jugumember.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = Member::findOrFail($id);

        $request->validate([
            'reg_date' => 'required|date',
            'name_first' => 'required|string',
            'name_middle' => 'required|string',
            'name_last' => 'required|string',
            'nid_number' => 'nullable|string',
            'email' => 'required|email',
            'mobile_num' => 'nullable|string',
            'gender' => 'required|in:male,female,other',
            'religion' => 'nullable|string',
            'birth_date' => 'nullable|date',
            'death_date' => 'nullable|date',
            'education' => 'nullable|string',
            'job_title' => 'nullable|string',
            'employer' => 'nullable|string',
            'postal_address' => 'nullable|string',
            'residential_address' => 'required|string',
            'province' => 'required|string',
            'district' => 'required|string',
            'llg' => 'required|string',
            'ward' => 'required|string',
            'village' => 'required|string',
            'father_name_first' => 'required|string',
            'father_name_last' => 'required|string',
            'mother_name_first' => 'required|string',
            'mother_name_last' => 'required|string',
            'clan' => 'required|string',
            'subclan' => 'required|string',
            'sub_subclan' => 'nullable|string',
            'bank_name' => 'nullable|string',
            'account_name' => 'nullable|string',
            'account_num' => 'nullable|string',
            'relationship' => 'nullable|string',
            'recorder' => 'nullable|string',
            'verified' => 'nullable|string',
            'checked' => 'nullable|string',
            'witness' => 'nullable|string',
        ]);

        $member->reg_date = $request->reg_date;
        $member->name_first = $request->name_first;
        $member->name_middle = $request->name_middle;
        $member->name_last = $request->name_last;
        $member->nid_number = $request->nid_number;
        $member->email = $request->email;
        $member->mobile_num = $request->mobile_num;
        $member->gender = $request->gender;
        $member->religion = $request->religion;
        $member->birth_date = $request->birth_date;
        $member->death_date = $request->death_date;
        $member->education = $request->education;
        $member->job_title = $request->job_title;
        $member->postal_address = $request->postal_address;
        $member->residential_address = $request->residential_address;
        $member->province = $request->province;
        $member->district = $request->district;
        $member->llg = $request->llg;
        $member->ward = $request->ward;
        $member->village = $request->village;
        $member->father_name_first = $request->father_name_first;
        $member->father_name_last = $request->father_name_last;
        $member->mother_name_first = $request->mother_name_first;
        $member->mother_name_last = $request->mother_name_last;
        $member->clan = $request->clan;
        $member->subclan = $request->subclan;
        $member->sub_subclan = $request->sub_subclan;
        $member->bank_name = $request->bank_name;
        $member->account_name = $request->account_name;
        $member->account_num = $request->account_num;
        $member->relationship = $request->relationship;
        $member->recorder = $request->recorder;
        $member->verified = $request->verified;
        $member->checked = $request->checked;
        $member->witness = $request->witness;

        $member->save();

        return redirect()->back()->with('message', 'Member Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Member::destroy($id);
        // Flash a success message to the session
        session()->flash('message', 'User deleted successfully.');
        return redirect()->route('member.dashboard');
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
