<?php
include_once 'libs/includes/mic.class.php';
include_once 'libs/includes/database.class.php';
include_once 'libs/includes/Sessions.class.php';
include_once 'libs/includes/user.class.php';


function load_template($name){

     include __DIR__." ./../_templates/$name.php";

 }


function validate_cred($user,$pass)
{
$servername="mysql.selfmade.ninja";
$username="nithish";
$password="hackerfeast12";
$dbname="nithish_photogram";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli($servername, $username,$password, $dbname);
    
    $query = "SELECT username,password FROM signin";
    
    $result = $mysqli->query($query);
    
    /* fetch object array */
    while ($row = $result->fetch_row()) {
       if($row[1]==md5($pass)){
          if($row[0]==$user)
          {
        
            return $result=true;
          }
    
       }
       printf("%d",$user);
    
    
    }
    
}


// function signup($user, $phone, $pass, $email)
// {
//   $conn=database::get_connection();

//     $sql="INSERT INTO `signin` (`username`, `password`, `email`, `phone`)
// VALUES ('$user', '$pass', '$email', '$phone');";
// $result=false;

//   $conn->close();
//   return $result;
// }


?>

