<?php 
$pass=isset($_GET['pass']) ? $_GET('pass') : "random pass";
echo(md5($pass));
?>