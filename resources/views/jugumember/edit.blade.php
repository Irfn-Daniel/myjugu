@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Member</h2>

                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-strong="Close"></button>
                    </div>
                @endif

                <form action="{{ route('admins.update', $member->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <strong for="name">Registration Date:</strong><span style="color:red;">*</span>
                        <input type="date" name="reg_date" class="form-control" value="{{ $member->reg_date }}">
                    </div>
                    
                        <div class="form-group">
                            <strong>Name:</strong><span style="color:red;">*</span>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="name_first" value="{{ $member->name_first }}"  class="form-control" placeholder="First">
                                   
                                </div>
                                <div class="col">
                                    <input type="text" name="name_middle" value="{{ $member->name_middle }}"  class="form-control" placeholder="Middle">
                                    
                                </div>
                                <div class="col">
                                    <input type="text" name="name_last" value="{{ $member->name_last }}"  class="form-control" placeholder="Last">
                                   
                                </div>
                            </div>
                        </div>
                   
                    <div class="form-group">
                        <strong for="mobile">NID Number:</strong>
                        <input type="text" name="nid_number" class="form-control" value="{{ $member->nid_number }}">
                    </div>
                    <div class="form-group">
                        <strong for="mobile">Email:</strong><span style="color:red;">*</span>
                        <input type="text" name="email" class="form-control" value="{{ $member->email }}">
                    </div>
                    <div class="form-group">
                        <strong for="mobile">Mobile Number:</strong>
                        <input type="text" name="mobile_num" class="form-control" value="{{ $member->mobile_num }}">
                    </div>
                    <div class="form-group">
                        <strong for="mobile">Gender:</strong><span style="color:red;">*</span>
                        <input type="text" name="gender" class="form-control" value="{{ $member->gender }}">
                    </div>
                    <div class="form-group">
                        <strong for="mobile">Religion:</strong>
                        <input type="text" name="religion" class="form-control" value="{{ $member->religion }}">
                    </div>
                    <div style="display: flex;">
                        <div style="flex: 1; margin-right: 10px;">
                            <div class="form-group">
                                <strong>Date of Birth:</strong>
                                <input type="date" name="birth_date" value="{{ $member->birth_date }}" class="form-control">
                            </div>
                        </div>
                        <div style="flex: 1;">
                            <div class="form-group">
                                <strong>Date of Death:</strong>
                                <input type="date" name="death_date" value="{{ $member->death_date }}" class="form-control">
                            </div>
                        </div>
                   </div>       
                   <div style="display: flex;">
                    <div style="flex: 1; margin-right: 10px;">
                        <div class="form-group">
                            <strong>Education:</strong>
                            <input type="text" name="education" value="{{ $member->education }}" class="form-control" placeholder="Education">
                        </div>
                    </div>
                    <div style="flex: 1;">
                        <div class="form-group">
                            <strong>Job Title:</strong>
                            <input type="text" name="job_title" value="{{ $member->job_title }}" class="form-control" placeholder="Job Title">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <strong for="mobile">Employer:</strong>
                        <input type="text" name="employer" class="form-control" value="{{ $member->employer }}">
                    </div>
                    <div class="form-group">
                        <strong for="mobile">Postal Address:</strong>
                        <textarea class="form-control" style="height:150px" name="postal_address" placeholder="Address">{{ $member->postal_address }}</textarea>
                    </div>
                    <div class="form-group">
                        <strong for="mobile">Residential Address:</strong><span style="color:red;">*</span>
                        <textarea class="form-control" style="height:150px" name="residential_address" placeholder="Address">{{ $member->residential_address }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong for="mobile">Province:</strong><span style="color:red;">*</span>
                                <input type="text" name="province" class="form-control" value="{{ $member->province }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong for="mobile">District:</strong><span style="color:red;">*</span>
                                <input type="text" name="district" class="form-control" value="{{ $member->district }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong for="mobile">LLG:</strong><span style="color:red;">*</span>
                                <input type="text" name="llg" class="form-control" value="{{ $member->llg }}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="mobile">Council Ward:</strong><span style="color:red;">*</span>
                                <input type="text" name="ward" class="form-control" value="{{ $member->ward }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="mobile">Village:</strong><span style="color:red;">*</span>
                                <input type="text" name="village" class="form-control" value="{{ $member->village }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Father's name:</strong><span style="color:red;">*</span>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="father_name_first" value="{{ $member->father_name_first }}" class="form-control" placeholder="First">
                                   
                                </div>
                                <div class="col">
                                    <input type="text" name="father_name_last" value="{{ $member->father_name_last }}" class="form-control" placeholder="Last">
                                   
                                </div>
                            </div>                
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Mother's name:</strong><span style="color:red;">*</span>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="mother_name_first" value="{{ $member->mother_name_first }}" class="form-control" placeholder="First">
                                    
                                    </div>
                                    <div class="col">
                                        <input type="text" name="mother_name_last" value="{{ $member->mother_name_last }}" class="form-control" placeholder="Last">
                                  
                                    </div>
                                </div>                
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <strong for="mobile">Mother's First Name:</strong>
                        <input type="text" name="mother_name_first" class="form-control" value="{{ $member->mother_name_first }}">
                    </div>
                    <div class="form-group">
                        <strong for="mobile">Mother's Last Name:</strong>
                        <input type="text" name="mother_name_last" class="form-control" value="{{ $member->mother_name_last }}">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong for="mobile">Clan:</strong><span style="color:red;">*</span>
                                <input type="text" name="clan" class="form-control" value="{{ $member->clan }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong for="mobile">Subclan:</strong><span style="color:red;">*</span>
                                <input type="text" name="subclan" class="form-control" value="{{ $member->subclan }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong for="mobile">Sub subclan:</strong><span style="color:red;">*</span>
                                <input type="text" name="sub_subclan" class="form-control" value="{{ $member->sub_subclan }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <strong>Bank Name:</strong>
                            <input type="text" name="bank_name" value="{{ $member->bank_name }}" class="form-control" placeholder="Bank Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <strong>Account Name:</strong>
                            <input type="text" name="account_name" value="{{ $member->account_name }}" class="form-control" placeholder="Account Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <strong>Account Number:</strong>
                            <input type="text" name="account_num" value="{{ $member->account_num }}" class="form-control" placeholder="Account Number">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Relationship to the Jugu Clan:</strong>
                            <input type="text" name="relationship" value="{{ $member->relationship }}" class="form-control" placeholder="Relationship">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Recorder:</strong>
                            <input type="text" name="recorder" value="{{ $member->recorder }}" class="form-control" placeholder="Recorder">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong>Verified by:</strong>
                                <input type="text" name="verified" value="{{ $member->verified }}" class="form-control" placeholder="Verified by">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong>Checked by:</strong>
                                <input type="text" name="checked" value="{{ $member->checked }}" class="form-control" placeholder="Checked by">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong>Witnessed by:</strong>
                                <input type="text" name="witness" value="{{ $member->witness }}" class="form-control" placeholder="Witness">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Member</button>
                </form>

                <a href="{{ route('admins.index', $member->id) }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>
@endsection
