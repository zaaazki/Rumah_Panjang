<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadWisee</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #65CBAF;
            min-height: 100vh;
            display: flex;
            overflow-x: hidden;
        }

        .container {
            display: flex;
            width: 100%;
            min-height: 100vh;
        }

        .left-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .logo {
            width: 200px;
            height: 200px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 1rem;
            overflow: hidden;
            border: 3px solid #287376;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .app-name {
            color: #287376;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .right-section {
            flex: 1;
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            border-radius: 20px 0 0 20px;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
        }

        .welcome-title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
            color: #287376;
            line-height: 1.2;
        }

        .welcome-subtitle {
            font-size: 1.5rem;
            color: rgba(0, 0, 0, 0.7);
            text-align: center;
            margin-bottom: 3rem;
            line-height: 1.5;
            max-width: 600px;
        }

        .buttons {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: 20px;
            font-size: 1.5rem;
            font-weight: bold;
            cursor: pointer;
            border: none;
            box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.25);
            transition: all 0.3s ease;
            min-width: 200px;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: -8px 8px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-login {
            background-color: #65CBAF;
            color: white;
        }

        .btn-login:hover {
            background-color: #4ab79a;
        }

        .btn-register {
            background-color: white;
            color: #287376;
            border: 2px solid #287376;
        }

        .btn-register:hover {
            background-color: #f0f0f0;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .right-section {
                border-radius: 20px 20px 0 0;
                margin-top: 2rem;
            }

            .welcome-title {
                font-size: 2rem;
            }

            .welcome-subtitle {
                font-size: 1.2rem;
            }

            .btn {
                font-size: 1.2rem;
                padding: 0.8rem 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left-section">
            <div class="logo">
                <img src="img/kura-kura.png" alt="Logo ReadWisee" loading="eager">
            </div>
            <div class="app-name">ReadWisee</div>
        </div>

        <div class="right-section">
            <h1 class="welcome-title">
                Selamat Datang<br>
                Di Aplikasi Readwise
            </h1>

            <p class="welcome-subtitle">
                Memberikan Akses<br>
                Bahasa Isyarat Untuk Semua
            </p>

            <div class="buttons">
                <button class="btn btn-login" id="loginBtn">Masuk</button>
                <button class="btn btn-register" id="registerBtn">Daftar</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginBtn').addEventListener('click', function () {
            window.location.href = 'login.php';
        });

        document.getElementById('registerBtn').addEventListener('click', function () {
            window.location.href = 'register.php';
        });
    </script>
</body>

</html>