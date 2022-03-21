<?php
    require('header.php');
?>

<body>
<main id="listing">
    <!--
    <div class="article">
            <img src="images/id1.jpg">
            <div class="infos">
                <p> Veiled Puffer Jacket </p>
                <h3>170€</h3>
                <img src=couleurs/noir.jpg>
            </div>
    </div>
-->


<?php

require 'lib_crud.inc.php';

$co=connexionBD() ;
afficherCatalogue($co) ;
deconnexionBD($co) ;

?>

</main>
</body>