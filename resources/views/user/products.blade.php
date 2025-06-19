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
      background: #fffaf0;
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
      background: white;
      border: 1px solid #ddd;
      border-radius: 10px;
      overflow: hidden;
      width: 200px;
      margin-bottom: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .product-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }
    .product-card .info {
      padding: 10px;
    }
    .product-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
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
        <div class="product-card">
          <img src="guitar.jpg" alt="Guitar" />
          <div class="info">
            <h3>Guitar</h3>
            <p>$15/day</p>
          </div>
        </div>
        <div class="product-card">
          <img src="violin.jpg" alt="Violin" />
          <div class="info">
            <h3>Violin</h3>
            <p>$100/day</p>
          </div>
</div>
<div class="product-card">
  <img src="piano.jpg" alt="Piano" />
  <div class="info">
    <h3>Piano</h3>
    <p>$120/day</p>
  </div>
</div>
<div class="product-card">
  <img src="drum.jpg" alt="Drum Set" />
  <div class="info">
    <h3>Drum Set</h3>
    <p>$25/day</p>
  </div>
</div>
<div class="product-card">
  <img src="flute.jpg" alt="Flute" />
  <div class="info">
    <h3>Flute</h3>
    <p>$10/day</p>
  </div>
</div>
<div class="product-card">
  <img src="saxophone.jpg" alt="Saxophone" />
  <div class="info">
    <h3>Saxophone</h3>
    <p>$75/day</p>
  </div>
</div>
<div class="product-card">
  <img src="keyboard.jpg" alt="Keyboard" />
  <div class="info">
    <h3>Keyboard</h3>
    <p>$20/day</p>
  </div>
</div>
<div class="product-card">
  <img src="harp.jpg" alt="Harp" />
  <div class="info">
    <h3>Harp</h3>
    <p>$150/day</p>
  </div>
</div>
<div class="product-card">
  <img src="gamelan.jpg" alt="Gamelan" />
  <div class="info">
    <h3>Gamelan</h3>
    <p>$35/day</p>
  </div>
</div>
<div class="product-card">
  <img src="angklung.jpg" alt="Angklung" />
  <div class="info">
    <h3>Angklung</h3>
    <p>$8/day</p>
  </div>
</div>
<div class="product-card">
  <img src="trumpet.jpg" alt="Trumpet" />
  <div class="info">
    <h3>Trumpet</h3>
    <p>$18/day</p>
  </div>
</div>
<div class="product-card">
  <img src="cello.jpg" alt="Cello" />
  <div class="info">
    <h3>Cello</h3>
    <p>$90/day</p>
  </div>
</div>
<div class="product-card">
  <img src="clarinet.jpg" alt="Clarinet" />
  <div class="info">
    <h3>Clarinet</h3>
    <p>$22/day</p>
  </div>
</div>
<div class="product-card">
  <img src="tambourine.jpg" alt="Tambourine" />
  <div class="info">
    <h3>Tambourine</h3>
    <p>$5/day</p>
  </div>
</div>
    </div>
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