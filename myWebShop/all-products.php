<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in by checking if the username is set in the session
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $firstNameLive = $_SESSION['firstName'];
    $admin = $_SESSION['admin'];
    $shoppingCartLive = $_SESSION['shoppingCart'];
} else {
    $username = null; // User is not logged in
}

// Adding cart ====================================

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Read the incoming JSON data
    $requestPayload = file_get_contents("php://input");
    $data = json_decode($requestPayload, true);

    if (isset($data['pid']) && isset($data['quantity'])) {
        $pid = htmlspecialchars($data['pid']);
        $quantity = intval($data['quantity']);

        // Determine the file path for the shopping cart
        if ($username) {
            $shoppingPath = 'users/' . $username . '/shoppingCart.json';
        } else {
            $shoppingPath = 'users/shoppingCart.json';
        }

        // Ensure the directory exists
        $directory = dirname($shoppingPath);
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true); // Create the directory if it doesn't exist
        }

        // Load existing cart data
        if (file_exists($shoppingPath)) {
            $fileData = json_decode(file_get_contents($shoppingPath), true);
            $cart = isset($fileData['cart']) ? $fileData['cart'] : [];
        } else {
            $cart = [];
            $fileData = ['cart' => $cart]; // Initialize the JSON structure
        }

        // Update cart with the new item
        $found = false;
        foreach ($cart as &$item) {
            if ($item['pid'] === $pid) {
                $item['quantity'] += $quantity; // Update quantity if item already exists
                $found = true;
                break;
            }
        }

        if (!$found) {
            $cart[] = ['pid' => $pid, 'quantity' => $quantity];
        }

        // Update the JSON structure
        $fileData['cart'] = $cart;

        // Save back to JSON file
        if (file_put_contents($shoppingPath, json_encode($fileData, JSON_PRETTY_PRINT))) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Failed to write to file']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'Invalid input']);
    }
}
?>

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
    <link rel="stylesheet" href="styles/buttons.css">
    <link rel="stylesheet" href="styles/product_display.css">
    <script src="script/collection-list.js"></script>
    <script src="script/cart-update.js"></script>
    <script src="script/search-filter.js"></script>
</head>

<body>
    <!-- Header -->
    <header>
        <?php include ("header.php"); ?>
    </header>

    <main>
        <h1>Pokémon List</h1>
        <p>
            This is a Pokédex webpage designed to provide detailed information about various Pokémon, categorized by
            type and category.
        </p>
        <br>
        <div class="search-bar">
            <input type="text" id="search-field" placeholder="Search by PID or Name..." onkeyup="filterProducts()">
        </div>
        <br>

        <div class="product-display" id="product-display">
            <?php
            // Load the JSON file
            $jsonString = file_get_contents('json/product.json');
            $data = json_decode($jsonString, true);

            // Check if the JSON contains the 'product' key
            if (isset($data['product'])) {
                foreach ($data['product'] as $product) {
                    echo '
                    <div class="box product-box" data-pid="' . htmlspecialchars($product['pid']) . '" data-name="' . htmlspecialchars(strtolower($product['name'])) . '">
                        <div class="left">
                            <div class="box-content box-blank">
                                <img src="' . htmlspecialchars($product['img_src']) . '" width="100px">
                                <a href="product.php?pid=' . htmlspecialchars($product['pid']) . '">
                                    <button>View</button>
                                </a>
                            </div>
                        </div>
                        <div class="right">
                            <h3 class="title">' . ' #' . htmlspecialchars($product['pid']) . " " . htmlspecialchars($product['name']) . '</h3>
                            <p class="desc">' . htmlspecialchars($product['desc']) . '</p>
                            <p class="price"><strong>Price: </strong>' . htmlspecialchars($product['price']) . '€</p>
                            <div class="add-div">
                                <input type="number" class="qty-input" id="quantity" value="1" min="1">
                                <button class="btn-blue add-cart">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo '
                <h2 style="color: red;">Error 404: Product information not found :( </h2>
                ';
            }
            ?>
        </div>

        <section class="collection-list box">
            <h2>Your Collection List</h2>
            <ul id="collection-items">
                <!-- Dynamically added collection items will appear here -->
            </ul>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <?php include ("footer.php"); ?>
    </footer>
</body>

</html>