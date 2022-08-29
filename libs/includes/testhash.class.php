<?php 
include 'libs/load.php' ;
// $pass=isset($_GET['pass']) ? $_GET('pass') : "random pass";
// echo(md5($pass));
$username = "nithish";
$mic1= new user1($username);
$mic1->__construct($username);
echo $mic1;


?>