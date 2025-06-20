<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Formulir Peminjaman - PuspaNada</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #fde3c4;
      color: #333;
    }
    .container {
      max-width: 500px;
      margin: 40px auto;
      padding: 20px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
      margin-bottom: 25px;
    }
    form label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-family: 'Poppins', sans-serif;
    }
    button {
      margin-top: 20px;
      padding: 12px;
      width: 100%;
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
    <h1>Payment</h1>

    <form action="{{ url('/borrowing/store') }}" method="POST">
      @csrf

      <label for="duration">Durasi Peminjaman</label>
      <select id="duration" name="duration" required>
        <option value="">-- Pilih Durasi --</option>
        <option value="7">7 hari</option>
        <option value="14">14 hari</option>
        <option value="28">28 hari</option>
        <option value="30">30 hari</option>
      </select>

      <label for="payment_method">Metode Pembayaran</label>
      <select id="payment_method" name="payment_method" required>
        <option value="">-- Pilih Metode Pembayaran --</option>
        <option value="credit-card">Credit Card</option>
        <option value="bank-transfer">Bank Transfer</option>
        <option value="e-wallet">E-Wallet</option>
      </select>

      <button type="submit">Ajukan Peminjaman</button>
    </form>
  </div>
</body>
</html>
