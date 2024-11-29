<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon List</title>
    <link rel="stylesheet" href="../../styles/first-style.css">
    <link rel="stylesheet" href="../../styles/forms.css">
    <link rel="stylesheet" href="../../styles/mystyle.css">
</head>
<body>
    <!-- Header -->
    <header>
        <iframe src="../../header.php" class="header-iframe"></iframe>
    </header>
    
    <main>
        <h1>Pokémon Types</h1>
        <p>This is a Pokédex webpage designed to provide detailed information about various Pokémon, categorized by type.</p>

        <table>
            <thead>
                <tr>
                    <td><a href="typeList.php">Types</a></td>
                    <td>Pokémons</td>
                </tr>
            </thead>
            <tbody>
                <!-- Grass -->
                <tr>
                    <td><a href="grass.php">Grass</a><br></td>
                    <td>
                        <ul>
                            <li><a href="../../product_id/0001.php">Bulbasaur #0001</a></li>
                            <li><a href="../../product_id/0002.php">Ivysaur #0002</a></li>
                            <li><a href="../../product_id/0003.php">Venusaur #0003</a></li>
                        </ul>
                    </td>
                </tr>
                <!-- Poison -->
                <tr>
                    <td><a href="poison.php">Poison</a><br></td>
                    <td>
                        <ul>
                            <li><a href="../../product_id/0001.php">Bulbasaur #0001</a></li>
                            <li><a href="../../product_id/0002.php">Ivysaur #0002</a></li>
                            <li><a href="../../product_id/0003.php">Venusaur #0003</a></li>
                        </ul>
                    </td>
                </tr>
                <!-- Water -->
                <tr>
                    <td><a href="water.php">Water</a><br></td>
                    <td>
                        <ul>
                            <li><a href="../../product_id/0007.php">Squirtle #0007</a></li>
                            <li><a href="../../product_id/0008.php">Wartortle #0008</a></li>
                            <li><a href="../../product_id/0009.php">Blastoise #0009</a></li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <hr>
        <a href="../mainList.php">Back to category list</a><br>
        <a href="../../index.php">Back to main page</a><br>
    </main>

    <!-- Footer -->
    <footer>
        <iframe src="../../footer.php" class="footer-iframe"></iframe>
    </footer>
</body>
</html>