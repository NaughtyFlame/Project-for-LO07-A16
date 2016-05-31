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
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        require_once("../sql/link_to_myadmin.php");
        
        $organisation=$_POST['organisation'];
        $password=md5($_POST['password']);
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        
        $requete="INSERT INTO utilisation (organisation,pass,email,firstname,lastname)"
                . "VALUES('$organisation','$password','$email','$firstname','$lastname')";
        $result=  mysqli_query($database, $requete);
        if($result){
            header("../index.html");
            echo("<a class='btn btn-default' href='../index.html'>Back to Home Page</a>");
        }else{
            echo("sorry, are u kidding me?\n");
            echo(mysqli_errno($database));
        }
        mysqli_close($database);
        ?>
    </body>
</html>