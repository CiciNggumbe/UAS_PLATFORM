<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PuspaNada Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #fde3c4;
      color: #333;
    }.container {
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

    /* MAIN CONTENT */
    .main-content {
      flex: 1;
      padding: 20px;
      display: flex;
      flex-direction: column;
    }

    /* NAVBAR + WELCOME */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }

    .welcome-text h1 {
      font-size: 20px;
      color: #333;
    }

    .navbar-right {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .icon-button {
      width: 40px;
      height: 40px;
      background-color: #d5621c;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      position: relative;
    }

    .icon-button svg {
      width: 20px;
      height: 20px;
      fill: white;
    }

    .notification {
      position: absolute;
      top: 4px;
      right: 4px;
      background: red;
      color: white;
      font-size: 10px;
      padding: 2px 6px;
      border-radius: 50%;
    }

    .profile {
      display: flex;
      align-items: center;
      background-color: #d5621c;
      padding: 5px 10px;
      border-radius: 20px;
      color: white;
    }

    .profile img {
      width: 35px;
      height: 35px;
      border-radius: 50%;
      margin-right: 10px;
    }

    .profile-info {
      display: flex;
      flex-direction: column;
      font-size: 13px;
    }

    .profile-name {
      font-weight: bold;
      font-size: 14px;
    }

    .dropdown-icon {
      margin-left: 8px;
      font-size: 10px;
    }

    .content {
      flex: 1;
    }
.profile-container {
  position: relative;
}

.profile-dropdown {
  display: none;
  position: absolute;
  top: 100%;
  right: 0;
  background: white;
  color: #333;
  border: 1px solid #ccc;
  border-radius: 10px;
  width: 150px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  z-index: 10;
}

.profile-dropdown a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #333;
  border-bottom: 1px solid #eee;
}

.profile-dropdown a:last-child {
  border-bottom: none;
}

