<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>Galon Shop</title>
    
</head>
<body>
    <header>
        <div class="nav-bar">
            <a href="/" class="logo">AQUANTER</a>
        </div>
    </header>

    <main>
        <div class="login-container">
            <h1>Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit">Sign In</button>
            </form>
        </div>
    </main>
</body>
</html>
