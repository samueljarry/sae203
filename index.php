<?php
    require('header.php')
?>


    <div class="background"></div>

<main id="index">
        <h1>Collection Spring-Summer 2022</h1>

        <main id="listing">
        <?php

        require 'secretxyz123.inc.php';

$mabd = new PDO('mysql:host=localhost;dbname=sae203;charset=UTF8;', USER, PASSWORD);
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM sae_articles INNER JOIN sae_marques ON sae_articles._marque_id = sae_marques.marque_id limit 8";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<div class="article">'; 
    echo '<img src="'.$value['article_photo'].'">';
    echo '<div class="infos">';
    echo '<p>'.$value['article_nom'];
    echo '<h3>'.$value['article_prix'].'€</h3>';
    echo '<img src="'.$value['article_couleur'].'">';
    echo '<div class="article_hover">';
    echo '<p>Marque : '.$value['marque_nom'].'</p>';
    echo '<p>Tailles disponible : '.$value['article_taille'].'</p>';
    echo '<p>Catégorie : '.$value['article_categorie'].'</p>';
    echo '<p>Informations sur la marque :</p>';
    echo '<p>Provenance : '.$value['marque_nationalite'].'</p>';
    echo '<p>Transporteur : '.$value['marque_transporteur'].'</p>';
    echo '</div></div></div>';
  }


?>
        </main>

        <a href="listing.php">Voir plus</a>
</main>

</html>