<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Settings - PuspaNada</title>
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

    .settings-box {
      background-color: white;
      padding: 30px;
      border-radius: 15px;
      max-width: 700px;
      margin: auto;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .settings-box h2 {
      margin-bottom: 25px;
      color: #e67e22;
      font-size: 22px;
    }

    .setting-item {
      margin-bottom: 25px;
    }

    .setting-item label {
      display: block;
      font-weight: bold;
      margin-bottom: 8px;
    }

    .setting-item input[type="text"],
    .setting-item input[type="email"],
    .setting-item input[type="password"],
    .setting-item select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .setting-item input[type="checkbox"] {
      margin-right: 10px;
    }

    .btn-save {
      padding: 10px 25px;
      background-color: #e67e22;
      border: none;
      color: white;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-save:hover {
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
      <a href="/history">History</a>
      <a href="/borrowing">Borrowing</a>
      <a href="/return">Return</a>
      <a href="/profile">Profile</a>
      <a href="/settings" class="active">Settings</a>
      <a href="/logout">Log Out</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <div class="settings-box">
        <h2>Settings</h2>

        <div class="setting-item">
          <label for="theme">Theme</label>
          <select id="theme">
            <option>Light</option>
            <option>Dark</option>
            <option>Auto</option>
          </select>
        </div>

        <div class="setting-item">
          <label>Notifications</label>
          <label><input type="checkbox" checked> Email Notifications</label><br />
          <label><input type="checkbox"> SMS Alerts</label>
        </div>

        <div class="setting-item">
          <label for="password">Change Password</label>
          <input type="password" id="password" placeholder="New Password" />
        </div>

        <div class="setting-item">
          <label for="email">Update Email</label>
          <input type="email" id="email" placeholder="your@email.com" />
        </div>

        <div style="text-align: right;">
          <button class="btn-save">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>