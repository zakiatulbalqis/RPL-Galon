<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $phone = htmlspecialchars($_POST['phone']);
    $mineral_qty = (int) $_POST['mineral_qty'];
    $ro_qty = (int) $_POST['ro_qty'];
    $hexa_qty = (int) $_POST['hexa_qty'];

    $total_price = ($mineral_qty * 5000) + ($ro_qty * 10000) + ($hexa_qty * 12000);

    echo "<h1>Terima kasih, $name!</h1>";
    echo "<p>Alamat: $address</p>";
    echo "<p>No. Hp: $phone</p>";
    echo "<h2>Rincian Pesanan:</h2>";
    echo "<ul>";
    if ($mineral_qty > 0) echo "<li>Mineral x $mineral_qty = Rp " . ($mineral_qty * 5000) . "</li>";
    if ($ro_qty > 0) echo "<li>RO x $ro_qty = Rp " . ($ro_qty * 10000) . "</li>";
    if ($hexa_qty > 0) echo "<li>Hexa x $hexa_qty = Rp " . ($hexa_qty * 12000) . "</li>";
    echo "</ul>";
    echo "<h2>Total: Rp $total_price</h2>";
}
?>