<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUANTER Pemesanan</title>
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
            text-align: left;
        }

        .header h1 {
            margin: 0;
            color: #fff;
        }

        .container {
            width: 500px;
            margin: 40px auto;
            padding: 20px;
            background-color: #e0e0e0;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .product {
            display: flex;
            justify-content: space-between;
        }

        .item {
            text-align: center;
            padding: 10px;
        }

        .item img {
            width: 60px;
            height: 60px;
        }

        .item p {
            margin: 10px 0;
        }

        button {
            margin: 5px;
            padding: 5px 10px;
            background-color: #6eb5ff;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #559fd7;
        }

        input[type="number"] {
            width: 40px;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        form input[type="text"] {
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 10px;
            border: none;
            border-radius: 4px;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>AQUANTER</h1>
    </div>

    <div class="container">
        <h2>Pemesanan</h2>

        <div class="product">
            <div class="item">
                <p>LE MINERALEE</p>
                <img src="img/le_minerale.png" alt="Mineral">
                <p>Rp 5.000</p><!-- HARGA -->
                <button onclick="updateCount('mineral', -1)">-</button>
                <input type="number" id="mineral" value="0" min="0">
                <button onclick="updateCount('mineral', 1)">+</button>
            </div>
            <div class="item">
                <p>AQUA</p>
                <img src="img/8477693_7db2dccb-4226-493e-85ef-949a5d73d81f_700_700.jpg" alt="AQUA">
                <p>Rp 10.000</p>
                <button onclick="updateCount('aqua', -1)">-</button>
                <input type="number" id="aqua" value="0" min="0">
                <button onclick="updateCount('aqua', 1)">+</button>
            </div>
            <div class="item">
                <p>CLEO</p>
                <img src="img/Screenshot-2023-02-07-at-7.43.48-AM.png" alt="Cleo">
                <p>Rp 12.000</p>
                <button onclick="updateCount('cleo', -1)">-</button>
                <input type="number" id="cleo" value="0" min="0">
                <button onclick="updateCount('cleo', 1)">+</button>
            </div>
        </div>

        <form action="order.php" method="post">
            <input type="hidden" name="mineral_qty" id="mineral_qty">
            <input type="hidden" name="ro_qty" id="ro_qty">
            <input type="hidden" name="hexa_qty" id="hexa_qty">

            <input type="text" name="name" placeholder="Nama" required>
            <input type="text" name="address" placeholder="Alamat" required>
            <input type="text" name="phone" placeholder="No. Hp" required>

            <button type="submit">Pesan</button>
        </form>
    </div>
    <script src="script/pemesanan.js"></script>
</body>
</html>
