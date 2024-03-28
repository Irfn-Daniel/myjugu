@extends('form_layout')
  
@section('registerContent')

        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('admins.store') }}" method="POST">
            @csrf

            <div class="row">
                <!-- Registration Date -->
                <div class="form-group col-md-6">
                    <strong>Registration Date:</strong><span style="color:red;">*</span>
                    <input type="date" class="form-control" id="reg_date" name="reg_date" value="{{ old('reg_date') }}" required>
                    @error('reg_date')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong><span style="color:red;">*</span>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="name_first" value="{{ old('name_first') }}"  class="form-control" placeholder="First" required>
                                @error('name_first')
                                    <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <input type="text" name="name_middle" value="{{ old('name_middle') }}"  class="form-control" placeholder="Middle" required>
                                @error('name_middle')
                                    <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <input type="text" name="name_last" value="{{ old('name_last') }}"  class="form-control" placeholder="Last" required>
                                @error('name_last')
                                    <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NID Number -->
                <div class="form-group col-md-6">
                    <strong>NID Number:</strong>
                    <input type="text" name="nid_number" value="{{ old('nid_number') }}" class="form-control" placeholder="NID Number">
                </div>

                <!-- ID Photo -->
                <div class="form-group col-md-6">
                    <strong>ID Photo:</strong>
                    <input type="file" class="form-control-file" id="id_photo" name="id_photo">
                </div>

                <!-- Email -->
                <div class="form-group col-md-6">
                    <strong>Email:</strong><span style="color:red;">*</span>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required>
                    @error('email')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                    <small class="form-text text-muted">To create your email, enter your first and last name followed by "@mail.com". Example, John William Kennedy should be entered as "johnkennedy@mail.com".</small>
                </div>

                <!-- Password -->
                <div class="form-group col-md-6">
                    <strong>Password:</strong><span style="color:red;">*</span>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <!-- Confirm Password -->
                <div class="form-group col-md-6">
                    <strong>Confirm Password:</strong><span style="color:red;">*</span>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                </div>

                <!-- Mobile -->
                <div class="form-group col-md-6">
                    <strong>Mobile Number:</strong>
                    <input type="text" name="mobile_num" value="{{ old('mobile_num') }}" class="form-control" placeholder="Mobile Number">
                </div>

                <!-- Gender -->
                <div class="form-group col-md-6">
                    <strong>Gender:</strong><span style="color:red;">*</span>
                    <input type="text" name="gender" value="{{ old('gender') }}"  class="form-control" placeholder="Gender" required>
                    @error('gender')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>
                <!-- Religion -->
                <div class="form-group col-md-6">
                    <strong>Religion:</strong>
                    <input type="text" name="religion" value="{{ old('religion') }}"  class="form-control" placeholder="Religion">
                </div>

                <!-- Date of Birth -->
                <div class="form-group col-md-6">
                    <strong>Date of Birth:</strong>
                    <input type="date" name="birth_date" value="{{ old('birth_date') }}" class="form-control">
                </div>

                <!-- Date of Death -->
                <div class="form-group col-md-6">
                    <strong>Date of Death:</strong>
                    <input type="date" name="death_date" value="{{ old('death_date') }}" class="form-control">
                </div>
                
                <!-- Education -->
                <div class="form-group col-md-6">
                    <strong>Education:</strong>
                    <input type="text" name="education" value="{{ old('education') }}" class="form-control" placeholder="Education">
                </div>

                <!-- Job Title -->
                <div class="form-group col-md-6">
                    <strong>Job Title:</strong>
                    <input type="text" name="job_title" value="{{ old('job_title') }}" class="form-control" placeholder="Job Title">
                </div>

                <!-- Employer -->
                <div class="form-group col-md-6">
                    <strong>Employer:</strong>
                    <input type="text" name="employer" value="{{ old('employer') }}" class="form-control" placeholder="Employer">
                </div>

                <!-- Postal Address -->
                <div class="form-group col-md-6">
                    <strong>Postal Address:</strong>
                    <textarea class="form-control" style="height:150px" name="postal_address" placeholder="Address">{{ old('postal_address') }}</textarea>
                </div>
                <!-- Residential Address -->
                <div class="form-group col-md-6">
                    <strong>Residential Address:</strong><span style="color:red;">*</span>
                    <textarea class="form-control" style="height:150px" name="residential_address" placeholder="Address" required>{{ old('residential_address') }}</textarea>
                    @error('residential_address')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>

                <!-- Province -->
                <div class="form-group col-md-6">
                    <strong>Province:</strong><span style="color:red;">*</span>
                    <select name="province" id="province" class="form-control" required>
                        <option value="">Select Province</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                        @endforeach
                    </select>
                    @error('province')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>

                <!-- District -->
                <div class="form-group col-md-6">
                    <strong>District:</strong><span style="color:red;">*</span>
                    <select name="district" id="district" class="form-control" required>
                        <option value="">Select District</option>
                    </select>
                    @error('district')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>

                <!-- LLG -->
                <div class="form-group col-md-6">
                    <strong>LLG:</strong><span style="color:red;">*</span>
                    <select name="llg" id="llg" class="form-control" required>
                        <option value="">Select LLG</option>
                    </select>
                    @error('llg')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>

                <!-- Council Ward -->
                <div class="form-group col-md-6">
                    <strong>Council Ward:</strong><span style="color:red;">*</span>
                    <select name="ward" id="ward" class="form-control" required>
                        <option value="">Select Ward</option>
                    </select>
                    @error('ward')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>

                <!-- Village -->
                <div class="form-group col-md-6">
                    <strong>Village:</strong><span style="color:red;">*</span>
                    <select name="village" id="village" class="form-control" required>
                        <option value="">Select Village</option>
                    </select>
                    @error('village')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>

                <!-- Father's Name -->
                <div class="form-group col-md-6">
                    <strong>Father's name:</strong><span style="color:red;">*</span>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="father_name_first" value="{{ old('father_name_first') }}" class="form-control" placeholder="First" required>
                            @error('father_name_first')
                                <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" name="father_name_last" value="{{ old('father_name_last') }}" class="form-control" placeholder="Last" required>
                            @error('father_name_last')
                                <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                            @enderror
                        </div>
                    </div>             
                </div>

                <!-- Mother's Name -->
                <div class="form-group col-md-6">
                    <strong>Mother's name:</strong><span style="color:red;">*</span>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="mother_name_first" value="{{ old('mother_name_first') }}" class="form-control" placeholder="First" required>
                            @error('mother_name_first')
                                <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" name="mother_name_last" value="{{ old('mother_name_last') }}" class="form-control" placeholder="Last" required>
                            @error('mother_name_last')
                                <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <!-- Clan -->
                <div class="form-group col-md-6">
                    <strong>Clan:</strong><span style="color:red;">*</span>
                        <select name="clan" id="clan" class="form-control" required>
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

                <!-- Subclan -->
                <div class="form-group col-md-6">
                    <strong>Subclan:</strong><span style="color:red;">*</span>
                        <select name="subclan" id="subclan" class="form-control" required>
                            <option value="">Select Subclan</option>
                        </select>                    
                        @error('subclan')
                            <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                </div>

                <!-- Sub Subclan -->
                <div class="form-group col-md-6">
                    <strong>Sub subclan:</strong><span style="color:red;">*</span>
                        <select name="sub_subclan" id="sub_subclan" class="form-control" required>
                            <option value="">Select Sub Subclan</option>
                        </select>     
                        @error('sub_subclan')
                            <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                </div>

                <!-- Bank Name -->
                <div class="form-group col-md-6">
                    <strong>Bank Name:</strong>
                    <input type="text" name="bank_name" value="{{ old('bank_name') }}" class="form-control" placeholder="Bank Name">
                </div>

                <!-- Account Name -->
                <div class="form-group col-md-6">
                    <strong>Account Name:</strong>
                    <input type="text" name="account_name" value="{{ old('account_name') }}" class="form-control" placeholder="Account Name">
                </div>

                <!-- Account Number -->
                <div class="form-group col-md-6">
                    <strong>Account Number:</strong>
                    <input type="text" name="account_num" value="{{ old('account_num') }}" class="form-control" placeholder="Account Number">
                </div>

                <!-- Relation to Jugu Clan -->
                <div class="form-group col-md-6">
                    <strong>Relationship to the Jugu Clan:</strong>
                    <input type="text" name="relationship" value="{{ old('relationship') }}" class="form-control" placeholder="Relationship">
                </div>

                <!-- Terms and Conditions -->
                <div class="form-group col-md-6">
                    <strong>Do you accept the Jugu terms and conditions?</strong><span style="color:red;">*</span>
                    <select class="form-control" id="terms_and_conditions" name="terms_and_conditions" required>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <small class="form-text text-muted">You must accept our terms and conditions before your application can be submitted.</small>
                    @error('terms_and_conditions')
                        <span id="errorMsg" style="color:red;" class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>

                <!-- Recorder -->
                <div class="form-group col-md-6">
                    <strong>Recorder:</strong>
                    <input type="text" name="recorder" value="{{ old('recorder') }}" class="form-control" placeholder="Recorder">
                </div>

                <!-- Verified by Sub Subclan Leader -->
                <div class="form-group col-md-6">
                    <strong>Verified by:</strong>
                    <input type="text" name="verified" value="{{ old('verified') }}" class="form-control" placeholder="Verified by Sub Subclan Leader">
                </div>

                <!-- Checked by Subclan Leader -->
                <div class="form-group col-md-6">
                    <strong>Checked by:</strong>
                    <input type="text" name="checked" value="{{ old('checked') }}" class="form-control" placeholder="Checked by Subclan Leader">
                </div>

                <!-- Witnessed by Village Counsellor -->
                <div class="form-group col-md-6">
                    <strong>Witnessed by:</strong>
                    <input type="text" name="witness" value="{{ old('witness') }}" class="form-control" placeholder="Witnessed by Village Counsellor">
                </div>
            </div>
        
            <!-- Submit button -->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <!-- Include Bootstrap JS and jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
@push('scripts')
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