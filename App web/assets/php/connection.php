<?php

    // server with default setting (user 'root' with no password)
    // mysqli_connect() is funtion used for make connection betwen php and our database


    define('DB_SERVER','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','gestion_apprenents');

    $connection_DB = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
    if($connection_DB == true)
    {
        echo "its work <br/>";
    }
    else{
        die("its noooooooooooooot work" . mysqli_connect_error());
    }


?>