<?php

    require "connection.php";

    $email = $_POST["email"];
    $password = $_POST["password"];
    // $position = $_POST["input_posiiton"];
    // echo $position . "</br>";

    $sql_requet = mysqli_query($connection_DB,"SELECT * FROM  position WHERE email='$email' AND password = '$password' ");


    if(mysqli_num_rows($sql_requet) ==  1)
    {
        echo "this email is exist in table position </br>";

        foreach($sql_requet as $value){

            $user_password = $value["password"];
            echo $user_password . " == " . $password . "</br>";
            $position_user = $value["position"];
            $id_user = $value["id_user"];

            echo $value["email"] . "</br>";
            echo $value["id_user"] . "</br>";
            echo $value["password"] . "</br>";
            echo $value["position"] . "</br>";

        }
        $sql_requet_posiiton = mysqli_query($connection_DB,"SELECT * FROM  $position_user WHERE id = '$id_user'");

        if(mysqli_num_rows($sql_requet_posiiton ) ==  1 )
        {
            echo "this email is exist in table  $position_user </br>";
            $row = mysqli_fetch_assoc($sql_requet_posiiton);
            
            echo $row["nom"]."</br>";
            echo $row["id"];
            for($i = 0 ; $i < 9 ; $i++)
            {
                echo $row[$i] . "</br>";
            }

        }
        else{
            echo "this email is not exist";
        }

    }
    else{
        echo "ist not work";
    }



    // $position = "formateur";

    // $id_user = 1;

    // $sql_requet_posiiton = mysqli_query($connection_DB,"SELECT * FROM  $position_user WHERE id = '$id_user'");


    //     if(mysqli_num_rows($sql_requet_posiiton ) ==  1 )
    //     {
    //         echo "this email is exist";

    //         // if($user_password === $password)
    //         // {
    //         //     echo " </br> this email is exist";
    //         //     // header('Location: ../../profil_st_pr.php?id=&name=&prenom=&email=&password=&html=&css=&js=&php&btn=');     
    
    //         // }
    //         // else{
    //         //     echo " </br> password incorrect";
    //         // }

            
    //     }
    //     else{
    //         echo "this email is not exist";
    //     }



?>