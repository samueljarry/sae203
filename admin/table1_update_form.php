<!DOCTYPE html>
<html>
<head>
	<title>SAE203</title>
</head>
<body style="font-family:sans-serif;">
    <a href="../index.php">Accueil</a> | <a href="table1_gestion.php">Gestion</a>
	<hr>
    <h1>Modifier un article</h1>
    <hr />
    <?php
        require '../lib_crud.inc.php';

        $id=$_GET['num'];
        $co=connexionBD();
        $article=getArticle($co, $id);
        //var_dump($article);
        deconnexionBD($co);
    ?>
    <form action="table1_update_valide.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="num" value="<?= $id; ?>" />
        Nom : <input type="text" name="nom" value="<?php echo $article['article_nom']; ?>" required/><br />
        Prix : <input type="number" name="prix" min="0.00" max="10000.00" step="1" value="<?php echo $article['article_prix']; ?>" required /><br />
        Catégorie : <input type="text" name="categorie" value="<?php echo $article['article_categorie']; ?>" required/><br />
        Couleur : <input type="text" name="couleur" value="couleurs/<?php echo $article['article_couleur']; ?>.jpg" required/><br />
        Tailles : <input type="text" name="taille" value="<?php echo $article['article_taille']; ?>" required/><br />
        Photo : <input type="file" name="photo" required /><br />
        Marque : <select name="marque" required>
        <?php
            $co=connexionBD();
            afficherMarqueOptionsSelectionne($co, $article['_marque_id']);
            deconnexionBD($co);
        ?>
        </select><br />
        <input type="submit" value="Modifier" />
    </form>
</body>
</html>