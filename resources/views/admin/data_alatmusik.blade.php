<!-- resources/views/data_alatmusik.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Musical Instruments</title>
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
    vertical-align: middle;  
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
    .instrument-form {
  display: flex;
  gap: 10px;
  margin-bottom: 30px;
  flex-wrap: wrap;
}

.instrument-form input {
  padding: 10px 15px;
  border: 2px solid #f39c12;
  border-radius: 8px;
  font-size: 14px;
  width: 200px;
  background-color: #fffef9;
}

.instrument-form input:focus {
  outline: none;
  border-color: #e67e22;
  box-shadow: 0 0 5px rgba(243, 156, 18, 0.5);
}

.btn-add {
  background-color: #d35400;
  color: white;
  padding: 10px 25px;
  border: none;
  border-radius: 25px;
  font-size: 14px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-add:hover {
  background-color: #e67e22;
}
button {
  margin: 0;
  padding: 6px 12px;
  font-size: 14px;
  border-radius: 6px;
  background-color: #e74c3c;
  color: white;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: #c0392b;
}
  </style>
</head>
<body>
  <div class="navbar">Musical Instruments</div>

  <div class="container">
    <h2>Instrument List</h2>
    <table>
      <thead>
  <tr>
    <th>No</th>
    <th>Instrument Name</th>
    <th>Type</th>
    <th>Stock</th>
    <th>Price</th> <!-- Tambahan -->
    <th>Aksi</th>
  </tr>
</thead>
<tbody>
  @forelse ($instruments as $index => $instrument)
    <tr>
      <td>{{ $index + 1 }}</td>
      <td>{{ $instrument->name }}</td>
      <td>{{ $instrument->type }}</td>
      <td>{{ $instrument->stock }}</td>
      <td>Rp{{ number_format($instrument->price, 0, ',', '.') }}</td> <!-- Tambahan -->
      <td>
        <form method="POST" action="{{ route('alatmusik.destroy', $instrument->id) }}" style="display:inline">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
      </td>
    </tr>
  @empty
    <tr>
      <td colspan="6" class="empty-message">No instrument data available.</td>
    </tr>
  @endforelse
</tbody>
    </table>
   <h2>Add New Instrument</h2>
<form method="POST" action="{{ route('alatmusik.store') }}" enctype="multipart/form-data" class="instrument-form">
    @csrf
    <input type="text" name="name" placeholder="Instrument Name" required>
    <input type="text" name="type" placeholder="Type" required>
    <input type="number" name="stock" placeholder="Stock" required>
    <input type="number" name="price" placeholder="Price (e.g. 150000)" required>
    <input type="file" name="image" accept="image/*" required>
    <button type="submit" class="btn-add">Add</button>
</form>

    <a href="{{ route('dashboard.admin') }}" class="btn-back">Back to Dashboard</a>
  </div>
</body>
</html>
