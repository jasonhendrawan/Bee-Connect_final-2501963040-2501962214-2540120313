<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUNIBCONNECT| SignUp</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main>
        <form method="POST" id="logForm" action="/">
            @csrf
            <div class="box-back">
                <div class="form">
                    <div class="input-area">
                        <input type="email" class="text-area" id="email" name="email"
                            placeholder="Email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        {{-- <input type="text" class="text-area" placeholder="Email" id="email"> --}}
                    </div>

                    <div class="input-area">
                        <input type="password" class="text-area" id="password" name="password" placeholder="Password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        {{-- <input type="password" class="text-area" placeholder="Password" id="pass"> --}}
                    </div>

                    <div class="input-area">
                        <!-- untuk backend shrsnya type nya submit -->
                        <!-- <button type="submit" class="reg" value="register" onclick="location.href='discover.html'">Log In</button>                     -->

                        <button class="reg" type="submit">Log
                            In</button>
                    </div>

                    <div class="input-area-line">
                        <p>Or</p>
                    </div>

                    <div class="input-area">
                        <button type="button" class="reg2" value="register" onclick="location.href='/signup'">Sign
                            Up</button>
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>
</html>
