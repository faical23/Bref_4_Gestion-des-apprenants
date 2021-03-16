<?php

    require "connection.php";

    $email = $_POST["email"];
    $password = $_POST["password"];


    $sql_requet = mysqli_query($connection_DB,"SELECT * FROM  position WHERE email='$email' AND password = '$password' ");


    if(mysqli_num_rows($sql_requet) ==  1)
    {

        foreach($sql_requet as $value){

            $position_user = $value["position"];
            $id_user = $value["id_user"];



        }
        $sql_requet_posiiton = mysqli_query($connection_DB,"SELECT * FROM  $position_user WHERE id = '$id_user'");

        if(mysqli_num_rows($sql_requet_posiiton ) ==  1 )
        {
            $row = mysqli_fetch_array($sql_requet_posiiton);

            echo "id = " . $row["id"] . "</br>";
            echo "position = " . $position_user . "</br>";

            $_SESSION["id"] = $row["id"];
            $_SESSION["position"] = $position_user;
            // echo $_SESSION["id"] ."</br>";
            // echo $_SESSION["position"] ."</br>";
            header('Location: ../../profil_st_pr.php');     




        }
        else{
            echo "erroooooooooooooor";
        }

    }
    else{
        echo "this email is not exist";
    }







?>