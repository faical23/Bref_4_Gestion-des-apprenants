<?php

    require "connection.php";

    $email = $_POST["email"];
    $password = $_POST["password"];


    $sql_requet =mysqli_query($connection_DB,"SELECT * FROM student WHERE email='$email'");


        if(mysqli_num_rows($sql_requet) ==  1 )
        {
            foreach($sql_requet as $value){

                echo "this email is exist <br/>";
                echo $value["email"];
                echo $value["nom"];
                echo $value["prenom"];
                echo $value["password_student"];
                echo $value["Html"];
                echo $value["Css"];
                echo $value["Javascript"];
                echo $value["Php"];
            }

            
        }
        else{
            echo "this email is not exist";
        }



?>