.profile-dropdown a:hover {
  background: #f0f0f0;
}
    .promo-section {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 30px;
      margin-top: 30px;
    }
    .left-column {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 30px;

    }
    .promo-left {
      background: #e67e22;
      color: white;
      padding: 20px;
      border-radius: 15px;
      text-align: left;
      position: relative;
    }
    .promo-left img {
      position: absolute;
      right: 10px;
      bottom: 10px;
      height: 80px;
      opacity: 0.3;
    }
    .promo-left h2 {
      margin: 0;
      font-size: 18px;
    }
    .promo-left p {
      font-size: 12px;
    }
    .promo-left button {
      margin-top: 10px;
      padding: 8px 20px;
      background: white;
      color: #e67e22;
      border: 1px solid white;
      border-radius: 20px;
      cursor: pointer;
      font-weight: bold;
    }
    .promo-right {
      flex: 1.5;
      border-radius: 15px;
      padding: 20px;
background: linear-gradient(to bottom right, #f3e5ab, #ffb347);
  background-image: url('music-notes.png');
  background-size: cover;
  background-blend-mode: soft-light;

    }
    .recommend-tabs {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
    }
    .recommend-tabs button {
      background: none;
      border: none;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      color: #000;
      padding: 5px 10px;
      border-radius: 20px;
      transition: background-color 0.3s ease;
    }
    .recommend-tabs button.active {
      background-color: #d35400;
      color: white;
    }
    .product-grid {
	padding: 20px;
	background: linear-gradient(to right, #e67e22, #f39c12);
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
    .product-card {
      position: relative;
      width: 150px;
      height: 280px;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .product-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
      display: block;
    }
.product-card .gradient-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 40%;
      background: linear-gradient(to top, rgba(243, 156, 18, 0.9), rgba(243, 156, 18, 0));
    }
    .product-card .price {
      position: absolute;
      top: 10px;
      left: 10px;
      background: black;
      color: white;
      padding: 3px 7px;
      border-radius: 5px;
      font-size: 12px;
      font-weight: bold;
    }
.product-card .info {
      position: absolute;
      bottom: 15px;
      left: 0;
      width: 100%;
      color: white;
      text-align: center;
      z-index: 2;
    }
    .product-card .info h4 {
      margin: 0;
      font-size: 16px;
      font-weight: bold;
    }
    .product-card .info p {
      margin: 4px 0 0 0;
      font-size: 12px;
    }
.product-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0,0,0,0.2);
}

    .latest-orders {
      background: linear-gradient(to right, #e95d0f, #f2994a);
      color: white;
      border-radius: 15px;
      padding: 20px;
      height: fit-content;
    }
    .latest-orders table {
      width: 100%;
      margin-top: 15px;
      font-size: 13px;
      border-collapse: collapse;
    }
    .latest-orders td {
      padding: 10px 5px;
      vertical-align: middle;
    }
    .latest-orders img {
      width: 40px;
      border-radius: 5px;
    }
    .tab-btn {
      background: transparent;
      border: none;
      color: white;
      padding: 5px 10px;
      margin-left: 5px;
      border-radius: 10px;
      font-weight: bold;
      cursor: pointer;
    }
    .tab-btn.active {
      background-color: #d35400;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <h2>PuspaNada<br>Online Instrument<br>Rental Service</h2>
      <a href="/dashboard" class="active">Home</a>
      <a href="/products">Products</a>
      <a href="/payout">Payout</a>
      <a href="/profile">Profile</a>
      <a href="/settings">Settings</a>
      <a href="/logout">Log Out</a>
    </div>
    <div class="main-content">
<div class="navbar">
  <div class="welcome-text">
    <h1>Welcome Back, Ambatu! 👋</h1>
  </div>
  <div class="navbar-right">
    <div class="profile-container">
  <a href="/profile" style="text-decoration: none;">
    <div class="profile" style="cursor:pointer;">
      <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="User" />
      <div class="profile-info">
        <span class="profile-name">Ambatu</span>
        <small>$ 20,000 | VIP</small>
      </div>
      <span class="dropdown-icon">▼</span>
    </div>
  </a>
</div>
<div class="icon-button" id="notif-btn">
  <svg viewBox="0 0 24 24">
    <path d="M12 2a6 6 0 00-6 6v3.5L4.3 14a1 1 0 00.7 1.7h14a1 1 0 00.7-1.7L18 11.5V8a6 6 0 00-6-6zm0 20a2 2 0 002-2h-4a2 2 0 002 2z"/>
  </svg>
  <span class="notification">1</span>
</div>
    <div class="notification-dropdown" id="notif-dropdown" style="display: none; position: absolute; top: 70px; right: 100px; background: white; color: #333; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 200px; z-index: 999;">
  <div style="padding: 10px; border-bottom: 1px solid #eee;">🎷 New promo: 20% off on Saxophone</div>
  <div style="padding: 10px; border-bottom: 1px solid #eee;">🎵 Your order has been shipped</div>
  <div style="padding: 10px;">🎻 New instrument added: Cello</div>
</div>

<div class="icon-button" id="search-btn">
  <svg viewBox="0 0 24 24">
    <path d="M10 2a8 8 0 105.3 14.3l5.4 5.4 1.4-1.4-5.4-5.4A8 8 0 0010 2zm0 2a6 6 0 110 12A6 6 0 0110 4z"/>
  </svg>
</div>
    <div id="search-box" style="display:none; position:absolute; top:70px; right:50px; z-index:999;">
  <input type="text" placeholder="Search instruments..." style="padding: 8px 10px; border-radius: 8px; border: 1px solid #ccc; width: 200px;" />
</div>
  </div>
</div>

      <div class="promo-section">
        <div class="left-column">
          <div class="latest-orders">
            <div style="display: flex; justify-content: space-between; align-items: center;">
  <h3 style="color: white;">Latest Order</h3>
  <div>
    <a href="/history">
      <button class="tab-btn" style="background-color: white; color: #d35400;">See All</button>
    </a>
  </div>
</div>

            <table>
              <tr onclick="window.location.href='/history'" style="cursor: pointer;">
                <td><img src="keyboard.jpg" alt="Keyboard Piano"></td>
                <td><strong>Keyboard Piano</strong><br><span style="font-size: 11px;">Percussion Instrument</span></td>
                <td>$10/day<br><span style="font-size: 11px;">5 day</span></td>
                <td>Transfer<br><span style="font-size: 11px;">Credit Card</span></td>
                <td>Delivered<br><span style="font-size: 11px; color: #c8f7c5;">Successfully</span></td>
              </tr>
              <tr onclick="window.location.href='/history'" style="cursor: pointer;">
                <td><img src="flute.jpg" alt="Flute"></td>
                <td><strong>Flute</strong><br><span style="font-size: 11px;">Woodwind Instrument</span></td>
                <td>$5/day<br><span style="font-size: 11px;">2 day</span></td>
                <td>Transfer<br><span style="font-size: 11px;">Credit Card</span></td>
                <td>Delivered<br><span style="font-size: 11px; color: #c8f7c5;">Successfully</span></td>
              </tr>
              <tr onclick="window.location.href='/history'" style="cursor: pointer;">
                <td><img src="saxophone.jpg" alt="Saxophone"></td>
                <td><strong>Saxophone</strong><br><span style="font-size: 11px;">Woodwind Instrument</span></td>
                <td>$75/day<br><span style="font-size: 11px;">1 day</span></td>
                <td>Transfer<br><span style="font-size: 11px;">Credit Card</span></td>
                <td>Delivered<br><span style="font-size: 11px; color: #c8f7c5;">Successfully</span></td>
              </tr>
            </table>
          </div>
        </div>

        <div class="promo-right">
<div class="recommend-tabs">
  <button class="active" id="btn-recommend">Recommend</button>
  <button id="btn-foryou">For You</button>
  <button id="btn-hottrending">Hot Trending</button>
</div>
 <div class="product-grid" id="product-grid">
  </div>
</body>
<script>
  const notifBtn = document.getElementById("notif-btn");
const notifDropdown = document.getElementById("notif-dropdown");

notifBtn.addEventListener("click", function (e) {
  e.stopPropagation();
  notifDropdown.style.display = notifDropdown.style.display === "block" ? "none" : "block";
});

const searchBtn = document.getElementById("search-btn");
const searchBox = document.getElementById("search-box");

searchBtn.addEventListener("click", function (e) {
  e.stopPropagation();
  searchBox.style.display = searchBox.style.display === "block" ? "none" : "block";
});


  window.addEventListener("click", function () {
    notifDropdown.style.display = "none";
    searchBox.style.display = "none";
  });
</script>

<script>

  const toggle = document.getElementById("profile-toggle");
  const dropdown = document.getElementById("profile-dropdown");

  toggle.addEventListener("click", function () {
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
  });


  window.addEventListener("click", function (e) {
    if (!toggle.contains(e.target)) {
      dropdown.style.display = "none";
    }
  });
</script>
<script>
  const productGrid = document.getElementById("product-grid");
  const tabs = document.querySelectorAll(".recommend-tabs button");

  const products = {
    recommend: [
      { name: "Guitar", type: "String Instrument", price: "$15/day", img: "guitar.jpg" },
      { name: "Violin", type: "String Instrument", price: "$100/day", img: "violin.jpg" }
    ],
    foryou: [
      { name: "Flute", type: "Woodwind", price: "$5/day", img: "flute.jpg" },
      { name: "Keyboard", type: "Percussion", price: "$10/day", img: "keyboard.jpg" }
    ],
    hottrending: [
      { name: "Drum Set", type: "Percussion", price: "$20/day", img: "drum.jpg" },
      { name: "Saxophone", type: "Woodwind", price: "$75/day", img: "saxophone.jpg" }
    ]
  };

  function renderProducts(list) {
    productGrid.innerHTML = list.map(item => `
      <div class="product-card">
        <span class="price">${item.price}</span>
        <img src="${item.img}" alt="${item.name}" />
        <div class="gradient-overlay"></div>
        <div class="info">
          <h4>${item.name}</h4>
          <p>${item.type}</p>
        </div>
      </div>
    `).join('');
  }

  renderProducts(products.recommend);

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");

      const key = tab.id.replace("btn-", ""); // recommend, foryou, hottrending
      renderProducts(products[key]);
    });
  });
</script>
</html>