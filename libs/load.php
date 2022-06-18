<?php
include_once 'libs/includes/mic.class.php';
include_once 'libs/includes/database.class.php';


function load_template($name){
     include __DIR__." ./../_templates/$name.php";

 }


function validate_cred($username,$password)
{
$query="SELECT * FROM `signin` where username='$username' and password='$password ";
$result=true;
print("hii");
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

