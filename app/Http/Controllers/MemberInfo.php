<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberInfo extends Controller
{
    public function index()
    {
        // Your code here
    }

    public function show()
    {
        // Your code here
        // Replace 'your_blade_file' with the actual Blade file name without the extension
        
    }

    public function create(Request $request)
    {
        return view('members.submit_new_application');
    }

    public function store(Request $request)
    {
      
                $formFields = $request->validate([
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
            'ward_id' => 'required|string',  
            'village_id' => 'required|string',  
            'father_name_first' => 'required|string',
            'father_name_last' => 'required|string',
            'mother_name_first' => 'required|string',
            'mother_name_last' => 'required|string',
            'clan' => 'required|string',   
            'subclan' => 'required|string',  
            'sub_subclan' => 'nullable|string',  
            'bank_name' => 'nullable|string',
            'account_name' => 'nullable|string',
            'account_number' => 'nullable|string',
            'relation_to_jugu' => 'nullable|string',
            'terms_and_conditions' => 'required|in:Yes,No',//for yes or no questions
            'recorder' => 'nullable|string',
            'verified_by' => 'nullable|string',
            'checked_by' => 'nullable|string',
            'witnessed_by' => 'nullable|string',
                        ]);
                
                        //Hash Password
                        $formFields['password'] = bcrypt($formFields['password']);
                
                        //Create User
                        $user = Member::create($formFields);
                
                        //Login
                        auth()->login($user);
                
                        return redirect('/submit')->with('message', 'User created and logged in');
    }

    public function edit($id)
    {
        // Your code here
    }

    public function update(Request $request, $id)
    {
        // Your code here
    }

    public function destroy($id)
    {
        // Your code here
    }
}