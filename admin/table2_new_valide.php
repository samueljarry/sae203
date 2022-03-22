<!DOCTYPE html>
<html>
	<head>
		<title>SAE203</title>
	</head>
	<body style="font-family:sans-serif;">
	    <a href="../index.php">Accueil</a> | <a href="admin.php">Gestion</a>
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
	</body>
</html>