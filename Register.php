<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - ReadWisee</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset and Base Styles */
        a,
        button,
        input,
        select,
        h1,
        h2,
        h3,
        h4,
        h5,
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            border: none;
            text-decoration: none;
            background: none;
            -webkit-font-smoothing: antialiased;
        }

        menu,
        ol,
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        /* Main Container */
        .frame-sign-in {
            background: #65cbaf;
            height: 1024px;
            position: relative;
            overflow: hidden;
        }

        .frame-sign-in * {
            box-sizing: border-box;
        }

        /* Form Title - Fixed Positioning */
        .frame-32 {
            position: absolute;
            left: 736px;
            /* Match rectangle-9 left position */
            top: 150px;
            width: 620px;
            /* Match rectangle-9 width */
            display: flex;
            justify-content: center;
        }

        .sign-in-title {
            color: #000000;
            text-align: center;
            font-family: "Inter-Bold", sans-serif;
            font-size: 40px;
            font-weight: 700;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 70px;
            width: 100%;
        }

        /* Header Text */
        .daftar {
            color: #ffffff;
            text-align: left;
            font-family: "Inter-Bold", sans-serif;
            font-size: 64px;
            font-weight: 700;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 85px;
        }

        /* Back Arrow */
        .mingcute-arrow-left-line {
            width: 96px;
            height: 96px;
            position: absolute;
            left: 29px;
            top: 19px;
            aspect-ratio: 1;
        }

        .group {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: visible;
        }

        /* White Form Container - Made taller to accommodate new field */
        .rectangle-9 {
            background: #ffffff;
            width: 620px;
            height: 800px;
            /* Increased from 742px */
            position: absolute;
            left: 736px;
            top: calc(50% - 330px);
            /* Adjusted for new height */
            box-shadow: 6px 6px 6px 1px rgba(0, 0, 0, 0.25);
        }

        /* Register Button - Moved down */
        .frame-26 {
            background: #4f93c3;
            border-radius: 20px;
            padding: 10px;
            display: flex;
            flex-direction: row;
            gap: 10px;
            align-items: center;
            justify-content: center;
            width: 370px;
            position: absolute;
            left: 855px;
            top: 870px;
            /* Moved down from 791px */
            cursor: pointer;
        }

        .daftar2 {
            color: #f4fcf9;
            text-align: left;
            font-family: "Inter-Bold", sans-serif;
            font-size: 24px;
            font-weight: 700;
        }

        /* Form Fields Container - Adjusted spacing */
        .frame-40 {
            display: flex;
            flex-direction: column;
            gap: 25px;
            /* Reduced from 30px */
            align-items: flex-start;
            justify-content: flex-start;
            width: 404px;
            position: absolute;
            left: 844px;
            top: 280px;
            /* Moved up slightly */
        }

        /* Form Field Styles */
        .frame-33,
        .frame-34,
        .frame-35,
        .frame-36,
        .frame-37,
        .frame-38 {
            background: #edebeb;
            border-radius: 15px;
            padding: 10px;
            display: flex;
            flex-direction: row;
            gap: 10px;
            align-items: center;
            justify-content: flex-start;
            align-self: stretch;
            flex-shrink: 0;
            height: 53px;
            width: 100%;
        }

        /* Input Fields */
        .nama-lengkap,
        .tempat-tinggal,
        .tanggal-lahir,
        .alamat-email,
        .password {
            width: 100%;
            color: rgba(0, 0, 0, 0.25);
            font-family: "Inter-Regular", sans-serif;
            font-size: 15px;
            font-weight: 400;
            background: transparent;
            outline: none;
        }

        /* Status Dropdown */
        .status-select {
            width: 100%;
            color: rgba(0, 0, 0, 0.25);
            font-family: "Inter-Regular", sans-serif;
            font-size: 15px;
            font-weight: 400;
            background: transparent;
            border: none;
            outline: none;
        }

        .status-select option {
            color: #000000;
        }

        /* Login Link - Moved down and right */
        .log-in {
            color: #65cbaf;
            text-align: left;
            font-family: "Inter-Regular", sans-serif;
            font-size: 15px;
            font-weight: 400;
            position: absolute;
            left: 1050px;
            /* Moved left */
            top: 820px;
            /* Moved down */
            cursor: pointer;
        }

        /* Logo Section */
        .ellipse-6 {
            background: #ffffff;
            border-radius: 50%;
            width: 323px;
            height: 323px;
            position: absolute;
            left: 202px;
            top: 351px;
        }

        .kura-1 {
            width: 280px;
            height: 280px;
            position: absolute;
            left: 217px;
            top: 357px;
            object-fit: cover;
            aspect-ratio: 1;
        }

        .read-wisee {
            color: #287376;
            text-align: left;
            font-family: "Itim-Regular", sans-serif;
            font-size: 30px;
            font-weight: 400;
            position: absolute;
            left: 297px;
            top: 577px;
        }

        .back-btn {
            position: absolute;
            top: 32px;
            left: 32px;
            background: none;
            border: none;
            font-size: 32px;
            color: #fff;
            cursor: pointer;
            z-index: 10;
        }

        @media (max-width: 900px) {
            .main-flex { flex-direction: column; }
            .header-title { position: static; margin: 32px 0 0 0; }
            .left-section, .right-section { width: 100%; }
        }
        @media (max-width: 600px) {
            .main-flex { flex-direction: column; }
            .header-title { font-size: 30px; margin-top: 24px; }
            .form-card { padding: 18px 4vw 18px 4vw; min-width: 96vw; max-width: 99vw; border-radius: 18px; }
            .logo-circle { width: 90px; height: 90px; }
            .logo-circle img { width: 60px; height: 60px; }
            .brand-name { font-size: 18px; }
            .form-card h2 { font-size: 20px; }
            .form-group label, .form-control { font-size: 14px; }
            .register-button { font-size: 15px; padding: 10px; }
        }
    </style>
