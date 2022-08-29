<?
// $servername="mysql.selfmade.ninja";
// $username="nithish";
// $password="hackerfeast12";
// $dbname="nithish_photogram";

// // Create connection
// $conn = new mysqli($servername, $username, $password);


// $sql = "SELECT  username, password FROM signin ";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row .
//   while($row = $result->fetch_assoc()) {
//     echo  $row["username"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo " \n Connected successfully";
include_once "libs/includes/user.class.php";
$user="log";
$mic1=new user1($user);
echo $mic1->getinstagram('log');


?>