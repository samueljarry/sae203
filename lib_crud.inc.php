<?php


//identifiants de connexion//
require 'secretxyz123.inc.php';



//!!! CONNEXION BDD !!!//
function connexionBD()
{
  // on initialise la variable de connexion à null
  $mabd = null;
  try {
    // on essaie de se connecter
    // le port et le dbname ci-dessous sont À ADAPTER à vos données
    $mabd = new PDO('mysql:host=127.0.0.1;port=3306;
              dbname=sae203;charset=UTF8;', 
              USER, PASSWORD);
    // on passe le codage en utf-8
    $mabd->query('SET NAMES utf8;');
  } catch (PDOException $e) {
    // s'il y a une erreur, on l'affiche
    echo '<p>Erreur : ' . $e->getMessage() . '</p>';
    die();
  }
  // on retourne la variable de connexion
  return $mabd;
}




//!!! DECONNEXION BDD !!!//
function deconnexionBD(&$mabd) {
  // on se déconnexte en mettant la variable de connexion à null 
  $mabd=null;
}






//!!! AFFICHAGE CATALOGUE !!!//
function afficherCatalogue($mabd) {
    $req = "SELECT * FROM sae_articles INNER JOIN sae_marques ON sae_articles._marque_id = sae_marques.marque_id";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    
    
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


}

?>