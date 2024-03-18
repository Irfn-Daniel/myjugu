@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Member Details</h2>

                <table class="table">
                    <tbody>
                        <tr>
                            <th>Registration Date :</th>
                            <td>{{ $members->reg_date }}</td>
                        </tr>
                        <tr>
                            <th>First Name:</th>
                            <td>{{ $members->name_first }}</td>
                        </tr>
                        <tr>
                            <th>Middle Name:</th>
                            <td>{{ $members->name_middle }}</td>
                        </tr>
                        <tr>
                            <th>Last Name:</th>
                            <td>{{ $members->last_name }}</td>
                        </tr>
                        <tr>
                            <th>NID Number:</th>
                            <td>{{ $members->nid_number }}</td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td>{{ $members->email }}</td>
                        </tr>
                        <tr>
                            <th>Mobile Number :</th>
                            <td>{{ $members->mobile_num }}</td>
                        </tr>
                        <tr>
                            <th>Gender :</th>
                            <td>{{ $members->gender }}</td>
                        </tr>    
                        <tr>
                            <th>Religion :</th>
                            <td>{{ $members->religion }}</td>
                        </tr> 
                        <tr>
                            <th>Date of Birth :</th>
                            <td>{{ $members->birth_date }}</td>
                        </tr>
                        <tr>
                            <th>Date of death :</th>
                            <td>{{ $members->death_date }}</td>
                        </tr>
                        <tr>
                            <th>Education :</th>
                            <td>{{ $members->education }}</td>
                        </tr>
                        <tr>
                            <th>Job Title :</th>
                            <td>{{ $members->job_title }}</td>
                        </tr>
                        <tr>
                            <th>Employer :</th>
                            <td>{{ $members->employer }}</td>
                        </tr> 
                        <tr>
                            <th>Postal Address :</th>
                            <td>{{ $members->postal_address }}</td>
                        </tr>  
                        <tr>
                            <th>Residential Address :</th>
                            <td>{{ $members->residential_address }}</td>
                        </tr>               
                        <tr>
                            <th>Province :</th>
                            <td>{{ $members->province }}</td>
                        </tr>       
                        <tr>
                            <th>District :</th>
                            <td>{{ $members->district }}</td>
                        </tr>
                        <tr>
                            <th>LLG :</th>
                            <td>{{ $members->llg }}</td>
                        </tr>
                        <tr>
                            <th>Council Ward :</th>
                            <td>{{ $members->council_ward }}</td>
                        </tr>
                        <tr>
                            <th>Village :</th>
                            <td>{{ $members->village }}</td>
                        </tr>
                        <tr>
                            <th>Father's First Name :</th>
                            <td>{{ $members->father_name_first }}</td>
                        </tr>
                        <tr>
                            <th>Father's Last Name :</th>
                            <td>{{ $members->father_name_last }}</td>
                        </tr>
                        <tr>
                            <th>Mother's First Name :</th>
                            <td>{{ $members->mother_name_first }}</td>
                        </tr>
                        <tr>
                            <th>Mother's Last Name :</th>
                            <td>{{ $members->mother_name_last }}</td>
                        </tr>
                        <tr>
                            <th>Clan :</th>
                            <td>{{ $members->clan }}</td>
                        </tr>
                        <tr>
                            <th>Subclan :</th>
                            <td>{{ $members->subclan }}</td>
                        </tr>
                        <tr>
                            <th>Sub subclan :</th>
                            <td>{{ $members->sub_subclan }}</td>
                        </tr>
                        <tr>
                            <th>Bank Name :</th>
                            <td>{{ $members->bank_name }}</td>
                        </tr>
                        <tr>
                            <th>Account Name :</th>
                            <td>{{ $members->account_name }}</td>
                        </tr>
                        <tr>
                            <th>Account Number :</th>
                            <td>{{ $members->account_number }}</td>
                        </tr>
                        <tr>
                            <th>Relationship to the Jugu Clan :</th>
                            <td>{{ $members->relationship }}</td>
                        </tr>
                        <tr>
                            <th>Recorder :</th>
                            <td>{{ $members->recorder }}</td>
                        </tr>
                        <tr>
                            <th>Verified by :</th>
                            <td>{{ $members->verified }}</td>
                        </tr>
                        <tr>
                            <th>Checked by :</th>
                            <td>{{ $members->checked }}</td>
                        </tr>
                        <tr>
                            <th>Witnessed by :</th>
                            <td>{{ $members->witness }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ route('admins.index') }}" class="btn btn-primary">Back to Members</a>
            </div>
        </div>
    </div>
@endsection