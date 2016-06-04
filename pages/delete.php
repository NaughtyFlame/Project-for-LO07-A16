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
            echo $_GET['no_pub'];
            $xml=  simplexml_load_file('pubilication.xml');
            $i=0;
            foreach ($xml->pubilication as $del ){
                if($del->attributes()==$_GET['no_pub']){
                    unset($xml->pubilication[$i]);
                }         
                $i++;
            }
            $xml->asXML('pubilication.xml');
            header("location:search.php");
            
        ?>
        </pre>
    </body>
</html>
