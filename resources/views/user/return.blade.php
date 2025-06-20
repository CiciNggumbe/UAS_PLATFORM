<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Return - PuspaNada</title>
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
      padding: 20px;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }
    .header h1 {
      font-size: 24px;
      color: #d35400;
    }
    .return-table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .return-table th,
    .return-table td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #eee;
    }
    .return-table th {
      background-color: #f39c12;
      color: white;
    }
    .return-table tr:hover {
      background-color: #fdf2e9;
    }
    .btn-return {
      padding: 6px 12px;
      background-color: #e67e22;
      border: none;
      color: white;
      border-radius: 6px;
      cursor: pointer;
      font-size: 13px;
    }
    .btn-return:hover {
      background-color: #d35400;
    }
    .status {
      padding: 5px 10px;
      border-radius: 8px;
      font-weight: bold;
      font-size: 13px;
    }
    .status.returned {
      background: #2ecc71;
      color: white;
    }
    .status.pending {
      background: #e74c3c;
      color: white;
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
      <a href="/borrowing">Borrowing</a>
      <a href="/return" class="active">Return</a>
      <a href="/profile">Profile</a>
      <a href="/settings">Settings</a>
      <a href="/logout">Log Out</a>
    </div>

    <div class="main-content">
      <div class="header">
        <h1>Return Instruments</h1>
      </div>

      <table class="return-table">
        <thead>
          <tr>
            <th>Instrument</th>
            <th>Category</th>
            <th>Borrowed Date</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
  @forelse ($borrowings as $borrow)
    <tr>
      <td>{{ $borrow->instrument->name ?? '-' }}</td>
      <td>{{ $borrow->instrument->type ?? '-' }}</td>
      <td>{{ $borrow->start_date }}</td>
      <td>{{ $borrow->due_date ?? \Carbon\Carbon::parse($borrow->start_date)->addDays($borrow->duration)->format('d M Y') }}</td>
      <td>
        <span class="status {{ $borrow->return_status == 'returned' ? 'returned' : 'pending' }}">
          {{ ucfirst($borrow->return_status) }}
        </span>
      </td>
      <td>
        @if ($borrow->return_status == 'pending')
          <form action="{{ route('user.return.process', $borrow->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn-return">Return Now</button>
          </form>
        @else
          -
        @endif
      </td>
    </tr>
  @empty
    <tr>
      <td colspan="6" style="text-align: center;">No items to return</td>
    </tr>
  @endforelse
</tbody>
      </table>
    </div>
  </div>
</body>
</html>