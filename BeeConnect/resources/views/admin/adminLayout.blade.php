<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNIBCONNECT| SignUp</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="discover.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="headerfooter.css">
    <link rel="stylesheet" href="friend.css">
    <link rel="stylesheet" href="admin.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav>
        <a href='/login'><img src="assets/logo.png" ></a>
            <ul class="nav">
                <li><a href="/dashboard" class="active">User</a></li>
                <li><a href="/adminRegion" class="active">Region</a></li>
                <li><a href="/adminMajor" class="active">Major</a></li>
                <li><a href="/adminOrg" class="active">Organization</a></li>
                <li>
                    <a class="active" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="/logout" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
    </nav>

    <div>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
