<!DOCTYPE html>
<html>
	<head>
	    <title>SAE203</title>
        <link rel="stylesheet" type="text/css" href="../styles.css">
	</head>
	<body style="font-family:sans-serif;">
        <div id="gestion1">
            <div id="lien">
	    <a href="../index.php">Accueil</a> | <a href="admin.php">Gestion</a>
        </div>
	    <h1>Ajouter un article</h1>
	    <form action="table1_new_valide.php" method="POST" enctype="multipart/form-data">
	        Nom : <input type="text" name="nom" required /><br />
	        Prix : <input type="number" name="prix" min="0.00" max="10000.00" required /><br />
			Catégorie : <input type="text" name="categorie" required /><br />
	        Couleur : <input type="text" name="couleur" required /><br />
            Tailles disponibles : <input type="text" name="taille" required /><br />

	        <!-- Résumé : <textarea name="resume" required></textarea><br /> -->
	        Photo : <input type="file" name="photo" required /><br />
	        Marque : <select name="marque" required>
	        <?php
	            require '../lib_crud.inc.php';
	            $co=connexionBD();
	            afficherAuteursOptions($co);
	            deconnexionBD($co);
	        ?>
            
	        </select><br />
	        <input type="submit" value="Ajouter" />
	    </form>
        </div>
	</body>
</html>