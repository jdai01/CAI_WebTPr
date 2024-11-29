<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/first-style.css">
    <link rel="stylesheet" href="styles/forms.css">
    <link rel="stylesheet" href="styles/mystyle.css">
    <script src="script/form-validation.js"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <iframe src="header.php" class="header-iframe"></iframe>
    </header>
    
    <main>
        <div class="form-container">
            <div class="login-box box">
                <h2>Login</h2>
                <form action="customer.php">
                    <label for="uName">Username</label>
                    <input type="text" id="uName" required>
                    <label for="password">Password</label>
                    <input type="password" id="password" required>
                    <input type="submit" value="Login">
                </form><br>
            </div>
            <div class="register-box box">
                <h2>New Customer?</h2>
                <a href="registration.php"><button type="button">Click here to register!</button></a>
            </div>
            <!-- <img src="https://media.printables.com/media/prints/599251/images/4771188_2e14b654-daa7-478c-8cc8-f5db25dce657_75ec0dd6-e0f7-4d1a-9c56-8a31dd407287/suprised-pikachu.png" alt="Pikachu" class="register-image"> -->
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <iframe src="footer.php" class="footer-iframe"></iframe>
    </footer>
</body>
</html>