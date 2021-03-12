<?php
    // mysqli_query() : is funtion Exécute une requête Sql sur la base de données
    // isset() : Détermine si une variable est déclarée et est différente de null
    // empty() : Détermine si une variable est vide


require "connection.php";

        $id = $_POST["id_user"];
        $name = $_POST["name"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $html = $_POST["html"];
        $css = $_POST["Css"];
        $js = $_POST["Js"];
        $php= $_POST["Php"];

/* insert data */


if(isset($_POST["submit"]))
    {


                    $sql_requet = "INSERT INTO student (nom,prenom,email,password_student,Html,Css,Javascript,Php) VALUES ('$name','$prenom','$email','$password','$html','$css','$js','$php')";
            
                    if(mysqli_query($connection_DB,$sql_requet))
                    {
                        header('Location: ../../profil_st_pr.php?id=&name=&prenom=&email=&password=&html=&css=&js=&php&btn=');     
                    }   
                    else{
                        echo "mkhdamach";
                        // echo $name;
                        // echo $prenom;
                        // echo $email;
                        // echo $password;
                        // echo $html;
                        // echo $css;
                        // echo $js;
                        // echo $php;

                    }

}




    /*     update data*/

    

    if(isset($_POST["update"]))
    {
                        echo $id . "</br>";
                        echo $name . "</br>";
                        echo $prenom . "</br>";
                        echo $email . "</br>";
                        echo $password . "</br>";
                        echo $html . "</br>";
                        echo $css . "</br>";
                        echo $js . "</br>";
                        echo $php . "</br>";
        
        $sql_requet = "UPDATE student SET nom = '$name' , prenom = '$prenom' , password_student = '$password', email = '$email', Html = '$html', Css = '$css' , javascript = '$js' , Php='$php'  WHERE id =$id ";
            if(mysqli_query($connection_DB,$sql_requet))
            {
                header('Location: ../../profil_st_pr.php?id=&name=&prenom=&email=&password=&html=&css=&js=&php=&btn=');
                // echo "khdama";
            }
            else{
                echo "mkhdamach";
            }
     
    }

    
?>

