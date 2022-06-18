<?php
class user{
    public static function signup($user, $phone, $pass, $email)
    {
        $conn=database::get_connection();
        $sql="INSERT INTO `signin` (`username`, `password`, `email`, `phone`)
        VALUES ('$user', '$pass', '$email', '$phone');";
        $result=false;
        
          $conn->close();
          return $result;

    }
}
?>