</head>

<body>
    <button class="back-btn" onclick="window.location.href='index.php'" title="Kembali">&#8592;</button>
    <div class="frame-sign-in">
        <!-- Background form -->
        <div class="rectangle-9"></div>
        <!-- Form title -->
        <div class="frame-32">
            <div class="sign-in-title">Register</div>
        </div>

        <!-- Form starts here -->
        <form action="proses_register.php" method="post">
            <!-- Input Fields -->
            <div class="frame-40">
                <div class="frame-33">
                    <input type="text" name="nama" class="nama-lengkap" placeholder="Nama Lengkap" required />
                </div>
                <div class="frame-34">
                    <input type="text" name="alamat" class="tempat-tinggal" placeholder="Tempat tinggal" required />
                </div>
                <div class="frame-35">
                    <input type="date" name="tanggal_lahir" class="tanggal-lahir" required />
                </div>
                <div class="frame-36">
                    <input type="email" name="email" class="alamat-email" placeholder="Alamat email" required />
                </div>
                <div class="frame-38">
                    <input type="password" name="password" class="password" placeholder="Password" required />
                </div>
                <div class="frame-37">
                    <select name="status" class="status-select" required>
                        <option value="" disabled selected>Status</option>
                        <option value="guru">Guru</option>
                        <option value="murid">Murid</option>
                    </select>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="frame-26">
                <div class="daftar2">Daftar</div>
            </button>
        </form>

        <!-- Login link - moved to avoid overlap -->
        <a href="login.php" class="log-in">Sudah punya akun? Log In</a>

        <!-- Logo elements -->
        <div class="ellipse-6"></div>
        <img class="kura-1" src="img/kura-kura.png" alt="ReadWisee logo" />
        <div class="read-wisee">ReadWisee</div>
    </div>
</body>

</html>