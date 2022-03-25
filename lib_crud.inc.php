<?php


//IDENTIFIANTS//
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
        echo '<img src="'.$value['article_photo'].'" alt="articlePhoto">';
        echo '<div class="infos">';
        echo '<p>'.$value['article_nom'];
        echo '<h3>'.$value['article_prix'].'€</h3>';
        echo '<img src="'.$value['article_couleur'].'" alt="pastille">';
        echo '<div class="article_hover">';
        echo '<p>Marque  : '.$value['marque_nom'].'</p>';
        echo '<p>Tailles disponible 📏 : '.$value['article_taille'].'</p>';
        echo '<p>Catégorie 👕 : '.$value['article_categorie'].'</p>';
        echo '<p>Provenance 🌍 : '.$value['marque_nationalite'].'</p>';
        echo '<p>Transporteur 🚚 : '.$value['marque_transporteur'].'</p>';
        echo '</div></div></div>';
      }


}

//!!! AFFICHAGE CATALOGUE INDEX!!!//
function afficherCatalogueIndex($mabd) {
    $req = "SELECT * FROM sae_articles INNER JOIN sae_marques ON sae_articles._marque_id = sae_marques.marque_id limit 8";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    
    
    foreach ($resultat as $value) {
        echo '<div class="article">'; 
        echo '<img src="'.$value['article_photo'].'" alt="articlePhoto">';
        echo '<div class="infos">';
        echo '<p>'.$value['article_nom'];
        echo '<h3>'.$value['article_prix'].'€</h3>';
        echo '<img src="'.$value['article_couleur'].'" alt="pastille">';
        echo '<div class="article_hover">';
        echo '<p>Marque : '.$value['marque_nom'].'</p>';
        echo '<p>Tailles disponible 📏 : '.$value['article_taille'].'</p>';
        echo '<p>Catégorie 👕 : '.$value['article_categorie'].'</p>';
        echo '<p>Provenance 🌍 : '.$value['marque_nationalite'].'</p>';
        echo '<p>Transporteur 🚚 : '.$value['marque_transporteur'].'</p>';
        echo '</div></div></div>';
      }


}

// !!! AFFICHAGE LISTE POUR LA PAGE DE GESTION !!! //
function afficherListe($mabd) {
    $req = "SELECT * FROM sae_articles 
            INNER JOIN sae_marques 
            ON sae_articles._marque_id = sae_marques.marque_id";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    echo '<table>'."\n";
    echo '<thead><tr><th>Photo</th><th>Nom</th><th>Prix (&euro;)</th><th>Catégorie</th><th>Taille</th><th>Couleur</th><th>Marque</th><th>Transporteur</th><th>Nationalité</th><th>Modifier</th><th>Supprimer</th></tr></thead>'."\n";
    echo '<tbody>'."\n";
    foreach ($resultat as $value) {
        echo '<tr>'."\n";
        echo '<td><img class="photo" src="../'.$value['article_photo'].'" alt="image_'.$value['article_id'].'" /></td>'."\n";
        echo '<td>'.$value['article_nom'].'</td>'."\n";
        echo '<td>'.$value['article_prix'].'</td>'."\n";
        echo '<td>'.$value['article_categorie'].'</td>'."\n";
        echo '<td>'.$value['article_taille'].'</td>'."\n";
        echo '<td>'.$value['article_couleur'].'</td>'."\n";
        echo '<td>'.$value['marque_nom'].'</td>'."\n";
        echo '<td>'.$value['marque_transporteur'].'</td>'."\n";
        echo '<td>'.$value['marque_nationalite'].'</td>'."\n";
        echo '<td><a href="table1_update_form.php?num='.$value['article_id'].'">Modifier</a></td>'."\n";
        echo '<td><a href="table1_delete.php?num='.$value['article_id'].'">Supprimer</a></td>'."\n";
        echo '</tr>'."\n";
    }
    echo '</tbody>'."\n";
    echo '</table>'."\n";
}


