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

        $regix_name = '/^[a-zA-Z ]+$/';
        $regix_email = '/^[^ ]+@[^ ]+\.[a-z]{2,3}$/';
        $regix_password = '/^[A-Za-z0-9]\w{5,}$/';




/* insert data */


if(isset($_POST["submit"]))
    {


            if(!empty($name ) && !empty($prenom ) && !empty($email ) && !empty($password ) )
            {

                if(preg_match($regix_name,$name) && preg_match($regix_name,$prenom) && preg_match($regix_email,$email) && preg_match($regix_password ,$password))
                 {
                    if(empty($html ) && empty($css ) && empty($js ) && empty($php ))
                    {
                        $html = 'NULL';
                        $css = 'NULL';
                        $js = 'NULL';
                        $php = 'NULL';
                    }
                    
                    $sql_requet = "INSERT INTO student (nom,prenom,email,password,Html,Css,Javascript,Php) VALUES ('$name','$prenom','$email','$password','$html','$css','$js','$php')";

                    // $sql_requet_position = "INSERT INTO position (id_user,email,password,position) VALUES (66,'$email','$password','student')";
                    // mysqli_query($connection_DB,$sql_requet_position);

                    if(mysqli_query($connection_DB,$sql_requet))
                    {
                        // $student = mysqli_query($connection_DB,"SELECT * FROM student");
                        // $row = mysqli_fetch_array($student);
                        
                        $from = "wecode@gmail.com";
                        $headers = "From : WECODE SCHOOL";
                        $message = "YOUR PASSWORD ACCOUNT IN WECODE IS : $password";
                        $to_email = "faissalabr@gmail.com";
                        mail($to_email,$from,$message,$headers);

                        

                        $last_id = mysqli_insert_id($connection_DB);
                        echo "insert work </br>" ;
                        echo "id = " . $last_id ;
                        $sql_requet = "INSERT INTO position (id_user,email,password,position) VALUES ('$last_id','$email','$password','student')";
                        mysqli_query($connection_DB,$sql_requet);
                        header('Location: ../../profil_st_pr.php?id=&name=&prenom=&email=&password=&html=&css=&js=&php&btn=');  

                    }   
                    else{
                        // header('Location: ../../profil_st_pr.php?id=&name=&prenom=&email=&password=&html=&css=&js=&php&btn=');     
                        echo "mkhdamach";
                    }
                }
                else{
                    // header('Location: ../../profil_st_pr.php?id=&name=&prenom=&email=&password=&html=&css=&js=&php&btn=');     
                    echo " erer" ;
                }


            }
            else{
                // header('Location: ../../profil_st_pr.php?id=&name=&prenom=&email=&password=&html=&css=&js=&php&btn=');     
                echo "errrrooooooooooor";
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
        
        $sql_requet = "UPDATE student SET nom = '$name' , prenom = '$prenom' , password = '$password', email = '$email', Html = '$html', Css = '$css' , javascript = '$js' , Php='$php'  WHERE id =$id ";
            if(mysqli_query($connection_DB,$sql_requet))
            {
                header('Location: ../../profil_st_pr.php?id=&name=&prenom=&email=&password=&html=&css=&js=&php=&btn=');
            }
            else{
                echo "mkhdamach";
            }
     
    }

    
?>

