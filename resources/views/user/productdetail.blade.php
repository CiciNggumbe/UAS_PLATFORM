<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Product Detail - PuspaNada</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #fff3e0;
      /* orange soft */
      color: #333;
    }

    .detail-container {
      display: flex;
      padding: 20px;
      background: white;
      margin: 30px auto;
      width: 100%;
      max-width: 400px;
      border-radius: 10px;
      background: rgb(241, 194, 117);
    }

    .detail-image {
      flex: 1;
      text-align: center;
    }

    .detail-image img {
      width: 80%;
      max-width: 200px;
      height: auto;
      border-radius: 10px;
      object-fit: cover;
    }


    .detail-info {
      flex: 2;
      padding-left: 30px;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .detail-info h1 {
      font-size: 24px;
      margin-bottom: 0;
    }

    .detail-info p {
      font-size: 14px;
      line-height: 1.6;
      color: #555;
    }

    .badge {
      background: #f38c35;
      padding: 5px 10px;
      border-radius: 10px;
      color: white;
      font-size: 12px;
      display: inline-block;
    }

    .plan-options {
      display: flex;
      gap: 10px;
      margin: 10px 0;
    }

    .plan-options button {
      padding: 8px 16px;
      border: 1px solid #d35400;
      border-radius: 8px;
      background: white;
      cursor: pointer;
    }

    .plan-options .selected {
      background: #d35400;
      color: white;
      font-weight: bold;
    }

    .rent-button {
      background: #e95d0f;
      color: white;
      border: none;
      padding: 15px 25px;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      width: fit-content;
      margin-top: 10px;
    }
  </style>
</head>

<body>

  <div class="detail-container">
    <div class="detail-image">
      <!-- resources/views/products/detail.blade.php -->
      <img src="{{ asset('storage/' . $instrument->image_path) }}" alt="{{ $instrument->name }}">
      <h1>{{ $instrument->name }}</h1>
      <div class="badge">{{ $instrument->type }}</div>
      <p>{{ $instrument->description ?? 'No description available.' }}</p>
      <a href="{{ url('/borrowing') }}">
        <button class="rent-button">${{ $instrument->price }} · Rent Now</button>
      </a>
    </div>
  </div>

</body>

</html>