<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Store</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/darkmode.css">
    <script src="script/calculating-prices.js"></script>
    <script src="script/extra-function.js"></script>


</head>

<body>
    <!-- Header -->
    <header>
        <!-- <iframe src="header.php" class="header-iframe"></iframe> -->
        <?php include ("header.php"); ?>
    </header>

    <!-- Main -->
    <main>
        <div class="form-container">
            <div class="login-box box">
                <h2>Price Calculator</h2><br>
                <label for="priceWOTax">Price without Tax (€)</label>
                <input type="number" id="priceWOTax" required><br>
                <label for="tax">Tax (€)</label>
                <input type="number" id="tax-result" value="" disabled><br>
                <label for="priceWTax">Price with Tax (€)</label>
                <input type="number" id="priceWTax" value="" disabled><br>
                <button id="calculate-button">Calculate</button><br>

            </div>
            <div class="login-box box">
                <h2>Currency</h2><br>
                <label for="from-currency">from EUR</label>
                <input type="number" id="from-currency" required><br>
                <label for="to-currency">To</label>
                <select name="to-currency" id="to-currency">
                    <option value="usd">USD - United States Dollar</option>
                    <option value="gbp">GBP - Pound sterling</option>
                    <option value="cad">CAD - Canadian Dollar</option>
                    <option value="aud">AUD - Australian Dollar</option>
                    <option value="jpy">JPY - Japanese Yen</option>
                    <option value="sgd">SGD - Singapore Dollar</option>
                    <option value="hkd">HKD - Hong Kong Dollar</option>
                    <option value="cny">CNY - Chinese Yuan</option>
                    <option value="myr">MYR - Malaysian Ringgit</option>
                    <option value="krw">KRW - South Korean won</option>
                    <option value="btc">BTC - Bitcoin</option>
                </select><br>
                <label for="converted-result">Converted</label>
                <input type="number" id="converted-result" value="" disabled><br>
                <button id="convert-button">Convert</button><br>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <iframe src="footer.php" class="footer-iframe"></iframe>
    </footer>
</body>

</html>