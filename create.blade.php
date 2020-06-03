<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('work1_css/stylesheet.css') }}">
    <title>Laravel work1</title>
</head>

<body>
    <header>
        <div>
            <h1>Laravel</h1>
        </div>
        <div>
            <a href="{{ route('work1.index')}}">Login</a>
            <a href="">Register</a>
        </div>
    </header>

@if (count($errors) > 0)
<p>全ての項目を入力して下さい。</p>
@endif

@error('password_confirmation')
    <p>{{$message}}</p>
@enderror

@error('password')
    <p>{{$message}}</p>
@enderror

    <form action="home" method="post">
        <table>
        @csrf
            <tr><th colspan="2">Register</th></tr>

            
            <tr>
                <td class="login_content">Name</td>
                <td><input type="text" class="text" name="name"></td>
            </tr>
            <tr>
                <td class="login_content">E-Mail Address</td>
                <td><input type="email" class="text" name="mail"></td>
            </tr>
            <tr>
                <td class="login_content">Password</td>
                <td><input type="password" class="text" name="password"></td>
            </tr>
            <tr>
                <td class="login_content">Confirm Password</td>
                <td><input type="password" class="text" name="password_confirmation"></td>
            </tr>
            <tr>
                <td class="login_content"></td>
                <td><input type="submit" id="submit" value="Register"></td>
            </tr>
        </table>
    </form>
        
</body>
</html>
