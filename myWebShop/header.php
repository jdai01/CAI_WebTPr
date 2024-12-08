<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/myWebShop/styles/styles.css">
    <link rel="stylesheet" href="/myWebShop/styles/darkmode.css">
    <link rel="stylesheet" href="/myWebShop/styles/header.css">
</head>

<body>
    <header>
        <div class="left">
            <a href="/myWebShop/index.php" target="_parent">
                <div class="logo-container">
                    <img src="/myWebShop/img/shop-logo.png" class="logo" alt="PokéMart">
                </div>
            </a>
        </div>
        <div class="right">
            <div class="nav-links">
                <a href="/myWebShop/about.php" target="_parent">About Us</a>
                <a href="/myWebShop/login.php" target="_parent">Login</a>
                <a href="/myWebShop/registration.php" target="_parent">Register</a>
                <a href="/myWebShop/price-calculator.php" target="_parent">Price Calculator</a>
            </div>
            <a href="/myWebShop/shoppingCart.php" target="_parent">
                <div id="cart-container">
                    <img id="cart-icon" src="/myWebShop/img/cart.png" alt="Shopping Cart" width="30px">
                    <span id="cart-count" style="display: none;">0</span>
                </div>
            </a>
            <button class="mode-button">
                <img src="/myWebShop/img/mode/light.png" class="nav-img mode-img">
            </button>
            <button class="hamburger-btn hamburger-menu">
                <img src="/myWebShop/img/hamburger.png" alt="Menu" class="hamburger-icon">
            </button>
        </div>
    </header>

    <script src="/myWebShop/script/style-modification.js"></script>
</body>

</html>