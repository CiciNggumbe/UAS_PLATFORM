<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Data</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fffef2;
      margin: 0;
      padding: 0;
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
    }

    h2 {
      color: #c44b0a;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color: #f9d7a0;
    }

    .empty-message {
      text-align: center;
      color: #999;
      padding: 20px;
    }

    .btn-back {
      margin-top: 20px;
      display: inline-block;
      padding: 10px 20px;
      background-color: #d35400;
      color: white;
      text-decoration: none;
      border-radius: 20px;
    }
  </style>
</head>
<body>
  <div class="navbar">User Data</div>

  <div class="container">
    <h2>User List</h2>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
        </tr>
      </thead>
      <tbody>
  @forelse ($users as $index => $user)
    <tr>
      <td>{{ $index + 1 }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->phone ?? '-' }}</td>
    </tr>
  @empty
    <tr>
      <td colspan="4" class="empty-message">No user data available.</td>
    </tr>
  @endforelse
</tbody>
    </table>

    <a href="{{ route('dashboard.admin') }}" class="btn-back">Back to Dashboard</a>
  </div>
</body>
</html>
