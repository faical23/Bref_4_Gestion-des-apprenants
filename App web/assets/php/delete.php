<?php
    require "connection.php";

    /* delete data */

    $sql_requet = "DELETE FROM student WHERE id ='" . $_GET["id"] . "'";
    if(mysqli_query($connection_DB,$sql_requet))
    {
        // echo "succesfly";
        header('Location: ../../profil_st_pr.php?id=&name=&prenom=&email=&password=&html=&css=&js=&php&btn=');
    }
    else{
        echo "errorrrrrrrr";
    }
    

?>