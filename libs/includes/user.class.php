<?php
class user1{
    public static function signup($user, $phone, $pass, $email)
    {
        $pass=md5($pass);
        echo $pass;
        echo $email;
        $conn=database::get_connection();

        $sql = "INSERT INTO `signin` (`username`, `email`, `password`, `phone`)
        VALUES ('new1', 'new1@gmail.com', '1112@e3kj', '09992828')";
        $result=True;


         $conn->close();
        return $result;

        
          

    }

    public function __construct($username)
    {
        $this->conn = database::get_connection();
        $this->conn->query();

    }
    public function autheticate(){

    }
    public function setbio(){
        
    }
    public static function login(){
        $sql = "SELECT  username, password FROM signin";
        $result = mysqli_query(database::$connect, $sql);
        echo $result;
        
    }
}
