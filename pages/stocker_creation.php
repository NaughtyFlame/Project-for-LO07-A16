<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once("../sql/link_to_myadmin.php");
        
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        
        $requete="INSERT INTO utilisation (username,pass,email,firstname,lastname)"
                . "VALUES('$username','$password','$email','$firstname','$lastname')";
        $result=  mysqli_query($database, $requete);
        if($result){
            echo"bienvenu";
        }else{
            echo("sorry, are u kidding me?\n");
            echo(mysqli_errno($database));
        }
        mysqli_close($database);
        ?>
    </body>
</html>