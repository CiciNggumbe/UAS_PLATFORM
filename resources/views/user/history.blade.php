<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>History - PuspaNada</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #fde3c4;
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
    }
    .sidebar a:hover,
    .sidebar a.active {
      background-color: #d35400;
    }
    .main-content {
      flex: 1;
      padding: 20px;
    }
    h1 {
      margin-bottom: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 15px;
      text-align: left;
      font-size: 14px;
    }
    th {
      background-color: #f38c35;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    img {
      width: 50px;
      border-radius: 5px;
    }
    .status-success {
      color: green;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <h2>PuspaNada<br>Online Instrument<br>Rental Service</h2>
      <a href="/dashboard">Home</a>
      <a href="/products">Products</a>
      <a href="/history" class="active">History</a>
      <a href="/borrowing">Borrowing</a>
      <a href="/return">Return</a>
      <a href="/profile">Profile</a>
      <a href="/settings">Settings</a>
      <a href="/logout">Log Out</a>
    </div>

    <div class="main-content">
      <h1>History</h1>
      <table>
        <tr>
          <th>Gambar</th>
          <th>Nama Alat</th>
          <th>Kategori</th>
          <th>Harga</th>
          <th>Durasi</th>
          <th>Pembayaran</th>
          <th>Status</th>
        </tr>
        <tr>
          <td><img src="keyboard.jpg" alt="Keyboard Piano"></td>
          <td>Keyboard Piano</td>
          <td>Percussion</td>
          <td>$10/day</td>
          <td>5 days</td>
          <td>Credit Card</td>
          <td class="status-success">Delivered</td>
        </tr>
        <tr>
          <td><img src="flute.jpg" alt="Flute"></td>
          <td>Flute</td>
          <td>Woodwind</td>
          <td>$5/day</td>
          <td>2 days</td>
          <td>Credit Card</td>
          <td class="status-success">Delivered</td>
        </tr>
        <tr>
          <td><img src="saxophone.jpg" alt="Saxophone"></td>
          <td>Saxophone</td>
          <td>Woodwind</td>
          <td>$75/day</td>
          <td>1 day</td>
          <td>Credit Card</td>
          <td class="status-success">Delivered</td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>