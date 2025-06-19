<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | PuspaNada</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #fdfaf5;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 220px;
            height: 100vh;
            background-color: #db804a;
            padding: 20px 10px;
            color: white;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .sidebar h1 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .menu-item {
            padding: 10px;
            border-radius: 10px 0 0 10px;
            background-color: #f08845;
            font-weight: bold;
            cursor: pointer;
        }

        .menu-item:hover {
            background-color: #e37728;
        }

        .main {
            margin-left: 230px;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-bar {
            width: 100%;
            max-width: 600px;
            padding: 10px;
            border: 2px solid #f08845;
            border-radius: 20px;
            outline: none;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 20px;
        }

        .product-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
        }

        .product-card img {
            width: 100%;
            height: 120px;
            object-fit: cover;
        }

        .product-card h3 {
            margin: 10px 0 5px;
            font-size: 1rem;
            color: #333;
        }

        .product-card p {
            margin-bottom: 10px;
            font-size: 0.85rem;
            color: #888;
        }

        .user-panel {
            background-color: #fff7e5;
            padding: 10px 20px;
            border-radius: 15px;
            display: inline-block;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h1>PuspaNada</h1>
        <div class="menu-item">Home</div>
        <div class="menu-item">Products</div>
        <div class="menu-item">Payout</div>
        <div class="menu-item">Profile</div>
        <div class="menu-item">Settings</div>
        <div class="menu-item">Log Out</div>
        <div style="margin-top: auto; font-size: 0.85rem;">Help</div>
    </div>

    <div class="main">
        <div class="header">
            <div>
                <h2>Welcome Back, Ambatu!</h2>
                <strong>Exclusive Offers Await!</strong>
            </div>
            <div class="user-panel">
                Ambatu • $20,0000 • VIP Member
            </div>
        </div>

        <input type="text" class="search-bar" placeholder="Search instruments...">

        <div class="products-grid">
            <div class="product-card">
                <img src="https://via.placeholder.com/180x120?text=Gamelan" alt="Gamelan">
                <h3>Gamelan</h3>
                <p>Ensemble Instrument</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/180x120?text=Tambourine" alt="Tambourine">
                <h3>Tambourine</h3>
                <p>Percussion Instrument</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/180x120?text=Harp" alt="Harp">
                <h3>Harp</h3>
                <p>String Instrument</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/180x120?text=Guitar" alt="Guitar">
                <h3>Guitar</h3>
                <p>String Instrument</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/180x120?text=Violin" alt="Violin">
                <h3>Violin</h3>
                <p>String Instrument</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/180x120?text=Trumpet" alt="Trumpet">
                <h3>Trumpet</h3>
                <p>Wind Instrument</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/180x120?text=Drum" alt="Drum">
                <h3>Drum</h3>
                <p>Percussion Instrument</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/180x120?text=Angklung" alt="Angklung">
                <h3>Angklung</h3>
                <p>Idiophone Instrument</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/180x120?text=Piano" alt="Piano">
                <h3>Piano</h3>
                <p>Percussion Instrument</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/180x120?text=Drum+Set" alt="Drum Set">
                <h3>Drum Set</h3>
                <p>Percussion Instrument</p>
            </div>
        </div>
    </div>
</body>

</html>