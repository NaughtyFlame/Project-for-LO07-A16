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
        <pre>
        <?php
            require_once("../sql/link_to_myadmin.php");
            if(!isset($_POST['submit'])){  
                exit('fail!');  
            } 
            $username =$_POST['username'];
            $password = md5($_POST['password']);
            $requete = "select username,pass,firstname from utilisation where username='$username'"
                    . " and pass='$password' limit 1";
            $result=  mysqli_query($database, $requete);
            $row=  mysqli_num_rows($result);
            if($row){
                $ligne = mysqli_fetch_array($result,MYSQLI_NUM);
                session_start();
                $_SESSION['firstname']= $ligne[2];
                $_SESSION['password']=$ligne[1];
                $_SESSION['username']=$ligne[0];
                echo ("bonjour");
                header("location:search.php");
            }
            else{
                exit("login fail please "
                        . "<a href='javascript:history.back(-1);'>GO Back</a> "
                        . "to try again");
            }
            /*
            if($result = mysql_fetch_array($check)){
                session_start();
                $_SESSION['firstname']= $firstname;
                $_SESSION['username']=$result['username'];
                echo $firstname;
            }else{
                exit("KO");
            }*/
            
        ?>
        </pre>
    </body>
</html>
