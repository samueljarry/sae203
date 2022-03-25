<?php
    require('header.php')
?>


    <div class="background"></div>

<main id="index">
        <h1>Collection Spring-Summer 2022</h1>

        <main id="listing1">
        <?php

        require 'lib_crud.inc.php';
        $co=connexionBD() ;
        afficherCatalogueIndex($co);
        deconnexionBD($co);



?>
        </main>
        <div id="voirplus">
            <a href="listing.php">Voir plus</a>
        </div>
</main>

</html>