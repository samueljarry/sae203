<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles.css">
        <title>SAE203</title>
    </head>
    <body id="gestion1">
        <a href="../index.php">Retour à l'accueil</a>
        <h1>Gestion des données</h1>

        <p><a href="table1_new_form.php">Ajouter un article</a></p>
        <?php
            require '../lib_crud.inc.php';
            $co=connexionBD();
            afficherListe($co);
            deconnexionBD($co);
        ?>
    </body>
</html>