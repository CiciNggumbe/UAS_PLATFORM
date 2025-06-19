<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PuspaNada - Rental History</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #fff3e0, #ffe0b2);
      font-family: 'Open Sans', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
    }

    .history-container {
      background-color: #fffdf9;
      margin-top: 60px;
      padding: 40px;
      border-radius: 20px;
      width: 90%;
      max-width: 1000px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.12);
      position: relative;
    }

    .header {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 30px;
    }

    .logo {
      width: 55px;
      height: auto;
      margin-right: 15px;
    }

    .title {
      font-size: 30px;
      color: #bf360c;
      font-family: 'Playfair Display', serif;
    }

    .back-btn {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #d84315;
      color: white;
      padding: 12px 28px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      font-size: 15px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .back-btn:hover {
      background-color: #bf360c;
      transform: translateX(-50%) scale(1.03);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 10px;
      overflow: hidden;
    }

    th, td {
      padding: 14px 16px;
      text-align: center;
    }

    th {
      background-color: #ffcc80;
      color: #4e2600;
      font-size: 16px;
    }

    tr:nth-child(even) {
      background-color: #fff8e1;
    }

    tr:hover {
      background-color: #ffe0b2;
    }

    td {
      font-size: 15px;
      color: #333;
    }

    .no-data {
      text-align: center;
      font-style: italic;
      color: gray;
      padding: 30px 0;
      font-size: 16px;
    }

    @media (max-width: 768px) {
      .title {
        font-size: 22px;
      }
      th, td {
        font-size: 13px;
        padding: 10px;
      }
      .back-btn {
        font-size: 13px;
        padding: 10px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="history-container">
    <div class="header">
      <img src="{{ asset('Foto1.png') }}" alt="Logo" class="logo" />
      <div class="title">Rental History</div>
    </div>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Customer Name</th>
          <th>Instrument</th>
          <th>Rental Date</th>
          <th>Payment Method</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @forelse($riwayat as $index => $r)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $r->nama_pemesan }}</td>
            <td>{{ $r->alat_musik }}</td>
            <td>{{ $r->tanggal_sewa }}</td>
            <td>{{ $r->metode_pembayaran }}</td>
            <td>{{ ucfirst($r->status) }}</td>
          </tr>
        @empty
          <tr>
            <td colspan="6" class="no-data">No rental history available.</td>
          </tr>
        @endforelse
      </tbody>
    </table>

    <a href="{{ url('/dashboard-user') }}" class="back-btn">← Back to Dashboard</a>
  </div>
</body>
</html>
