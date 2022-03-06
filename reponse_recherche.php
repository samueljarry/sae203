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


    $mabd = new PDO('mysql:host=localhost;dbname=sae203;charset=UTF8;', 'sae203', '123');
    $mabd->query('SET NAMES utf8;');
    $req = "SELECT * FROM sae_articles INNER JOIN sae_marques ON sae_articles._marque_id = sae_marques.marque_id WHERE article_nom LIKE '%$nom%' AND article_prix>='$prixMin' AND article_prix<='$prixMax' ";
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