@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Member</h2>

                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('admins.update', $member->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Registration Date:</label>
                        <input type="text" name="reg_date" class="form-control" value="{{ $member->reg_date }}">
                    </div>
                    <div class="form-group">
                        <label for="address">First Name:</label>
                        <input type="text" name="name_first" class="form-control" value="{{ $member->name_first }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Middle Name:</label>
                        <input type="text" name="name_middle" class="form-control" value="{{ $member->name_middle }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Last Name:</label>
                        <input type="text" name="name_last" class="form-control" value="{{ $member->name_last }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">NID Number:</label>
                        <input type="text" name="nid_number" class="form-control" value="{{ $member->nid_number }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Email:</label>
                        <input type="text" name="email" class="form-control" value="{{ $member->email }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile Number:</label>
                        <input type="text" name="mobile_num" class="form-control" value="{{ $member->mobile_num }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Gender:</label>
                        <input type="text" name="gender" class="form-control" value="{{ $member->gender }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Religion:</label>
                        <input type="text" name="religion" class="form-control" value="{{ $member->religion }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Date of Birth:</label>
                        <input type="text" name="birth_date" class="form-control" value="{{ $member->birth_date }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Date of Death:</label>
                        <input type="text" name="death_date" class="form-control" value="{{ $member->death_date }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Education:</label>
                        <input type="text" name="education" class="form-control" value="{{ $member->education }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Job Title:</label>
                        <input type="text" name="job_title" class="form-control" value="{{ $member->job_title }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Employer:</label>
                        <input type="text" name="employer" class="form-control" value="{{ $member->employer }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Postal Address:</label>
                        <input type="text" name="postal_address" class="form-control" value="{{ $member->postal_address }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Residential Address:</label>
                        <input type="text" name="residential_address" class="form-control" value="{{ $member->residential_address }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Province:</label>
                        <input type="text" name="province" class="form-control" value="{{ $member->province }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">District:</label>
                        <input type="text" name="district" class="form-control" value="{{ $member->district }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">LLG:</label>
                        <input type="text" name="llg" class="form-control" value="{{ $member->llg }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Council Ward:</label>
                        <input type="text" name="ward" class="form-control" value="{{ $member->ward }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Village:</label>
                        <input type="text" name="village" class="form-control" value="{{ $member->village }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Father's First Name:</label>
                        <input type="text" name="father_name_first" class="form-control" value="{{ $member->father_name_first }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Father's Last Name:</label>
                        <input type="text" name="father_name_last" class="form-control" value="{{ $member->father_name_last }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mother's First Name:</label>
                        <input type="text" name="mother_name_first" class="form-control" value="{{ $member->mother_name_first }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mother's Last Name:</label>
                        <input type="text" name="mother_name_last" class="form-control" value="{{ $member->mother_name_last }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Clan:</label>
                        <input type="text" name="clan" class="form-control" value="{{ $member->clan }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Subclan:</label>
                        <input type="text" name="subclan" class="form-control" value="{{ $member->subclan }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Sub subclan:</label>
                        <input type="text" name="sub_subclan" class="form-control" value="{{ $member->sub_subclan }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Bank Name:</label>
                        <input type="text" name="bank_name" class="form-control" value="{{ $member->bank_name }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Account Name:</label>
                        <input type="text" name="account_name" class="form-control" value="{{ $member->account_name }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Account Number:</label>
                        <input type="text" name="account_num" class="form-control" value="{{ $member->account_num }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Relationship to the Jugu Clan:</label>
                        <input type="text" name="relationship" class="form-control" value="{{ $member->relationship }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Recorder:</label>
                        <input type="text" name="recorder" class="form-control" value="{{ $member->recorder }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Verified by:</label>
                        <input type="text" name="verified" class="form-control" value="{{ $member->verified }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Checked by:</label>
                        <input type="text" name="checked" class="form-control" value="{{ $member->checked }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Witnessed by:</label>
                        <input type="text" name="witness" class="form-control" value="{{ $member->witness }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Member</button>
                </form>

                <a href="{{ route('admins.index', $member->id) }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>
@endsection
