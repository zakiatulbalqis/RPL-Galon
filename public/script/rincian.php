<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Contoh data pesanan
    $nama = "nama";
    $alamat = "alamat";
    $jumlah = 2;
    $harga = 5000;
    $total = $jumlah * $harga;

    echo "<h2>Rincian Pemesanan</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>Jumlah: $jumlah</p>";
    echo "<p>Total Harga: Rp.$total</p>";
}
?>