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
  <thead>
    <tr>
      <th>Image</th>
      <th>Name</th>
      <th>Type</th>
      <th>Price</th>
      <th>Duration</th>
      <th>Payment</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($borrowings as $borrow)
    <tr>
      <td>
        @if($borrow->instrument && $borrow->instrument->image_path)
          <img src="{{ asset('storage/' . $borrow->instrument->image_path) }}" alt="{{ $borrow->instrument->name }}">
        @else
          <img src="{{ asset('default.jpg') }}" alt="No image">
        @endif
      </td>
      <td>{{ $borrow->instrument->name ?? '-' }}</td>
      <td>{{ $borrow->instrument->type ?? '-' }}</td>
      <td>${{ $borrow->instrument->price ?? '0' }}/day</td>
      <td>{{ $borrow->duration }} days</td>
      <td>{{ $borrow->payment_method }}</td>
      <td class="status-success">Delivered</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>
</body>
</html>