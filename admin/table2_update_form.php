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
    <hr>
    <h1>Modifier un article</h1>
    <hr />
    <?php
        require '../lib_crud.inc.php';

        $id=$_GET['num'];
        $co=connexionBD();
        $marque=getMarque($co, $id);
        //var_dump($marque);
        deconnexionBD($co);
    ?>
    <form action="table2_update_valide.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="num" value="<?= $id; ?>" />
            Nom : <input type="text" name="nom" value="<?php echo $marque['marque_nom']; ?>" required /><br />
	        Nationalité : <input type="text" name="nationalite" value="<?php echo $marque['marque_nationalite']; ?>" required /><br />
			Transporteur : <input type="text" name="transporteur" value="<?php echo $marque['marque_transporteur']; ?>" required /><br />
        <input type="submit" value="Modifier" />
    </form>
</div>
</body>
</html>