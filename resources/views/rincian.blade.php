<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUANTER - Rincian Pemesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>AQUANTER</h1>
        <a href="#" class="home-icon">🏠</a>
    </div>

    <div class="order-details">
        <h2>Rincian Pemesanan</h2>

        <div class="address">
            <div class="address-info">
                <span class="address-icon">📍</span>
                <span class="name">nama</span><br>
                <span class="phone">+62</span><br>
                <span class="alamat">alamat</span>
            </div>
            <button class="ubah-btn">ubah</button>
        </div>

        <div class="order-item">
            <div class="shop-info">
                <span class="shop-name">Aquanter_shop</span>
            </div>
            <div class="item-info">
                <img src="mineral.jpg" alt="Mineral" class="item-image">
                <div class="item-details">
                    <span class="item-name">Mineral</span><br>
                    <span class="item-quantity">Jumlah: 2</span><br>
                    <span class="item-price">Rp.5.000</span>
                </div>
            </div>
        </div>

        <div class="total">
            <span>Total Pesanan: Rp.10.000</span>
        </div>

        <button class="cancel-btn">Batalkan Pesanan</button>
    </div>

    <script src="script.js"></script>
</body>
</html>