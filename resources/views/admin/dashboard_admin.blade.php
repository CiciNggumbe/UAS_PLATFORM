<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PuspaNada - Admin Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #fdf7e2;
    }

    .navbar {
      background-color: #c44b0a;
      padding: 20px;
      color: white;
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      font-family: 'Georgia', serif;
    }

    .dashboard-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px;
    }

    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      width: 100%;
      max-width: 1000px;
      margin-top: 20px;
    }

    .card {
      background-color: #fff8e7;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: 0.3s;
    }

    .card:hover {
      background-color: #ffeac2;
    }

    .card h3 {
      margin-bottom: 10px;
      color: #c44b0a;
    }

    .card p {
      color: #555;
      font-size: 14px;
    }

    .btn {
      margin-top: 15px;
      padding: 8px 20px;
      background-color: #d35400;
      color: white;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      font-size: 14px;
      text-decoration: none;
      display: inline-block;
    }

    .btn:hover {
      background-color: #e67e22;
    }
  </style>
</head>
<body>
  <div class="navbar">
    PuspaNada - Admin Dashboard
  </div>

  <div class="dashboard-container">
    <div class="card-grid">
      <div class="card">
        <h3>User Data</h3>
        <p>Manage application user information.</p>
        <a href="{{ route('pengguna.index') }}" class="btn">View</a>
      </div>

      <div class="card">
        <h3>Musical Instruments</h3>
        <p>Add, edit, or delete musical instruments.</p>
        <a href="{{ route('alatmusik.index') }}" class="btn">Manage</a>
      </div>

      <div class="card">
        <h3>Loan Transactions</h3>
        <p>Monitor and manage instrument loans.</p>
        <a href="{{ route('transaksi.index') }}" class="btn">View</a>
      </div>

      <div class="card">
        <h3>Reports</h3>
        <p>Download or view loan reports.</p>
        <a href="{{ route('laporan.index') }}" class="btn">Open</a>
      </div>

      <div class="card">
        <h3>Return History</h3>
        <p>View users' instrument return history.</p>
        <a href="{{ route('pengembalian.index') }}" class="btn">View</a>
      </div>
    </div>
  </div>
</body>
</html>
