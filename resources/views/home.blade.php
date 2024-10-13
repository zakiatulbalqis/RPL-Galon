<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUANTER</title>

</head>
<<<<<<< HEAD
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-image: url('img/image.png');
    background-size: cover; /* Agar gambar menutupi seluruh layar */
    background-position: center; /* Pusatkan gambar */
    background-repeat: no-repeat; /* Jangan ulang gambar */
}

/* Navbar Styling */
.nav-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #5DAEFE;
    padding: 10px 20px;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    color: black;
    text-decoration: none;
}

.nav-bar a {
    text-decoration: none;
    color: black;
    font-size: 18px;
}

/* Hero Section */
.hero {
   
    background-size: cover;
    background-position: center;
    height: 80vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: rgb(7, 4, 4);
}

.hero h1 {
    font-size: 48px;
    font-weight: bold;
    margin-bottom: 10px;
}

.hero p {
    font-size: 20px;
    margin: 5px 0;
}

.order-btn {
    background-color: white;
    color: black;
    padding: 10px 20px;
    margin-top: 20px;
    text-decoration: none;
    font-size: 18px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.order-btn:hover {
    background-color: #5dc8ec;
    color: white;
}

/* Footer */
footer {
    background-color: #f0f0f0;
    text-align: center;
    padding: 20px;
}

footer a {
    color: black;
    text-decoration: none;
    font-size: 18px;
}
</style>

=======
>>>>>>> d170d155ca7ab63615a9c11b487abea1ec414935

<body>
    <header>
        <div class="nav-bar">
            <a href="/" class="logo">AQUANTER</a>
            <nav>
                <a href="/">Login</a>
            </nav>
        </div>
    </header>


    <main>
    <section class="hero">
        <div class="overlay-panel">
            <h1>Selamat Datang di <br> AQUANTER!</h1>
            <p>Penjualan galon siap antar</p>
            <p>Pemesanan: 07:00-22:00 wib</p>
            <a href="/pemesanan" class="order-btn">Pesan Galon</a>
        </section>
    </main>
    <script href = "script/home.php"></script>
</body>
</html>