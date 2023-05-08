<!DOCTYPE html>
<html>
<head>
        <title>My Shopping App</title>
        <style>
                body {
                        font-family: Arial, sans-serif;
                        background-color: #f2f2f2;
                }
                        header {
                background-color: #333;
                color: #fff;
                padding: 10px;
                text-align: center;
        }

        nav {
                background-color: #444;
                color: #fff;
                padding: 10px;
                text-align: center;
                margin-bottom: 20px;
        }

        nav a {
                color: #fff;
                text-decoration: none;
                padding: 10px;
                margin: 10px;
        }

        section {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                margin: 0 10px;
        }

        .product {
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 10px;
                margin-bottom: 20px;
                width: 30%;
        }

        .product img {
                display: block;
                margin: 0 auto;
                max-width: 100%;
                height: auto;
        }

        .product h2 {
                margin-top: 0;
                font-size: 1.5em;
        }

        .product p {
                font-size: 1.2em;
                margin-bottom: 10px;
        }

        .product button {
                background-color: #4CAF50;
                color: #fff;
                border: none;
                border-radius: 4px;
                padding: 10px;
                cursor: pointer;
                font-size: 1.2em;
        }

        .product button:hover {
                background-color: #45a049;
        }

        footer {
                background-color: #444;
                color: #fff;
                padding: 10px;
                text-align: center;
                margin-top: 20px;
        }

</style>
</head>
<body>
        <header>
                <h1>My Shopping App</h1>
        </header>
        <nav>
        <a href="#">Home</a>
        <a href="#">Products</a>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
</nav>

<section>
        <div class="product">
                <img src="https://via.placeholder.com/250x250.png?text=Product+Image" alt="Product Image">
                <h2>Product 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button>Add to Cart</button>
        </div>

        <div class="product">
                <img src="https://via.placeholder.com/250x250.png?text=Product+Image" alt="Product Image">
                <h2>Product 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button>Add to Cart</button>
        </div>

        <div class="product">
                <img src="https://via.placeholder.com/250x250.png?text=Product+Image" alt="Product Image">
                <h2>Product 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button>Add to Cart</button>
        </div>
</section>
</body>
</html>