// !!!afficher les auteurs (prénom et nom) dans des champs "option"
function afficherAuteursOptions($mabd) {
    // on sélectionne tous les auteurs de la table auteurs
    $req = "SELECT * FROM sae_marques";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    // pour chaque auteur, on met son id, son prénom et son nom 
    // dans une balise <option>
    foreach ($resultat as $value) {
        echo '<option value="'.$value['marque_id'].'">'; // id de l'auteur
        echo $value['marque_nom']; // prénom espace nom
        echo '</option>'."\n";
    }
}

    //!!! AJOUT ARTICLE DANS LA TABLE SAE_ARTICLES !!!//
    function ajouterBD($mabd, $nom, $prix, $nouvelleImage, $couleur, $taille, $marque, $categorie)
    {
        $req = 'INSERT INTO sae_articles (article_photo, article_nom, article_prix, article_couleur, article_taille, article_categorie, _marque_id) 
        VALUES ("images/uploads/'.$nouvelleImage.'", "'.$nom.'", '.$prix.', "couleurs/'.$couleur.'.jpg", "'.$taille.'", "'.$categorie.'", "'.$marque.'"
        )';
        // echo '<p>' . $req . '</p>' . "\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo "<p>L'article ".$nom." a été ajouté au catalogue.</p><br>";
        } else {
            echo '<p>Erreur lors de l\'ajout.</p>' . "\n";
            die();
        }
    }


    // !!! EFFACEMENT D'UN ARTICLE !!! //
    function effaceBD($mabd, $id) {
        $req = 'DELETE FROM sae_articles WHERE article_id='.$id;
        //echo '<p>'.$req.'</p>'."\n";
        try{
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount()==1) {
            echo '<p>La bande dessinée '.$id.' a été supprimée du catalogue.</p>'."\n";
        } else {
            echo '<p>Erreur lors de la suppression.</p>'."\n";
            die();
        }
    }

    // RÉCUPÉRATION DES INFOS D'UN ARTICLE
    function getArticle($mabd, $idArticle) {
        $req = 'SELECT * FROM sae_articles WHERE article_id='.$idArticle;
        //echo '<p>GetArticle() : '.$req.'</p>'."\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        // la fonction retourne le tableau associatif 
        // contenant les champs et leurs valeurs
        return $resultat->fetch();
    }

    
	// afficher le "bon" auteur parmi les auteurs (prénom et nom)
   // dans les balises "<option>"
	function afficherMarqueOptionsSelectionne($mabd, $idMarque) {
        $req = "SELECT * FROM sae_marques";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        foreach ($resultat as $value) {
            echo '<option value="'.$value['marque_id'].'"';
            if ($value['marque_id']==$idMarque) {
                echo ' selected="selected"';
            }
            echo '>';
            echo $value['marque_nom'];
            echo '</option>'."\n";
        }
    }

	// !!! FONCTION DE MODIFICATION D'UN ARTICLE !!! //
    function modifierBD($mabd, $id, $nom, $prix, $nouvelleImage, $categorie, $couleur, $taille, $marque)
    {
        $req = 'UPDATE sae_articles
                SET 
                    article_nom="'.$nom.'", article_prix='.$prix.', article_photo="../images/uploads/'.$nouvelleImage.'", article_categorie="'.$categorie.'", article_couleur="'.$couleur.'", article_taille="'.$taille.'", _marque_id="'.$marque.'"
                WHERE article_id='.$id;
        //echo '<p>' . $req . '</p>' . "\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo "<p>L'article ".$nom." a été modifié.</p><br>" ;
        } else {
            echo '<p>Erreur lors de la modification.</p>' . "\n";
            die();
        }
    }






    // !!! PAGES DE GESTION NUMERO 2 !!! //

    function afficherListeM($mabd) {
        $req = "SELECT * FROM sae_marques";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        echo '<table>'."\n";
        echo '<thead><tr><th>Nom</th><th>Nationalité</th><th>Transporteur</th>'."\n";
        echo '<tbody>'."\n";
        foreach ($resultat as $value) {
            echo '<tr>'."\n";
            echo '<td>'.$value['marque_nom'].'</td>'."\n";
            echo '<td>'.$value['marque_nationalite'].'</td>'."\n";
            echo '<td>'.$value['marque_transporteur'].'</td>'."\n";
            echo '<td><a href="table2_update_form.php?num='.$value['marque_id'].'">Modifier</a></td>'."\n";
            echo '<td><a href="table2_delete.php?num='.$value['marque_id'].'">Supprimer</a></td>'."\n";
            echo '</tr>'."\n";
        }
        echo '</tbody>'."\n";
        echo '</table>'."\n";
    }

    // AJOUTER MARQUE //

    function ajouterMarque($mabd, $nom, $nationalite, $transporteur)
    {
        $req = 'INSERT INTO sae_marques (marque_nom, marque_nationalite, marque_transporteur) 
        VALUES ("'.$nom.'", "'.$nationalite.'", "'.$transporteur.'"
        )';
        // echo '<p>' . $req . '</p>' . "\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo "<p>L'article ".$nom." a été ajouté au catalogue.</p><br>";
        } else {
            echo '<p>Erreur lors de l\'ajout.</p>' . "\n";
            die();
        }
    }

    // !!! EFFACEMENT D'UNE MARQUE !!! //
    function effaceMarque($mabd, $id) {
        $req = 'DELETE FROM sae_marques WHERE marque_id='.$id;
        //echo '<p>'.$req.'</p>'."\n";
        try{
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount()==1) {
            echo '<p>La bande dessinée '.$id.' a été supprimée du catalogue.</p>'."\n";
        } else {
            echo '<p>Erreur lors de la suppression.</p>'."\n";
            die();
        }
    }

    // !!! RÉCUPÉRATION INFOS MARQUES !!! //
    function getMarque($mabd, $idMarque) {
        $req = 'SELECT * FROM sae_marques WHERE marque_id='.$idMarque;
        //echo '<p>getMarque() : '.$req.'</p>'."\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        // la fonction retourne le tableau associatif 
        // contenant les champs et leurs valeurs
        return $resultat->fetch();
    }

    function modifierMarque($mabd, $id, $nom, $nationalite, $transporteur)
    {
        $req = 'UPDATE sae_marques
                SET 
                    marque_nom="'.$nom.'", marque_nationalite="'.$nationalite.'", marque_transporteur="'.$transporteur.'"
                WHERE marque_id='.$id;
        //echo '<p>' . $req . '</p>' . "\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo "<p>La marque ".$nom." a été modifié.</p><br>" ;
        } else {
            echo '<p>Erreur lors de la modification.</p>' . "\n";
            die();
        }
    }

    // Génération de la liste des auteurs dans le formulaire de recherche
