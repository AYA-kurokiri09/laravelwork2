<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('work1_css/stylesheet.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Laravel work1</title>
    
</head>

<body>
    <header>
        <div>
            <h1>Laravel</h1>
        </div>
        
        <div>
            <h1 id="loginName">名前▼</h1>
            <a id="logoutBtn" href="{{ route('work1.index')}}">Logout</a>
        </div>
    </header>
    <table>
        <tr><th colspan="2">Dashboard</th></tr>
        <tr><td colspan="2">You are logged in!</td></tr>
    </table>

    <script>
        $(function() {
            $('#loginName').click(function(){
                $('#logoutBtn').slideUp();
            })
  
        });
    </script>
</body>
</html>