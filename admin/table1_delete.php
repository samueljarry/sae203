<!DOCTYPE html>
<html>
	<head>
		<title>SAE203</title>
        <link rel="stylesheet" type="text/css" href="../styles.css">
	</head>
	<body style="font-family:sans-serif;">
    <div id="gestion1">
            <div id="lien">
	    <a href="../index.php">Accueil</a> | <a href="table1_gestion.php">Gestion</a>
            </div>
        <hr />
	    <h1>Supprimer une bande dessinée</h1>
	    <hr />
	    <?php
	        require '../lib_crud.inc.php';
	
	        $id=$_GET['num'];
	
	        $co=connexionBD();
	        effaceBD($co, $id);
	        deconnexionBD($co);
	    ?>
    </div>
	</body>
</html>