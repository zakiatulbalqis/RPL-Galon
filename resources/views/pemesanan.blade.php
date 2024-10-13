<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUANTER Pemesanan</title>
    <link rel="stylesheet" href="style/pemesanan.css">
</head>
<body>
    <div class="header">
        <h1>AQUANTER</h1>
    </div>

    <div class="container">
        <h2>pemesanan</h2>

        <div class="product">
            <div class="item">
                <p>LE MINERALEE</p>
                <img src="img/le_minerale.png" alt="Mineral">
                <p>Rp 5.000</p>
                <button onclick="updateCount('mineral', -1)">-</button>
                <input type="number" id="mineral" value="0" min="0">
                <button onclick="updateCount('mineral', 1)">+</button>
            </div>
            <div class="item">
                <p>RO</p>
                <img src="img/WhatsApp Image 2024-10-05 at 15.39.54 copy.jpeg" alt="RO">
                <p>Rp 10.000</p>
                <button onclick="updateCount('ro', -1)">-</button>
                <input type="number" id="ro" value="0" min="0">
                <button onclick="updateCount('ro', 1)">+</button>
            </div>
            <div class="item">
                <p>HEXA</p>
                <img src="img/WhatsApp Image 2024-10-05 at 15.39.54 copy.jpeg" alt="Hexa">
                <p>Rp 12.000</p>
                <button onclick="updateCount('hexa', -1)">-</button>
                <input type="number" id="hexa" value="0" min="0">
                <button onclick="updateCount('hexa', 1)">+</button>
            </div>
        </div>

        <form action="order.php" method="post">
            <input type="hidden" name="mineral_qty" id="mineral_qty">
            <input type="hidden" name="ro_qty" id="ro_qty">
            <input type="hidden" name="hexa_qty" id="hexa_qty">

            <input type="text" name="name" placeholder="Nama" required>
            <input type="text" name="address" placeholder="Alamat" required>
            <input type="text" name="phone" placeholder="No. Hp" required>

            <button type="submit">pesan</button>
        </form>
    </div>
    <script src = "script/pemesanan.php"></script>
</body>
</html>