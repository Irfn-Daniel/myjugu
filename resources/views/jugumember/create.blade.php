@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Member</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admins.index') }}"> Back</a>
        </div>
    </div>
</div>


@if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
@endif

<form action="{{ route('admins.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Registration Date:</strong><span style="color:red;">*</span>
                <input type="date" name="reg_date" value="{{ old('reg_date') }}" class="form-control">
                @error('reg_date')
                    <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
            </div>
        </div>       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong><span style="color:red;">*</span>
                <div class="row">
                    <div class="col">
                        <input type="text" name="name_first" value="{{ old('name_first') }}"  class="form-control" placeholder="First">
                        @error('name_first')
                            <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" name="name_middle" value="{{ old('name_middle') }}"  class="form-control" placeholder="Middle">
                        @error('name_middle')
                            <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" name="name_last" value="{{ old('name_last') }}"  class="form-control" placeholder="Last">
                        @error('name_last')
                            <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NID Number:</strong>
                <input type="text" name="nid_number" value="{{ old('nid_number') }}" class="form-control" placeholder="NID Number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong><span style="color:red;">*</span>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                @error('email')
                    <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile Number:</strong>
                <input type="text" name="mobile_num" value="{{ old('mobile_num') }}" class="form-control" placeholder="Mobile Number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong><span style="color:red;">*</span>
                <input type="text" name="gender" value="{{ old('gender') }}"  class="form-control" placeholder="Gender">
                @error('gender')
                    <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Religion:</strong>
                <input type="text" name="religion" value="{{ old('religion') }}"  class="form-control" placeholder="Religion">
            </div>
        </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
       <div style="display: flex;">
            <div style="flex: 1; margin-right: 10px;">
                <div class="form-group">
                    <strong>Date of Birth:</strong>
                    <input type="date" name="birth_date" value="{{ old('birth_date') }}" class="form-control">
                </div>
            </div>
            <div style="flex: 1;">
                <div class="form-group">
                    <strong>Date of Death:</strong>
                    <input type="date" name="death_date" value="{{ old('death_date') }}" class="form-control">
                </div>
            </div>
       </div>       
       <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Education:</strong>
                <input type="text" name="education" value="{{ old('education') }}" class="form-control" placeholder="Education">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Job Title:</strong>
                <input type="text" name="job_title" value="{{ old('job_title') }}" class="form-control" placeholder="Job Title">
            </div>
        </div>
    </div> 
    <div class="row">  
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employer:</strong>
                <input type="text" name="employer" value="{{ old('employer') }}" class="form-control" placeholder="Employer">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Postal Address:</strong>
            <textarea class="form-control" style="height:150px" name="postal_address" placeholder="Address">{{ old('postal_address') }}</textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Residential Address:</strong><span style="color:red;">*</span>
                <textarea class="form-control" style="height:150px" name="residential_address" placeholder="Address">{{ old('residential_address') }}</textarea>
                @error('residential_address')
                    <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
            </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>Province:</strong><span style="color:red;">*</span>
                <select name="province" id="province" class="form-control">
                    <option value="">Select Province</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                    @endforeach
                </select>
                @error('province')
                    <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>District:</strong><span style="color:red;">*</span>
                <select name="district" id="district" class="form-control">
                    <option value="">Select District</option>
                </select>
                @error('district')
                    <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>LLG:</strong><span style="color:red;">*</span>
                <select name="llg" id="llg" class="form-control">
                    <option value="">Select LLG</option>
                </select>
                @error('llg')
                    <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Council Ward:</strong><span style="color:red;">*</span>
                <select name="ward" id="ward" class="form-control">
                    <option value="">Select Ward</option>
                </select>
                @error('ward')
                    <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Village:</strong><span style="color:red;">*</span>
                <select name="village" id="village" class="form-control">
                    <option value="">Select Village</option>
                </select>
                @error('village')
                    <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Father's name:</strong><span style="color:red;">*</span>
                <div class="row">
                    <div class="col">
                        <input type="text" name="father_name_first" value="{{ old('father_name_first') }}" class="form-control" placeholder="First">
                        @error('father_name_first')
                            <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" name="father_name_last" value="{{ old('father_name_last') }}" class="form-control" placeholder="Last">
                        @error('father_name_last')
                            <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                </div>                
            </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mother's name:</strong><span style="color:red;">*</span>
                <div class="row">
                    <div class="col">
                        <input type="text" name="mother_name_first" value="{{ old('mother_name_first') }}" class="form-control" placeholder="First">
                        @error('mother_name_first')
                            <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" name="mother_name_last" value="{{ old('mother_name_last') }}" class="form-control" placeholder="Last">
                        @error('mother_name_last')
                            <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                </div>                
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Clan:</strong><span style="color:red;">*</span>
                    <select name="clan" id="clan" class="form-control">
                        <option value="">Select Clan</option>
                        @foreach ($clans as $clan)
                            <option value="{{ $clan->id }}">{{ $clan->name }}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text" name="clan" value="{{ old('clan') }}" class="form-control" placeholder="Clan"> --}}
                    @error('clan')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Subclan:</strong><span style="color:red;">*</span>
                    <select name="subclan" id="subclan" class="form-control">
                        <option value="">Select Subclan</option>
                    </select>                    
                    @error('subclan')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Sub subclan:</strong>
                    <select name="sub_subclan" id="sub_subclan" class="form-control">
                        <option value="">Select Sub Subclan</option>
                    </select>     
                    @error('sub_subclan')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror           
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Bank Name:</strong>
                    <input type="text" name="bank_name" value="{{ old('bank_name') }}" class="form-control" placeholder="Bank Name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Account Name:</strong>
                    <input type="text" name="account_name" value="{{ old('account_name') }}" class="form-control" placeholder="Account Name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Account Number:</strong>
                    <input type="text" name="account_num" value="{{ old('account_num') }}" class="form-control" placeholder="Account Number">
                </div>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Relationship to the Jugu Clan:</strong>
                    <input type="text" name="relationship" value="{{ old('relationship') }}" class="form-control" placeholder="Relationship">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Recorder:</strong>
                    <input type="text" name="recorder" value="{{ old('recorder') }}" class="form-control" placeholder="Recorder">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Verified by:</strong>
                    <input type="text" name="verified" value="{{ old('verified') }}" class="form-control" placeholder="Verified by">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Checked by:</strong>
                    <input type="text" name="checked" value="{{ old('checked') }}" class="form-control" placeholder="Checked by">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Witnessed by:</strong>
                    <input type="text" name="witness" value="{{ old('witness') }}" class="form-control" placeholder="Witness">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@push('js')
