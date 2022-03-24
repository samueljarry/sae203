<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles.css">
        <title>SAE203</title>
    </head>
    <body id="gestion">
        <a href="../index.php">Accueil</a>
        <hr />
        <h1>Gestion des données</h1>

        <p><a href="table2_new_form.php">Ajouter une marque</a></p>
        <?php
            require '../lib_crud.inc.php';
            $co=connexionBD();
            afficherListeM($co);
            deconnexionBD($co);
        ?>
    </body>
</html>