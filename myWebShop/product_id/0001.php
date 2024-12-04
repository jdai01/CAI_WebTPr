<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulbasaur #0001</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/darkmode.css">
    <script src="../script/collection-list.js" defer></script>
</head>

<body>
    <!-- Header -->
    <header>
        <?php include ("../header.php"); ?>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Wrap the main content in a flex container -->
        <div class="main-content">
            <div class="main">
                <div class="info">
                    <h1>Bulbasaur #0001</h1>
                    <img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png"
                        width="200px">
                    <p>For some time after its birth, it uses the nutrients that are packed into the seed on its back in
                        order to grow.</p>
                </div>
                <div class="cart">
                    <h2>Price: 5€</h2>
                    <div class="item-selection">
                        <input type="number" class="quantity-input" id="quantity" value="1" min="1">
                        <button class="add-to-collection">Add to Collection List</button>
                    </div>
                </div>
            </div>

            <!-- Description and stats in flex layout -->
            <div class="description">
                <h2>Description:</h2>
                <ul>
                    <li>Height: 2' 04"</li>
                    <li>Weight: 15.2 lbs</li>
                    <li>Gender: Male & Female</li>
                    <li><a href="../categoryList/categories/categoryList.php">Category</a>: <a
                            href="../categoryList/categories/seed.php">Seed</a></li>
                    <li>Abilities: Overgrow</li>
                </ul>

                <h2><a href="../categoryList/types/typeList.php">Type</a></h2>
                <ul>
                    <li><a href="../categoryList/types/grass.php">Grass</a></li>
                    <li><a href="../categoryList/types/poison.php">Poison</a></li>
                </ul>

                <h2>Weakness</h2>
                <ul>
                    <li>Fire</li>
                    <li>Ice</li>
                    <li>Flying</li>
                    <li>Psychic</li>
                </ul>
            </div>

            <div class="stats">
                <h2>Stats</h2>
                <ul>
                    <li>HP: 3/10</li>
                    <li>Attack: 3/10</li>
                    <li>Defense: 3/10</li>
                    <li>Special Attack: 4/10</li>
                    <li>Special Defense: 4/10</li>
                    <li>Speed: 3/10</li>
                </ul>
                <h2>Evolution</h2>
                <ol>
                    <li><a href="0001.php">Bulbasaur #0001</a> (current)</li>
                    <li><a href="0002.php">Ivysaur #0002</a></li>
                    <li><a href="0003.php">Venusaur #0003</a></li>
                </ol>
            </div>
        </div>

        <hr>
        <a href="../categoryList/mainList.php">Back to category list</a><br>
        <a href="../index.php">Back to main page</a><br>
    </main>

    <!-- Footer -->
    <footer>
        <?php include ("../footer.php"); ?>
    </footer>
</body>

</html>