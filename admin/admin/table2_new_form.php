<!DOCTYPE html>
<html>
	<head>
	    <title>SAE203</title>
	</head>
	<body style="font-family:sans-serif;">
	    <a href="../index.php">Accueil</a> | <a href="admin.php">Gestion</a>
	    <hr />
	    <h1>Ajouter un article</h1>
	    <hr />
	    <form action="table2_new_valide.php" method="POST" enctype="multipart/form-data">
	        Nom : <input type="text" name="nom" required /><br />
	        Nationalité : <input type="text" name="nationalite" required /><br />
			Transporteur : <input type="text" name="transporteur" required /><br />
	        <input type="submit" value="Ajouter" />
	    </form>
	</body>
</html>