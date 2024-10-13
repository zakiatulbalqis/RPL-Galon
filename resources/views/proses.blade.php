<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUANTER - Pesanan Diproses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #6eb5ff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
            color: #fff;
        }

        .cart-icon img {
            width: 30px;
            height: 30px;
        }

        .container {
            width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: #e0e0e0;
            text-align: center;
            border-radius: 8px;
        }

        h2 {
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #fff;
            border: none;
            color: #333;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>AQUANTER</h1>
        <div class="cart-icon">
            <a href="/rincian"><img src="img/Screenshot_2024-10-05_222712-removebg-preview (1).png" alt="Cart" /></a>
        </div>
    </div>

    <div class="container">
        <h2>Pesanan anda sedang diproses</h2>
        <button onclick="window.location.href='accepted.html'">Diterima</button>
        <script src="script/proses.php"></script>
    </div>
</body>
</html>
