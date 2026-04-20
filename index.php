<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        header {
            background-color: #f4f4f4;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            width: 50px;
            height: 50px;
            background-color: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .center-content {
            text-align: center;
        }

        .center-content h1 {
            margin: 0;
            font-size: 24px;
        }

        .center-content p {
            margin: 5px 0 0 0;
            font-size: 14px;
            color: #666;
        }

        nav {
            background-color: #ff6600;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
        }

        nav li {
            display: inline;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        nav a:hover {
            background-color: #e55a00;
        }

        main {
            padding: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            background-color: #0066cc;
            color: white;
            padding: 10px;
            margin: 0;
            font-size: 18px;
        }

        .card-content {
            padding: 15px;
        }

        .card-content p {
            margin: 0;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .grid {
                grid-template-columns: 1fr;
            }

            header {
                flex-direction: column;
                text-align: center;
            }

            nav ul {
                flex-direction: column;
            }

            nav li {
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Logo</div>
        <div class="center-content">
            <h1>News Website</h1>
            <p>Your source for the latest news</p>
        </div>
        <div class="logo">Icon</div>
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Entertainment</a></li>
            <li><a href="#">Politics</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>

    <main>
        <div class="grid">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" alt="News Image">
                <h3 class="card-title">Player of the Week on 23</h3>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x200" alt="News Image">
                <h3 class="card-title">Player of the Week on 23</h3>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x200" alt="News Image">
                <h3 class="card-title">Player of the Week on 23</h3>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 News Website. All rights reserved.</p>
    </footer>
</body>
</html>