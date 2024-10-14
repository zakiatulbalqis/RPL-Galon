<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/pemesanan.css">
    <title>AQUANTER Pemesanan</title>
    
</head>
<body>
    <div class="header">
        <h1>AQUANTER</h1>
    </div>

    <div class="container">
        <h2>Pemesanan</h2>

        <div class="product">
            <div class="item">
                <p>LE MINERALE</p>
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

        <form action="{{ route('order.submit') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" id="address" name="address" placeholder="Alamat" required>
            </div>
            <div class="form-group">
                <label for="phone">No. Hp</label>
                <input type="text" id="phone" name="phone" placeholder="No. Hp" required>
            </div>

            <!-- Add any other necessary fields here -->

            <button type="submit">Pesan</button>
        </form>
    </div>
    <script src="script/pemesanan.js"></script>
</body>
</html>
