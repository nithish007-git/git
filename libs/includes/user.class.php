<?php
class user1{
    public static function signup($user, $phone, $pass, $email)
    {
        $pass=md5(md5(strrev($pass)));
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
    public static function login($user,$pass)
    {
        $pass =md5($pass); //hashing password
        $query =" SELECT * FROM `signin` WHERE `username` = '$user'"; //query to fetch 
        $conn = database::get_connection();//establish the connection
        $result=$conn->query($query);
        if($result->num_rows==1){ //checking the rows
            //fetching the arrays
             //checking the hashed password
                $row=$result->fetch_assoc();
                if($row['password']==$pass){
                    return $row;

                }
                else{
                    return false;
                }
        }
        else{
                return false;
            }
        }



    
        
    }

