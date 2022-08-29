<?php
require "database.class.php";
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


    public function __construct($username)
    {
        $this->conn = database::get_connection();
        $this->username=$username;
        $sql = "SELECT `id` FROM `users` WHERE `username`= '$username' LIMIT 1";
        $result = $this->conn->query($sql); // giving the sql query to the connection .
        if($result->num_rows){
            $row=$result->fetch_assoc();
            $this->id=$row["id"];
        }
        else throw new Exception("username doesn't exist ") ;
    }
    private function getdata($var){
        $this->conn = database::get_connection();
        $sql="SELECT `$var` FROM `users` WHERE id =$this->id";
        $result=$this->conn->query($sql);
        if($result->num_rows>0){
            $row=$result->fetch_assoc()["$var"];
            return $row;
        }
        else return Null;

    }

    private function setdata($var,$data){
        $this->conn = database::get_connection();
        $id=$this->id;
        $sql="UPDATE users SET $var=$data WHERE id=$id";
        $result=$this->conn->query($sql);
        if ($this->conn->query($sql)){
            return true;
        }
        else return false;
    }

    public function autheticate(){

    }
    public function setbio(){


        
    }
    public function getbio($bio){
        return $this->getdata($bio);
    }
    public function setdob($year,$day,$month){
        if(checkdate($year,$day,$month))
        {
            return $this->setdata($year,$day,$month);

        }
        

    }
    public function getdob($DOB){
        return $this->getdata('DOB');
    }
    public function setinstagram($instagram){
        $data="heleo";
        return $this->setdata($instagram,$data);

        
    }
    public function getinstagram($instagram){
        return $this->getdata('instagram');
        echo "\n";
        
    }
    public function gettwitter($link){
        return $this->getdata('twitter',$link);
        
        
    }
    public function settwitter($twitter){
        $data="heleo";
        return $this->setdata($twitter,$data);
        
        
    }
    public function getfacebook($facebook){
        return $this->getdata($facebook);
        
    }
    public function setfacbook($facebook){
        $data="heleo";
        return $this->setdata($facebook,$data);

    }

    public  function setavatar($avatar){
        $data="heleo";
        return $this->setdata($avatar,$data);

    }
    public function getavatar($avatar){
        return $this->getdata($avatar);

    }
        
    }

