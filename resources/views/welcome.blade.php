<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }
        p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }
        a.button {
            background-color: #ff6f61;
            padding: 1rem 2rem;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        a.button:hover {
            background-color: #ff4b3a;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Website Saya!</h1>
    <p>Ini adalah landing page sederhana menggunakan Laravel. Cocok untuk memulai projectmu dengan cepat dan mudah.</p>
    <a href="#" class="button">Mulai Sekarang</a>
</body>
</html>
