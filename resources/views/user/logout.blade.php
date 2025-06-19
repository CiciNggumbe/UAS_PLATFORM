<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Logout - PuspaNada</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #fde3c4;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      color: #333;
    }

    .logout-container {
      text-align: center;
      background-color: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 90%;
    }

    .logout-container h1 {
      color: #e67e22;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .logout-container p {
      font-size: 14px;
      margin-bottom: 30px;
    }

    .logout-container a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #d35400;
      color: white;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .logout-container a:hover {
      background-color: #b84300;
    }

    .icon {
      font-size: 50px;
      color: #f39c12;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <div class="logout-container">
    <div class="icon">👋</div>
    <h1>You have been logged out</h1>
    <p>Thank you for using PuspaNada. See you again!</p>
    <a href="/login">Back to Login</a>
  </div>
</body>
</html>