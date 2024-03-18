<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugu Clan Membership Application Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include any additional CSS stylesheets or JavaScript libraries here -->
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Jugu Clan Membership Application Form</h1>
        <p class="text-center text-muted">Note: Only members of the Jugu clan are allowed to submit their applications below.</p>

        <form method="POST" action="/users">
        @csrf

        <div class="row">
            <!-- Registration Date -->
            <div class="form-group col-md-6">
                <label for="registration_date">Reg Date (ddmmyyyy) *</label>
                <input type="date" class="form-control" id="reg_date" name="registration_date">
            </div>

            <!-- Name -->
            <div class="form-group col-md-6">
                <label for="first_name">First Name *</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First" required>
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Last Name *</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last" required>
            </div>

            <!-- NID Number -->
            <div class="form-group col-md-6">
                <label for="nid_number">NID Number</label>
                <input type="text" class="form-control" id="nid_number" name="nid_number">
            </div>

            <!-- ID Photo -->
            <div class="form-group col-md-6">
                <label for="id_photo">ID Photo</label>
                <input type="file" class="form-control-file" id="id_photo" name="id_photo">
            </div>

            <!-- Email -->
            <div class="form-group col-md-6">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <small class="form-text text-muted">To create your email, enter your first and last name followed by "@mail.com". Example, John William Kennedy should be entered as "johnkennedy@mail.com".</small>
            </div>

            <!-- Password -->
            <div class="form-group col-md-6">
                <label for="password">Password *</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <!-- Confirm Password -->
            <div class="form-group col-md-6">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>

            <!-- Mobile -->
            <div class="form-group col-md-6">
                <label for="mobile">Mobile</label>
                <input type="tel" class="form-control" id="mobile_num" name="mobile">
            </div>

            <!-- Gender -->
            <div class="form-group col-md-6">
                <label for="gender">Gender *</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">Select...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <!-- Religion -->
            <div class="form-group col-md-6">
                <label for="religion">Religion</label>
                <select class="form-control" id="religion" name="religion">
                    <option value="">Select...</option>
                    <!-- Add options for religions here -->
                </select>
            </div>

            <!-- Date of Birth -->
            <div class="form-group col-md-6">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" id="birth_date" name="date_of_birth">
            </div>

            <!-- Date of Death -->
            <div class="form-group col-md-6">
                <label for="date_of_death">Date of Death</label>
                <input type="date" class="form-control" id="death_date" name="date_of_death">
            </div>
            
            <!-- Education -->
            <div class="form-group col-md-6">
                <label for="education">Education</label>
                <input type="text" class="form-control" id="education" name="education">
            </div>

            <!-- Job Title -->
            <div class="form-group col-md-6">
                <label for="job_title">Job Title</label>
                <input type="text" class="form-control" id="job_title" name="job_title">
            </div>

            <!-- Employer -->
            <div class="form-group col-md-6">
                <label for="employer">Employer</label>
                <input type="text" class="form-control" id="employer" name="employer">
            </div>

            <!-- Postal Address -->
            <div class="form-group col-md-6">
                <label for="postal_address">Postal Address</label>
                <textarea class="form-control" id="postal_address" name="postal_address"></textarea>
            </div>

            <!-- Residential Address -->
            <div class="form-group col-md-6">
                <label for="residential_address">Residential Address *</label>
                <textarea class="form-control" id="residential_address" name="residential_address" required></textarea>
            </div>

            <!-- Province -->
            <div class="form-group col-md-6">
                <label for="province">Province *</label>
                <select class="form-control" id="province" name="province" required>
                    <option value="">Select</option>
                    <option value="province1">Province 1</option>
                    <option value="province2">Province 2</option>
                    <option value="province3">Province 3</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <!-- District -->
            <div class="form-group col-md-6">
                <label for="district">District *</label>
                <input type="text" class="form-control" id="district" name="district" required>
            </div>

            <!-- LLG -->
            <div class="form-group col-md-6">
                <label for="llg">LLG *</label>
                <input type="text" class="form-control" id="llg" name="llg" required>
            </div>

            <!-- Council Ward -->
            <div class="form-group col-md-6">
                <label for="council_ward">Council Ward *</label>
                <input type="text" class="form-control" id="ward_id" name="council_ward" required>
            </div>

            <!-- Village -->
            <div class="form-group col-md-6">
                <label for="village">Village</label>
                <input type="text" class="form-control" id="village_id" name="village">
            </div>

            <!-- Father's Name -->
            <div class="form-group col-md-6">
                <label for="father_first_name">Father's First Name *</label>
                <input type="text" class="form-control" id="father_name_first" name="father_first_name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="father_last_name">Father's Last Name *</label>
                <input type="text" class="form-control" id="father_name_last" name="father_last_name" required>
            </div>

            <!-- Mother's Name -->
            <div class="form-group col-md-6">
                <label for="mother_first_name">Mother's First Name *</label>
                <input type="text" class="form-control" id="mother_name_first" name="mother_first_name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="mother_last_name">Mother's Last Name *</label>
                <input type="text" class="form-control" id="mother_name_last" name="mother_last_name" required>
            </div>

            <!-- Clan -->
            <div class="form-group col-md-6">
                <label for="clan">Clan *</label>
                <input type="text" class="form-control" id="clan" name="clan" required>
            </div>

            <!-- Subclan -->
            <div class="form-group col-md-6">
                <label for="subclan">Subclan *</label>
                <input type="text" class="form-control" id="subclan" name="subclan" required>
            </div>

            <!-- Sub Subclan -->
            <div class="form-group col-md-6">
                <label for="sub_subclan">Sub Subclan</label>
                <input type="text" class="form-control" id="sub_subclan" name="sub_subclan">
            </div>

            <!-- Bank Name -->
            <div class="form-group col-md-6">
                <label for="bank_name">Bank Name</label>
                <input type="text" class="form-control" id="bank_name" name="bank_name">
            </div>

            <!-- Account Name -->
            <div class="form-group col-md-6">
                <label for="account_name">Account Name</label>
                <input type="text" class="form-control" id="account_name" name="account_name">
            </div>

            <!-- Account Number -->
            <div class="form-group col-md-6">
                <label for="account_number">Account Number</label>
                <input type="text" class="form-control" id="account_number" name="account_number">
            </div>

            <!-- Relation to Jugu Clan -->
            <div class="form-group col-md-6">
                <label for="relation_to_jugu">Describe your relation to the Jugu Clan</label>
                <input type="text" class="form-control" id="relation_to_jugu" name="relation_to_jugu">
            </div>

            <!-- Terms and Conditions -->
            <div class="form-group col-md-6">
                <label for="terms_and_conditions">Do you accept the Jugu terms and conditions? *</label>
                <select class="form-control" id="terms_and_conditions" name="terms_and_conditions" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <small class="form-text text-muted">You must accept our terms and conditions before your application can be submitted.</small>
            </div>

            <!-- Recorder -->
            <div class="form-group col-md-6">
                <label for="recorder">Recorder</label>
                <input type="text" class="form-control" id="recorder" name="recorder" placeholder="Recorder">
            </div>

            <!-- Verified by Sub Subclan Leader -->
            <div class="form-group col-md-6">
                <label for="verified_by">Verified by Sub Subclan Leader</label>
                <input type="text" class="form-control" id="verified_by" name="verified_by" placeholder="Verified by Sub Subclan Leader">
            </div>

            <!-- Checked by Subclan Leader -->
            <div class="form-group col-md-6">
                <label for="checked_by">Checked by Subclan Leader</label>
                <input type="text" class="form-control" id="checked_by" name="checked_by" placeholder="Checked by Subclan Leader">
            </div>

            <!-- Witnessed by Village Counsellor -->
            <div class="form-group col-md-6">
                <label for="witnessed_by">Witnessed by Village Counsellor</label>
                <input type="text" class="form-control" id="witnessed_by" name="witnessed_by" placeholder="Witnessed by Village Counsellor">
            </div>
        </div>

        <!-- Submit button -->
<button type="submit" class="btn btn-primary">Submit</button>
</div>

@if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif

        
       {{--  <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </div> --}}



    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
