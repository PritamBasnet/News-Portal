<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
            width: 100%;
            background-color: #e2e0ff;
            overflow: hidden;
            display: grid;
            place-items: center;
            font-family: sans-serif;
        }

        .LoginForm {
            height: fit-content;
            width: 400px;
            padding: 20px;
            background-color: white;
        }

        .HeadingTxt {
            text-align: center;
            font-size: 26px;
        }

        .SmallWarning {
            display: block;
            font-size: 12px;
            text-align: center;
        }

        .Login-Area {
            padding: 15px 0;
        }

        .LoginField {
            display: flex;
            flex-direction: column;
            padding: 13px 0;
        }

        .InputName {
            font-size: 12px;
            font-weight: 500;
        }

        .InputField {
            height: 35px;
            border: none;
            background-color: #e2e0ff;
        }

        .InputField:focus {
            outline: none;
        }

        .MakingAuto {
            height: fit-content;
            width: fit-content;
            margin: auto;
        }

        .LoginBTn {
            background-color: #8BC6EC;
            background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
            height: 45px;
            border-radius: 4px;
            width: 360px;
            border: none;
            color: white;
        }

        .Register_Page {
            font-size: 14px;
            color: #9599E2 !important;
            padding: 12px 5px;
            text-decoration: none;
        }

    </style>
</head>

<body>
    <form action="{{ route('auth.save') }}" class="LoginForm" method="POST">
        @csrf
        @if (Session('success'))
            <div class="alert alert-success" role="alert">
                {{ Session('success') }}
            </div>
        @endif
        @if (Session('fail'))
            <div class="alert alert-danger" role="alert">
                {{ Session('fail') }}
            </div>
        @endif
        <h2 class="HeadingTxt">Register
        </h2>
        <span class="SmallWarning">We will Secure Your Information</span>
        <div class="Login-Area">
            <div class="LoginField">
                <label for="" class="InputName">Name</label>
                <input type="text" name="name" id="" class="InputField" value="{{ old('name') }}">
                @error('name')
                    <span class="text text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="LoginField">
                <label for="" class="InputName">Email</label>
                <input type="email" name="email" id="" class="InputField" value="{{ old('email') }}">
                @error('email')
                    <span class="text text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="LoginField">
                <label for="" class="InputName">Password</label>
                <input type="password" name="password" id="" class="InputField">
                @error('password')
                    <span class="text text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="MakingAuto">
            <button class="LoginBTn" type="submit">Login</button>
        </div>
        <a href="/auth/login" class="Register_Page">Have an Account? Sign In.</a>
    </form>
</body>

</html>
