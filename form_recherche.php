<?php
    require('header.php')
?>


<html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="parsley.min.js"></script>
<link rel="stylesheet" href="parsley.css">

<main>
<div id="filtres">
<form action="reponse_recherche.php" method="post" data-parsley-validate>
    <div id="search">
        <label for="nom-article"></label>
        <input type="search" autocomplete="off" list="nom-article" id="nom-article" name="nom-article" placeholder="Nom de l'article"/>
        <datalist id="nom-article">
            <option value="Test">
        </datalist>

    </div> 


    <input type="search" id="real" list="auteurs" name="marque" autocomplete="off" />
<datalist id="auteurs">
<?php
    // On va afficher ici la datalist
    require 'lib_crud.inc.php';
    $co=connexionBD();
    genererDatalistMarque($co);
    deconnexionBD($co);
?>
</datalist>


    <div id="prix">
    <label for="prix_min"></label>
    <input type="number" id="prix_min" autocomplete="off" name="prix_min" placeholder="Prix minimum" value="0" data-parsley-type="number">



    <label for="prix_max"></label>
    <input type="number" id="prix_max" autocomplete="off" name="prix_max" value="10000" placeholder="Prix maximum" data-parsley-type="number">
    </div>

    <div id="formcolor">
        <label for="couleur">Couleur :</label>

        <div id="colorpicker">            
            
        <label>
            <input type="radio" id="beige" name="color" value="beige">
            <img src="couleurs/beige.jpg">
        </label>

        <label>
            <input type="radio" id="blanc" name="color" value="blanc">
            <img src="couleurs/blanc.jpg">
        </label>
            
        <label>
        <input type="radio" id="bleuclair" name="color" value="bleuciel">
            <img src="couleurs/bleuciel.jpg">
        </label>

        <label>
            <input type="radio" id="gris" name="color" value="gris">
            <img src="couleurs/gris.jpg">
        </label>

        <label>
        <input type="radio" id="jaune" name="color" value="jaune">
            <img src="couleurs/jaune.jpg">
        </label>

        <label>
        <input type="radio" id="lilas" name="color" value="lilas">
            <img src="couleurs/lilas.jpg">
        </label>

        <label>
        <input type="radio" id="navy" name="color" value="navy">
            <img src="couleurs/navy.jpg">
        </label>

        <label>
        <input type="radio" id="noir" name="color" value="noir">
            <img src="couleurs/noir.jpg">
        </label>

        <label>
        <input type="radio" id="rouge" name="color" value="rouge">
            <img src="couleurs/rouge.jpg">
        </label>

        <label>
        <input type="radio" id="vert" name="color" value="vert">
            <img src="couleurs/vert.jpg">
        </label>
        
        </div>
    </div>

    <div id="formcategory">
        <label for="categorie">Catégorie :</label>
        <div id="categorie">
            <div class="categoryrow">
                <input type="checkbox" id="veste" class="department">
                <label for="veste">Veste</label>
            </div>
            <div class="categoryrow">
                <input type="checkbox" id="pantalon" class="department">
                <label for="pantalon">Pantalon</label>
            </div>
            <div class="categoryrow">
                <input type="checkbox" id="jean" class="department">
                <label for="jean">Jean</label>
            </div>
            <div class="categoryrow">
                <input type="checkbox" id="veste" class="department">
                <label for="accessoire">Accessoire</label>
            </div>
            <label for="categorie"></label>
        </div>
    </div>

    <div id="formsize">
        <label for="categorie">Taille</label>
        <div id="categorie">
            <div class="categoryrow">
                <input type="checkbox" id="XS" class="department">
                <label for="XS">XS</label>
            </div>
            <div class="categoryrow">
                <input type="checkbox" id="S" class="department">
                <label for="S">S</label>
            </div>
            <div class="categoryrow">
                <input type="checkbox" id="M" class="department">
                <label for="M">M</label>
            </div>
            <div class="categoryrow">
                <input type="checkbox" id="L" class="department">
                <label for="L">L</label>
            </div>
            <div class="categoryrow">
                <input type="checkbox" id="XL" class="department">
                <label for="XL">XL</label>
            </div>
            
        </div>
    </div>

    <input type="submit"></input>

</form>
</div>
</main>

</html>