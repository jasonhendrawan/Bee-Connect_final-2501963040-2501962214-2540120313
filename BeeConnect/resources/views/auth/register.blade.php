<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SUNIBCONNECT| SignUp</title>
    <link rel="stylesheet" href="signup.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #F5DD90;">
    <form method="POST" action="/signup" class="form_signup" id="form">
        @csrf
        <div class="container">
            <h3 class="text_top">Sign Up</h3>
            <div class="input_space">
                @error('first_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="text" class="inpt_signup" id="name" name="first_name" placeholder="FIrst Name">
                
            </div>
            <div class="input_space">
                @error('last_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="text" class="inpt_signup" id="name" name="last_name" placeholder="Last Name">
                
            </div>
            <div class="input_space">
                @error('student_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="text" placeholder="Student ID" id="student_id" class="inpt_signup" name="student_id">
                
            </div>
            {{-- <input type="text" placeholder="Name" id="name" class="inpt_signup"> --}}
            <div class="input_space">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="text" placeholder="Email" id="email" class="inpt_signup" name="email">
                
            </div>
            <div class="input_space">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="password" class="inpt_signup" id="password" name="password" placeholder="Password">
                
            </div>
            <div class="input_space">
                <input type="password" class="inpt_signup" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirm Password">
            </div>
            {{-- <input type="text" placeholder="Password" id="name" class="inpt_signup"> --}}
            {{-- <input type="text" placeholder="Confirm Password" id="name" class="inpt_signup"> --}}
            <div class="input_space">
                @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <select id="gender" class="inpt_signup" name="gender">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                
            </div>
            <div class="input_space">
                @error('major')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <select id="major" class="inpt_signup" name="major">
                    <option value="">Select Major</option>
                    @foreach ($major as $m)
                    <option value="{{ $m->ID }}">{{ $m->major_name }}</option>
                    @endforeach
                    {{-- <option value="1">Computer Science</option>
                    <option value="2">System Information</option>
                    <option value="3">International Business Management</option>
                    <option value="4">Management</option>
                    <option value="5">Hotel & Management</option> --}}
                </select>
                
            </div>
            <div class="input_space">
                @error('region')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <select id="region" class="inpt_signup" name="region">
                    <option value="">Select Region</option>
                    @foreach ($region as $r)
                    <option value="{{ $r->ID }}">{{ $r->region_name }}</option>
                    @endforeach
                    {{-- <option value="1">Alam Sutera</option>
                    <option value="7">Bandung</option>
                    <option value="4">Bekasi</option>
                    <option value="2">Kemanggisan</option>
                    <option value="5">Malang</option>
                    <option value="6">Semarang</option>
                    <option value="3">Senayan</option> --}}
                </select>
                
            </div>
            {{-- <button id="signup-btn" type="submit">Sign Up</button> --}}
            <input type="submit" id="signup-btn" class="btn btn-success btn-md" value="SignUp" />
            <input type="button" id="login-btn" class="btn btn-success btn-md" value="LogIn" onclick="location.href='/'" />
        </div>



    </form>
</body>

</html>
