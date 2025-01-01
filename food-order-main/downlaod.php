<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Our Restaurant App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #c2abf3, #b0e4b6);
            color: #333333;
            text-align: center;
        }

        header {
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0;
        }

        header p {
            font-size: 1rem;
            margin: 10px 0;
            max-width: 600px;
            line-height: 1.5;
        }

        .features {
            margin-top: 40px;
            max-width: 800px;
            text-align: left;
        }

        .features h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .features ul {
            list-style-type: none;
            padding: 0;
        }

        .features ul li {
            margin: 10px 0;
            display: flex;
            align-items: center;
        }

        .features ul li i {
            color: #ffdd57;
            margin-right: 10px;
            font-size: 1.5rem;
        }

        .download-buttons {
            margin-top: 30px;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .download-buttons a {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px 30px;
            text-decoration: none;
            color: #ffffff;
            background-color: #1c1c1c;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .download-buttons a:hover {
            background-color: #333333;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .download-buttons a i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #1c1c1c;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #333333;
        }

        footer {
            margin-top: 50px;
            font-size: 0.9rem;
            color: #666666;
        }

        footer a {
            color: #333333;
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            header p {
                font-size: 0.9rem;
            }

            .features h2 {
                font-size: 1.5rem;
            }

            .download-buttons a {
                padding: 12px 20px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 1.5rem;
            }

            header p {
                font-size: 0.8rem;
            }

            .features h2 {
                font-size: 1.2rem;
            }

            .features ul li i {
                font-size: 1.2rem;
            }

            .download-buttons a {
                padding: 10px 15px;
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Download Our Restaurant App</h1>
        <p>Discover delicious meals, make reservations, and order food with ease. Our app brings your favorite restaurant to your fingertips!</p>
    </header>

    <section class="features">
        <h2>Why Use Our App?</h2>
        <ul>
            <li><i>&#127859;</i> Browse our menu and explore a variety of dishes.</li>
            <li><i>&#128717;</i> Order food for delivery or pick-up with just a few taps.</li>
            <li><i>&#127869;</i> Reserve tables effortlessly for your next dine-in experience.</li>
            <li><i>&#127856;</i> Get exclusive deals and discounts available only on the app.</li>
            <li><i>&#128175;</i> Track your order in real-time and stay updated.</li>
        </ul>
    </section>

    <div class="download-buttons">
        <a href="cassandra.zip" id="download-ios" download>
            <i class="fas fa-database"></i> Download ZIP for Windows Cassandra
        </a>
        <a href="mongodb.zip" id="download-android" download>
            <i class="fas fa-file-download"></i> Download ZIP for Windows MongoDB
        </a>
    </div>

    <!-- Back Button -->
    <button class="back-button" onclick="history.back();">Back</button>

    <footer>
        <p>&copy; 2024 FoodRestaurantApp. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>
</body>
</html>