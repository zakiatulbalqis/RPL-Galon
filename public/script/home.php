<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Simpan data pesanan atau kirim melalui email
    echo "Terima kasih, $name. Pesanan Anda akan segera diproses!";
}
?>