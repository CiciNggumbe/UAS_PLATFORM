<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard - PuspaNada</title>
    <style>
        body {
            background-color: #fef9ec;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #d35400;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .container {
            padding: 30px;
            text-align: center;
        }

        .welcome {
            font-size: 22px;
            color: #333;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #e67e22;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            margin: 5px;
            display: inline-block;
        }

        .btn:hover {
            background-color: #d35400;
        }

        .logout {
            margin-top: 30px;
            display: block;
            font-size: 14px;
            color: #c0392b;
            text-decoration: none;
        }

        .logout:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="navbar">
        PuspaNada - User Dashboard
    </div>

    <div class="container">
        <div class="welcome">
            Welcome, {{ session('username') }}!
        </div>

        <a href="#" class="btn">Browse Instruments</a>
        <a href="{{ url('/riwayat-peminjaman') }}" class="btn">My Borrow History</a>
        <a href="#" class="btn">Return Instrument</a>

        <a href="{{ route('logout') }}" class="logout">Logout</a>
    </div>

</body>
</html>