function genererDatalistMarque($mabd) {
    // on sélectionne le nom et prénom de tous les auteurs de la table auteurs
    $req = "SELECT marque_nom FROM sae_marques";
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    // pour chaque auteur, on met son nom <option>
    foreach ($resultat as $value) {
        echo '<option value="'. $value['marque_nom'] .'">'; 
    } 
}

function afficherResultatRecherche($mabd) {

    $prixMin = filter_var($_POST['prix_min']);
    $nom = filter_var($_POST['nom-article']); 
    $prixMax = filter_var($_POST['prix_max']); 
    $marque = filter_var($_POST['marque']);
    $couleur = filter_var($_POST['color']);
    $categorie = filter_var($_POST['categorie']);
    $taille = filter_var($_POST['taille']);

    //$req = "SELECT * FROM sae_articles 
    //        INNER JOIN sae_marques 
    //        ON sae_articles._marque_id = sae_marques.marque_id
    //        WHERE article_nom OR marque_nom LIKE '%$nom%' OR LIKE '%$marque%' AND article_prix >= $prixMin AND article_prix <= $prixMax";
    
    $req = "SELECT * FROM sae_articles INNER JOIN sae_marques 
    ON sae_articles._marque_id = sae_marques.marque_id 
    WHERE marque_nom LIKE '%$marque%' 
    AND article_nom LIKE '%$nom%' 
    AND article_prix >= $prixMin 
    AND article_prix <=$prixMax 
    AND article_couleur LIKE '%$couleur%'
    AND article_taille LIKE '%$taille%'
    AND article_categorie LIKE '%$categorie%'";
    
    try {
        $resultat = $mabd->query($req);
    } catch (PDOException $e) {
        // s'il y a une erreur, on l'affiche
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    foreach ($resultat as $value) {
        echo '<div class="article">'; 
        echo '<img src="'.$value['article_photo'].'" alt="photoArticle">';
        echo '<div class="infos">';
        echo '<p>'.$value['article_nom'];
        echo '<h3>'.$value['article_prix'].'€</h3>';
        echo '<img src="'.$value['article_couleur'].'" alt="pastille">';
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