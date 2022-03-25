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
    </div> 

    <div id="marques">
        <input type="search" id="real" list="auteurs" name="marque" autocomplete="off" placeholder="Marque"/>
        <datalist id="auteurs">

<?php
    // On va afficher ici la datalist
    require 'lib_crud.inc.php';
    $co=connexionBD();
    genererDatalistMarque($co);
    deconnexionBD($co);
?>
</datalist>
</div>


    <div id="prix">
    <label for="prix_min"></label>
    <input type="number" id="prix_min" autocomplete="off" name="prix_min" placeholder="Prix minimum" value="0" data-parsley-type="number">



    <label for="prix_max"></label>
    <input type="number" id="prix_max" autocomplete="off" name="prix_max" value="10000" placeholder="Prix maximum" data-parsley-type="number">
    </div>

    <div id="formcolor">
        <label for="color">Couleur :</label>

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

        <label>
        <input type="radio" id="tout" name="color" value="%" checked="checked">
            <img src="couleurs/blanc.jpg">
        </label>
        
        </div>
    </div>

    <div id="formcategory">
        <label for="categorie">Catégorie :</label>
        <div id="categorie">
        <div class="categoryrow">
                <input type="radio" value="%" class="department" name="categorie">
                <label for="tout">Tout</label>
            </div>
            <div class="categoryrow">
                <input type="radio" value="veste" class="department" name="categorie">
                <label for="veste">Veste</label>
            </div>
            <div class="categoryrow">
                <input type="radio" value="Pantalon" class="department" name="categorie">
                <label for="pantalon">Pantalon</label>
            </div>
            <div class="categoryrow">
                <input type="radio" value="T-shirt" class="department" name="categorie">
                <label for="tshirt">T-shirt</label>
            </div>
            <div class="categoryrow">
                <input type="radio" value="Accessoire" class="department" name="categorie">
                <label for="accessoire">Accessoire</label>
            </div>
            <div class="categoryrow">
                <input type="radio" value="Chemise" class="department" name="categorie">
                <label for="chemise">Chemise</label>
            </div>

            <div class="categoryrow">
                <input type="radio" value="Sweat" class="department" name="categorie">
                <label for="sweat">Sweatshirts</label>
            </div>

            <div class="categoryrow">
                <input type="radio" value="Basket" class="department" name="categorie">
                <label for="chaussure">Chaussures</label>
            </div>

            <div class="categoryrow">
                <input type="radio" value="%" id="tout-c" class="department" name="categorie" checked="checked">
            </div>

        </div>
    </div>

    <div id="formsize">
        <label for="taille">Taille</label>
        <div id="taille">

            <div class="categoryrow">
                <input type="radio" value="%" class="department" name="taille">
                <label for="tout">Tout</label>
            </div>

            <div class="categoryrow">
                <input type="radio" id="S" value="S" name="taille" class="department">
                <label for="S">XS / S</label>
            </div>
            <div class="categoryrow">
                <input type="radio" id="M" value="M" name="taille" class="department">
                <label for="M">M</label>
            </div>
            <div class="categoryrow">
                <input type="radio" id="L" value="L" name="taille" class="department">
                <label for="L">L / XL </label>
            </div>

            <div class="categoryrow">
                <input type="radio" id="tout-t" value="%" name="taille" class="department" checked="checked">
            </div>
            
        </div>
    </div>

    <input type="submit"></input>

</form>
</div>
</main>

</html>