<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PuspaNada - Login</title>
    <style>
        body {
            background-color: #fdf7e2;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff8e7;
            padding: 40px;
            border-radius: 8px;
            text-align: center;
            width: 400px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        .logo {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }

        .title {
            font-size: 24px;
            color: #c44b0a;
            font-weight: bold;
            font-family: 'Georgia', serif;
        }

        input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 2px solid orange;
    border-radius: 4px;
    font-size: 14px;
}

        .btn-login {
            background-color: #d35400;
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #e67e22;
        }

        .link-register {
            margin-top: 15px;
            display: block;
            font-size: 14px;
            color: #c44b0a;
            text-decoration: none;
        }

        .link-register:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="header">
            <img src="{{ asset('Foto1.png') }}" alt="Logo" class="logo">
            <div class="title">PuspaNada</div>
        </div>

        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('login.process') }}">
    @csrf
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" class="btn-login">LOGIN</button>
</form>

        <a href="{{ url('/register') }}" class="link-register">Don't have an account? Register here</a>

    </div>
</body>
</html>
