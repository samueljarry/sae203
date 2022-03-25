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
        <hr />
	    <h1>Ajouter une marque</h1>
	    <hr />
	    <?php
	        require '../lib_crud.inc.php';
	        $nom=$_POST['nom'];
	        $nationalite=$_POST['nationalite'];
			$transporteur=$_POST['transporteur'];
	       
	        $co=connexionBD();
	        ajouterMarque($co, $nom, $nationalite, $transporteur);
	        deconnexionBD($co);
	    ?>
    </div>
	</body>
</html>