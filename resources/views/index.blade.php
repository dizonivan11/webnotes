<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webnotes</title>
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Carter+One|Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <div id="login-modal" class="container">
        <div class="row">
            <div id="login-modal-image" class="col col-md-6 col-lg-6"><div></div></div>
            <div id="login-modal-content" class="col col-md-6 col-lg-6">
                <h1>Webnotes</h1>
                @if (session("msg") != null)
                    @if (session("msg-mood") != null)
                        <div class="{{ 'message-box ' . session('msg-mood') }}">
                    @else
                        <div class="message-box">
                    @endif
                        {{ session("msg") }}
                    </div>
                @endif
                <form action="{{ action('LoginController@Login') }}" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <label for="user-id">Username</label>
                    <input type="text" name="user-id" id="user-id" required>
                    <label for="user-pass">Password</label>
                    <input type="password" name="user-pass" id="user-pass" required>
                    <p id="login-modal-forgot"><a href="#">Forgot password?</a></p>
                    <input type="submit" value="Login">
                </form>
                <p id="login-modal-new">New to Webnotes? <a href="#">Create new account</a></p>
            </div>
        </div>
    </div>
</body>
</html>