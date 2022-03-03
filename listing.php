<?php
    require('header.php');
?>

<body>
<main id="listing">
    <!--
    <div class="article">
            <img src="images/id1.jpg">
            <div class="infos">
                <p> Veiled Puffer Jacket </p>
                <h3>170€</h3>
                <img src=couleurs/noir.jpg>
            </div>
    </div>
-->


<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203;charset=UTF8;', 'sae203', '123');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM sae_articles INNER JOIN sae_marques ON sae_articles._marque_id = sae_marques.marque_id";
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
    echo '</div></div></div>';
  }
?>

</main>
</body>