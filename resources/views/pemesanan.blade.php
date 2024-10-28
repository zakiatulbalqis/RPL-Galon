<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/pemesanan.css">
    <title>AQUANTER Pemesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #559fd7;
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
            padding: 50px;
            background-color: #a9a9a9;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .product {
            display: grid;
            grid-template-columns: repeat(4, 1fr); 
            gap: 10px; 
            justify-items: center;
            margin-bottom: 20px; /* Space between product rows */
        }

        .product.single {
            grid-template-columns: 1fr; /* Center for single item */
            justify-items: center; /* Center the single item */
        }

        .item {
            text-align: center;
            padding: 5px;
            font-size: small;
        }

        .item img {
            max-width: 40px; /* Adjusted max size for smaller images */
            max-height: 40px; 
            width: auto; 
            height: auto; 
        }

        .item p {
            margin: 5px 0;
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
    </style>
</head>
<body>
    <div class="header">
        <h1>AQUANTER</h1>
    </div>
    <div class="container">
        <h2>Galon yang Tersedia</h2>

        <!-- Row 1: 4 Products -->
        <div class="product">
            <div class="item">
                <p>LE MINERALE (15 L)</p>
                <img src="img/le_minerale.png" alt="Mineral">
                <p>Rp 5.000</p>
            </div>
            <div class="item">
                <p>CLEO (19 L)</p>
                <img src="img/Screenshot-2023-02-07-at-7.43.48-AM.png" alt="Cleo">
                <p>Rp 10.000</p>
            </div>
            <div class="item">
                <p>AQUA (19 L)</p>
                <img src="img/aqua.jpg" alt="AQUA">
                <p>Rp 9.000</p>
            </div>
            <div class="item">
                <p>Sumber Air (19 L)</p>
                <img src="img/aqua.jpg" alt="Sumber Air">
                <p>Rp 8.000</p>
            </div>
        </div>

        <!-- Row 2: 1 Product -->
        <div class="product single">
            <div class="item">
                <p>AQUA (15 L)</p>
                <img src="img/aqua.jpg" alt="Alami">
                <p>Rp 6.000</p>
            </div>
        </div>

        <!-- Row 3: 3 Products -->
        <div class="product">
            <div class="item">
                <p>Vitamin Water (19 L)</p>
                <img src="img/aqua.jpg" alt="Vitamin Water">
                <p>Rp 11.000</p>
            </div>
            <div class="item">
                <p>Smart Water (19 L)</p>
                <img src="img/aqua.jpg" alt="Smart Water">
                <p>Rp 12.000</p>
            </div>
            <div class="item">
                <p>Flavored Water (19 L)</p>
                <img src="img/aqua.jpg" alt="Flavored Water">
                <p>Rp 10.500</p>
            </div>
        </div>

        <button><a href="/admin/pesans" style="color: white; text-decoration: none;">Pesan</a></button>
    </div>
    <script src="script/pemesanan.js"></script>
</body>
</html>
