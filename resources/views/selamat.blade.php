<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        /* Mengatur margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Mengatur gaya untuk body */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        /* Gaya untuk container utama */
        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Heading utama dengan efek animasi */
        h1 {
            font-size: 3em;
            text-transform: uppercase;
            letter-spacing: 5px;
            margin-bottom: 20px;
            animation: slideInDown 1s ease-in-out;
        }

        /* Gaya untuk tombol dengan hover efek */
        .btn {
            padding: 15px 30px;
            background-color: #fff;
            color: #ff7e5f;
            border: none;
            border-radius: 50px;
            font-size: 1.2em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.4s ease-in-out;
            box-shadow: 0 6px 20px rgba(255, 255, 255, 0.2);
        }

        .btn:hover {
            background-color: #feb47b;
            color: #fff;
            transform: scale(1.1);
            box-shadow: 0 12px 24px rgba(255, 255, 255, 0.3);
        }

        /* Animasi untuk fade in */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        /* Animasi untuk heading yang slide dari atas */
        @keyframes slideInDown {
            0% {
                transform: translateY(-100px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        /* Animasi background warna berputar */
        @keyframes bgChange {
            0% {
                background: linear-gradient(135deg, #ff7e5f, #feb47b);
            }
            50% {
                background: linear-gradient(135deg, #43cea2, #185a9d);
            }
            100% {
                background: linear-gradient(135deg, #ff7e5f, #feb47b);
            }
        }

        body {
            animation: bgChange 10s infinite alternate;
        }
    </style>
<body>
    <div class="container">
        <h1>Selamat Datang!</h1>
        <p>Halaman modern dengan animasi keren</p>
        <button class="btn">Jelajahi Sekarang</button>
    </div>
</body>
</html>