<?php
class database{
    public static $conn=null;
    public static $connect=null;
    public static function get_connection(){
        if (database::$conn == null){
            $servername="mysql.selfmade.ninja";
            $username="nithish";
            $password="hackerfeast12";
            $dbname="nithish_photogram";
            //conection - intialized
           $connect = new mysqli($servername, $username, $password, $dbname);
           //checking the connection
           if ($connect->connect_error) {
               die("Connection failed: " . $connect->connect_error);
           }
           else {
            printf("New connection establishing \n ");
            database::$conn=$connect;
            return database::$conn;
           }
           

        }
        else{
            printf("exiting connection");
            return database::$conn;
        }
    }


}

?>