<?php
    require('header.php')
?>

<main id="listing">

<?php

    $prixMin = filter_var($_POST['prix_min'],
    FILTER_SANITIZE_STRING);
 
    $nom = filter_var($_POST['nom-article'],
    FILTER_SANITIZE_STRING);

    $prixMin = 0;

    $prixMax = 9000;

    $prixMax = filter_var($_POST['prix_max'],
    FILTER_SANITIZE_STRING); 



    require 'lib_crud.inc.php';
    $co=connexionBD();
    afficherResultatRecherche($co);
    deconnexionBD($co);
?>


</main>