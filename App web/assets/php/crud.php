<?php
    // mysqli_query() : is funtion Exécute une requête Sql sur la base de données
    // isset() : Détermine si une variable est déclarée et est différente de null
    // empty() : Détermine si une variable est vide


require "connection.php";


        $name = $_POST["name"];
        $prénom = $_POST["prénom"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $html = $_POST["html"];
        $css = $_POST["Css"];
        $js = $_POST["Js"];
        $php= $_POST["Php"];

/* insert data */


if(isset($_POST["submit"]))
    {


            if(empty($name) || empty($prénom) || empty($email) || empty($password))
            {
                echo "please write all informations";
            }
            else{
                if(strlen($name) <= 3 || strlen($prénom) <= 3)
                {
                    echo "name is small";
                }
                elseif(strlen($password) <= 6)
                {
                    echo "password is small";
                }
                else{

                    $sql_requet = "INSERT INTO student (nom,prenom,email,password_student,Html,Css,Javascript,Php)
                    VALUES ('$name','$prénom','$email','$password','$html','$css','$js','$php')";
            
                    if(mysqli_query($connection_DB,$sql_requet))
                    {
                        header('Location: ../../profil_st_pr.php');
                    }
                    else{
                        echo "errorrrrrrrr";
                    }
                }

            }
            

}

    /* delete data */

    $sql_requet = "DELETE FROM student WHERE id ='" . $_GET["id"] . "'";
    if(mysqli_query($connection_DB,$sql_requet))
    {
        // echo "succesfly";
        header('Location: ../../profil_st_pr.php');
    }
    else{
        echo "errorrrrrrrr";
    }


    /*     update data*/

    if(isset($_POST["update"]))
    {
        $id = $_GET["id"];

        echo $name ."<br/>";
        echo $prénom ."<br/>";
        echo $password ."<br/>";
        echo $email ."<br/>";
        echo $id ."<br/>";

        $sql_requet = "UPDATE student SET nom = '$name' , prenom = '$prénom' , password_student = '$password', email = '$email' WHERE id =$id ";
            if(mysqli_query($connection_DB,$sql_requet))
            {
                header('Location: ../../profil_st_pr.php');
            }
            else{
                echo "erroooor";
            }
    }

    
?>

