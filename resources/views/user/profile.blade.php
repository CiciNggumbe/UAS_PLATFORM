<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profile - PuspaNada</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #fde3c4;
      color: #333;
    }

    .container {
      display: flex;
    }

    .sidebar {
      width: 220px;
      background-color: #f38c35;
      color: white;
      padding: 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .sidebar h2 {
      font-size: 18px;
      line-height: 1.4;
    }

    .sidebar a {
      text-decoration: none;
      color: white;
      padding: 10px;
      border-radius: 8px;
      display: block;
      transition: background 0.2s;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #d35400;
    }

    .main-content {
      flex: 1;
      padding: 40px;
    }

    .profile-box {
      background-color: white;
      padding: 30px;
      border-radius: 15px;
      max-width: 600px;
      margin: auto;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .profile-header img {
      width: 100px;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .profile-header h2 {
      margin: 0;
      font-size: 22px;
      color: #e67e22;
    }

    .profile-info {
      margin-top: 20px;
    }

    .profile-info div {
      margin-bottom: 15px;
    }

    .profile-info label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .profile-info span {
      font-size: 14px;
    }

    .btn-group {
      text-align: center;
      margin-top: 30px;
    }

    .btn {
      padding: 10px 20px;
      margin: 5px;
      background-color: #e67e22;
      border: none;
      color: white;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .btn:hover {
      background-color: #d35400;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <div class="sidebar">
      <h2>PuspaNada<br>Online Instrument<br>Rental Service</h2>
      <a href="/dashboard">Home</a>
      <a href="/products">Products</a>
      <a href="/history.html">History</a>
      <a href="/borrowing.html">Borrowing</a>
      <a href="/return.html">Return</a>
      <a href="/profile" class="active">Profile</a>
      <a href="/settings">Settings</a>
      <a href="/logout">Log Out</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <div class="profile-box">
        <div class="profile-header">
          <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Profile Picture">
          <h2>Ambatu</h2>
        </div>
        <div class="profile-info">
          <div>
            <label>Email</label>
            <span>ambatu@example.com</span>
          </div>
          <div>
            <label>Phone</label>
            <span>+62 812-3456-7890</span>
          </div>
          <div>
            <label>Account Type</label>
            <span>VIP Member</span>
          </div>
          <div>
            <label>Joined</label>
            <span>March 2024</span>
          </div>
        </div>
        <div class="btn-group">
          <a href="/edit-profile.html" class="btn">Edit Profile</a>
          <a href="/logout.html" class="btn">Log Out</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>