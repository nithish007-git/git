<?php
 function load_template($name){
     include __DIR__." ./../_templates/$name.php";

 }


function validate_cred($username,$password)
{
    if ($username =="nithish@gmail.com" and $password=="password"){
        return true;
    }else{

        return false;
    }
}


function signup($username, $phone, $password, $email)
{
    $servername="mysql.selfmade.ninja";
    $username="nithish";
    $password="hackerfeast12";
    $dbname="nithish_photogram";
}
$conn = new mysqli($servername,$username, $password,$dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


$sql="INSERT INTO `signin` (`username`, `password`, `email`, `phone`)
VALUES ('$username', '$password', '$email', '$phone');";
$result=false;

if ($conn->query($sql) === true) {
  $result=true;
} else {
    $result=false;
    printf("HELLO");
}

$conn->close();
?>

