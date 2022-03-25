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
	    <h1>Ajouter un article</h1>
	    <hr />
	    <form action="table2_new_valide.php" method="POST" enctype="multipart/form-data">
	        Nom : <input type="text" name="nom" required /><br />
	        Nationalité : <input type="text" name="nationalite" required /><br />
			Transporteur : <input type="text" name="transporteur" required /><br />
	        <input type="submit" value="Ajouter" />
	    </form>
    </div>
	</body>
</html>