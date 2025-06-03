<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PuspaNada - Register</title>
    <style>
        body {
            background-color: #fdf7e2;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
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
            width: 50px; /* ukuran gambar lebih kecil */
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
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid orange;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn-register {
            background-color: #d35400;
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-register:hover {
            background-color: #e67e22;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="header">
            <img src="Foto1.png" alt="Logo" class="logo">
            <div class="title">PuspaNada</div>
        </div>

        <form>
            <input type="text" placeholder="Username" required>
            <input type="text" placeholder="Address" required>
            <input type="email" placeholder="E-mail" required>
            <input type="text" placeholder="Birthplace" required>
            <input type="password" placeholder="Password" required>
            <button type="submit" class="btn-register">REGISTER</button>
        </form>
    </div>
</body>
</html>