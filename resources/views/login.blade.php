<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | myjugu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #00783e; /* Dark Green */
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            border-radius: 5px;
            background-color: #4caf50; /* Light Green */
            border: none;
        }
        .btn-primary:hover {
            background-color: #388e3c; /* Slightly darker green on hover */
        }
        .company-name {
            color: #ffffff; /* Grey */
            font-size: 14px;
            margin-bottom: 10px;
        }
        .user-type {
            font-size: 16px; /* Increased font size */
            margin-top: 10px; /* Adjusted margin */
            text-align: center; /* Centered text */
            color: #ffffff; /* Darkened color for better readability */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Login | <span class="">myjugu</span></h4>
                        <p class="company-name">JUGU DEVELOPMENT CORPORATION LTD</p>
                        @if(isset($userType))
                            <p class="user-type">You are logging in as {{ ucfirst($userType) }}</p>
                        @endif
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>