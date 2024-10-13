<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galon Shop</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-image: url('img/whatsapp-image-2024-10-13-at-22.40.23.jpg'); /* Simplified path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
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

        /* Login Section */
        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            width: 300px;
            padding: 20px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .login-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }
    </style>
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
