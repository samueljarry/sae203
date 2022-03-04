<?php
    if ( (empty($_POST['prenom'])) || (empty($_POST['age'])) ) {
        header('Location: form2.php');
    }

    $newstr = filter_var($_POST['prenom'],
    FILTER_SANITIZE_STRING);
     
    echo $newstr;
    $newstr = filter_var($_POST['age'],
    FILTER_SANITIZE_STRING);
     
    echo $newstr;
    ?>