<!DOCTYPE html>
<html>
	<head>
		<title>SAE203</title>
	</head>
	<body style="font-family:sans-serif;">
	    <a href="../index.php">Accueil</a> | <a href="table1_gestion.php">Gestion</a>
	    <hr />
	    <h1>Supprimer une marque</h1>
	    <hr />
	    <?php
	        require '../lib_crud.inc.php';
	
	        $id=$_GET['num'];
	
	        $co=connexionBD();
	        effaceMarque($co, $id);
	        deconnexionBD($co);
	    ?>
	</body>
</html>