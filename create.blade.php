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

    <table>
        <tr><th colspan="2">Register</th></tr>
        <tr>
            <td class="login_content">Name</td>
            <td><input type="text" class="text" name="name"></td>
        </tr>
        <tr>
            <td class="login_content">E-Mail Address</td>
            <td><input type="text" class="text" name="email"></td>
        </tr>
        <tr>
            <td class="login_content">Password</td>
            <td><input type="text" class="text" name="password"></td>
        </tr>
        <tr>
            <td class="login_content">Confirm Password</td>
            <td><input type="text" class="text" name="confirmPassword"></td>
        </tr>
        <tr>
            <td class="login_content"></td>
            <td><input type="submit" id="submit" value="Register"></td>
        </tr>
    </table>

    
        
</body>
</html>