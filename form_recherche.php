<?php
    require('header.php')
?>


<html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="parsley.min.js"></script>
<link rel="stylesheet" href="parsley.css">

<main>
<div id="filtres">
<form action="form_recherche.php" data-parsley-validate>
    <div id="search">
        <label for="nom-article"></label>
        <input type="search" autocomplete="off" list="nom-article" id="nom-article" name="nom-article" placeholder="Nom de l'article"/>
        <datalist id="nom-article">
            <option value="Test">
        </datalist>

    </div>

    <div id="prix">
    <label for="prix_min"></label>
    <input type="number" id="prix_min" autocomplete="off" name="prix_min" placeholder="Prix minimum" data-parsley-type="number">



    <label for="prix_max"></label>
    <input type="number" id="prix_max" autocomplete="off" name="prix_max" placeholder="Prix maximum" data-parsley-type="number">
    </div>

    <div id="formcolor">
        <label for="couleur">Couleur :</label>

        <div id="colorpicker">
            
            
            <input type="checkbox" id="noir" class="color">
            
            <input type="checkbox" id="blanc" class="color">

            <input type="checkbox" id="rouge" class="color">

            <input type="checkbox" id="vert" class="color">

            <input type="checkbox" id="navy" class="color">

            <input type="checkbox" id="navy" class="color">

            <input type="checkbox" id="navy" class="color">

            <input type="checkbox" id="navy" class="color">

            <input type="checkbox" id="navy" class="color">

            <input type="checkbox" id="navy" class="color">
        
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

test