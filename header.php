<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script>
        function show() {
            document.getElementById('sidebar').classList.toggle('active')
            }
    </script>
    <! –– POLICES ––>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/lve5zse.css">
    <link rel="stylesheet" href="https://use.typekit.net/vby5cao.css">

</head>
<header>
    <div id="sidebar" onclick="show()">

        <div class="btn">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="listing.php">Nos produits</a></li>
            <li><a href="form_recherche.php">Recherche</a></li>
        </ul>
    </div>
    <div id="navbar">
            <nav>
            <div class="logo">
                <a href="index.php"><img src="images/eclothing.png"></a>
            </div>
        </nav>
    </div>
</header>