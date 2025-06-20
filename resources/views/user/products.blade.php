<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Product List - PuspaNada</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #ffe5b4;
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
      height: 100vh;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      margin-bottom: 10px;
      padding: 10px;
      border-radius: 5px;
    }
    .sidebar a.active,
    .sidebar a:hover {
      background: #d35400;
    }
    .main-content {
      flex: 1;
      padding: 20px;
    }
    .product-card {
  position: relative;
  width: 200px;
  height: 300px;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 8px 16px rgba(0,0,0,0.2);
  transition: transform 0.3s ease;
  background-color: #000;
}
.product-card:hover {
  transform: translateY(-5px);
}
    .product-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
    .product-card .info {
  position: absolute;
  bottom: 15px;
  width: 100%;
  text-align: center;
  color: white;
  z-index: 2;
}

.product-card .info h3 {
  margin: 0;
  font-size: 18px;
  font-weight: bold;
}

.product-card .info p {
  margin: 3px 0 0 0;
  font-size: 13px;
}

.product-card .price {
  position: absolute;
  top: 10px;
  left: 10px;
  background: black;
  color: white;
  padding: 4px 8px;
  font-size: 13px;
  border-radius: 8px;
  z-index: 2;
}
    .product-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
    .product-card .gradient-overlay {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 45%;
  background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
}

  </style>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <h2>PuspaNada</h2>
      <a href="dashboard">Home</a>
      <a href="products" class="active">Products</a>
      <a href="history">History</a>
      <a href="borrowing">Borrowing</a>
      <a href="return">Return</a>
      <a href="profile">Profile</a>
      <a href="settings">Settings</a>
      <a href="logout">Log Out</a>
    </div>
    <div class="main-content">
      <h1>All Products</h1>
<input type="text" id="searchInput" placeholder="Search instruments..." style="
  width: 100%;
  max-width: 400px;
  padding: 10px 15px;
  margin-bottom: 20px;
  border: 2px solid #f38c35;
  border-radius: 20px;
  font-size: 14px;
  outline: none;
">
<div class="product-grid">
  @foreach($instruments as $instrument)
<div class="product-card" onclick="location.href='{{ route('products.show', $instrument->id) }}'">
  <img src="{{ asset('storage/' . $instrument->image_path) }}" alt="{{ $instrument->name }}" />
  <div class="gradient-overlay"></div>
  <div class="info">
    <h3>{{ $instrument->name }}</h3>
    <p>${{ $instrument->price }}/day</p>
  </div>
</div>
@endforeach

</div>
<script>
    const searchInput = document.getElementById("searchInput");
    const cards = document.querySelectorAll(".product-card");

    searchInput.addEventListener("input", function () {
      const query = this.value.toLowerCase();

      cards.forEach(card => {
        const name = card.querySelector("h3").textContent.toLowerCase();
        const category = card.querySelectorAll("p")[0].textContent.toLowerCase(); // ambil kategori
        const matches = name.includes(query) || category.includes(query);
        card.style.display = matches ? "block" : "none";
      });
    });
  </script>
</body>
</html>