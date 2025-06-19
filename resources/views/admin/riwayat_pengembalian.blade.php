<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>PuspaNada - Riwayat Pengembalian</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fffef2;
    }

    .navbar {
      background-color: #c44b0a;
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 24px;
      font-weight: bold;
    }

    .container {
      max-width: 1000px;
      margin: 30px auto;
      padding: 20px;
      background-color: #fff8e7;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      color: #c44b0a;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th, table td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: center;
    }

    table th {
      background-color: #f9d7a0;
      color: #333;
    }

    table tr:nth-child(even) {
      background-color: #fff2d6;
    }

    .empty-message {
      text-align: center;
      padding: 20px;
      color: #888;
      font-style: italic;
    }

    .btn-back {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #d35400;
      color: white;
      text-decoration: none;
      border-radius: 20px;
    }

    .btn-back:hover {
      background-color: #e67e22;
    }
  </style>
</head>
<body>

  <div class="navbar">
    PuspaNada - Riwayat Pengembalian
  </div>

  <div class="container">
    <h2>Daftar Riwayat Pengembalian</h2>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Peminjam</th>
          <th>Alat Musik</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Kembali</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="6" class="empty-message">Belum ada data pengembalian.</td>
        </tr>
      </tbody>
    </table>

    <a href="{{ route('dashboard.admin') }}" class="btn-back">Kembali ke Dashboard</a>
  </div>

</body>
</html>
