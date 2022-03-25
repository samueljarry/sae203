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
	    <h1>Modifier une marque</h1>
	    <hr />
	    <?php
	        require '../lib_crud.inc.php';

            $id=$_POST['num'];
	        $nom=$_POST['nom'];
	        $nationalite=$_POST['nationalite'];
			$transporteur=$_POST['transporteur'];
	        //var_dump($_POST);
	        //var_dump($_FILES);
	
	        $co=connexionBD();
	        modifierMarque($co, $id, $nom, $nationalite, $transporteur);
	        deconnexionBD($co);
	    ?>
    </div>
	</body>
</html>