<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Borrowing - PuspaNada</title>
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
      padding: 30px;
    }
    h1 {
      margin-bottom: 25px;
    }
    form {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      max-width: 600px;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    input, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-family: 'Poppins', sans-serif;
    }
    button {
      margin-top: 20px;
      padding: 10px 20px;
      background: #f38c35;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
    }
    button:hover {
      background: #d35400;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <h2>PuspaNada<br>Online Instrument<br>Rental Service</h2>
      <a href="/dashboard">Home</a>
      <a href="/products">Products</a>
      <a href="/history">History</a>
      <a href="/borrowing" class="active">Borrowing</a>
      <a href="/return">Return</a>
      <a href="/profile">Profile</a>
      <a href="/settings">Settings</a>
      <a href="/logout">Log Out</a>
    </div>

    <div class="main-content">
      <h1>Formulir Peminjaman Alat Musik</h1>
      <form>
        <label for="instrument">Nama Alat Musik</label>
        <select id="instrument" name="instrument">
          <option value="">-- Pilih Alat Musik --</option>
          <option value="guitar">Guitar</option>
          <option value="violin">Violin</option>
          <option value="keyboard">Keyboard</option>
          <option value="flute">Flute</option>
          <option value="saxophone">Saxophone</option>
        </select>

        <label for="duration">Durasi Peminjaman</label>
<select id="duration" name="duration" required>
  <option value="">-- Pilih Durasi --</option>
  <option value="7">7 hari</option>
  <option value="14">14 hari</option>
  <option value="28">28 hari</option>
  <option value="30">30 hari</option>
</select>

        <label for="payment-method">Metode Pembayaran</label>
        <select id="payment-method" name="payment-method">
          <option value="">-- Pilih Metode Pembayaran --</option>
          <option value="credit-card">Credit Card</option>
          <option value="bank-transfer">Bank Transfer</option>
          <option value="e-wallet">E-Wallet</option>
        </select>

        <button type="submit">Ajukan Peminjaman</button>
      </form>
    </div>
  </div>
</body>
</html>