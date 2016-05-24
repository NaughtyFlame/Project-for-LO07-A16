
<?php

define('LO07_DB_USER',     'shimengj');
define('LO07_DB_PASSWORD', 'smjdb');
define('LO07_DB_HOST',      'localhost');
define('LO07_DB_NAME',       'LO07_projet_final');

$database = mysqli_connect(LO07_DB_HOST, LO07_DB_USER, LO07_DB_PASSWORD, LO07_DB_NAME) or
        die('impossible de se connecter a MySQL:'+  mysqli_connect_error()); 



?>