<script>
    $(document).ready(function(){
        // onchange province
        $('#province').on('change', function() {
            const province = $(this).val();
            const type = "district";
            if (province == '') {
                return;
            }
            // ajax
            $.get(`/regions`, {selected: province, type: type}, ({ data }) => {
                $('#district').empty();
                $('#llg').empty().append('<option value="">Select LLG</option>');
                $('#ward').empty().append('<option value="">Select Ward</option>');
                $('#village').empty().append('<option value="">Select Village</option>');

                let html = '<option value="">Select District</option>';
                data.forEach(element => {
                    html += `<option value="${element.id}">${element.name}</option>`
                })
                $('#district').append(html);
            })
        })

        $('#district').on('change', function() {
            const district = $(this).val();
            const type = "llg";
            if (district == '') {
                return;
            }
            // ajax
            $.get(`/regions`, {selected: district, type: type}, ({ data }) => {
                $('#llg').empty();
                $('#ward').empty().append('<option value="">Select Ward</option>');
                $('#village').empty().append('<option value="">Select Village</option>');

                let html = '<option value="">Select LLG</option>';
                data.forEach(element => {
                    html += `<option value="${element.id}">${element.name}</option>`
                })
                $('#llg').append(html);
            })
        })
        $('#llg').on('change', function() {
            const llg = $(this).val();
            const type = "ward";
            if (llg == '') {
                return;
            }
            // ajax
            $.get(`/regions`, {selected: llg, type: type}, ({ data }) => {
                $('#ward').empty();
                $('#village').empty().append('<option value="">Select Village</option>');

                let html = '<option value="">Select Ward</option>';
                data.forEach(element => {
                    html += `<option value="${element.id}">${element.name}</option>`
                })
                $('#ward').append(html);
            })
        })
        $('#ward').on('change', function() {
            const ward = $(this).val();
            const type = "village";
            if (ward == '') {
                return;
            }
            // ajax
            $.get(`/regions`, {selected: ward, type: type}, ({ data }) => {
                $('#village').empty();

                let html = '<option value="">Select Village</option>';
                data.forEach(element => {
                    html += `<option value="${element.id}">${element.name}</option>`
                })
                $('#village').append(html);
            })
        })
        $('#clan').on('change', function() {
            const clan = $(this).val();
            const type = "subclan";
            if (clan == '') {
                return;
            }
            // AJAX request to get subclans based on selected clan
            $.get(`/clans`, {selected: clan, type: type}, ({ data }) => {
                $('#subclan').empty();
                $('#sub_subclan').empty().append('<option value="">Select sub subclan</option>');

                let html = '<option value="">Select Subclan</option>';
                data.forEach(element => {
                    html += `<option value="${element.id}">${element.name}</option>`
                })
                $('#subclan').append(html);
            })
        })
        $('#subclan').on('change', function() {
            const subclan = $(this).val();
            const type = "sub_subclan";
            if (subclan == '') {
                return;
            }
            // AJAX request to get subclans based on selected clan
            $.get(`/clans`, {selected: subclan, type: type}, ({ data }) => {
                $('#sub_subclan').empty();

                let html = '<option value="">Select Sub_subclan</option>';
                data.forEach(element => {
                    html += `<option value="${element.id}">${element.name}</option>`
                })
                $('#sub_subclan').append(html);
            })
        })
    });
</script>
@endpush
@endsection
