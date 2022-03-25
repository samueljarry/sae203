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
	    <h1>Ajouter une bande dessinée</h1>
	    <hr />
	    <?php
	        require '../lib_crud.inc.php';
	
	        $nom=$_POST['nom'];
	        $prix=$_POST['prix'];
			$categorie=$_POST['categorie'];
	        $couleur=$_POST['couleur'];
	        $taille=$_POST['taille'];
	        //$resume=trim($_POST['resume']);
	        $marque=$_POST['marque'];
	        //var_dump($_POST);
	        //var_dump($_FILES);
	
	        $imageType=$_FILES["photo"]["type"];
	        if ( ($imageType != "image/png") &&
	            ($imageType != "image/jpg") &&
	            ($imageType != "image/jpeg") ) {
	                echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
	                echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
	                die();
	        }
	
	        $nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];
	
	        if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	            if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
	            "../images/uploads/".$nouvelleImage)) {
	                echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
	                die();
	            }
	        } else {
	            echo '<p>Problème : image non chargée...</p>'."\n";
	            die();
	        }
	
	        $co=connexionBD();
	        ajouterBD($co, $nom, $prix, $nouvelleImage, $couleur, $taille, $marque, $categorie);
	        deconnexionBD($co);
	    ?>
	</div>
	</body>
</html>