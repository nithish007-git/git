<?
include "libs/load.php";
$user = "loga";
$pass="loga";
$result=null;
$sql=user1::login($user,$pass);
if($_GET['logout']){
    session::destroy();
}
if(session::get('is_loggedin',true)){
    $data=session::get('session_user',true);
    print("welcome Back"."\n".$user);
    $result=$data;

}else{
    print("no sessiona found");
    $result=user1::login($user,$pass);


}
if($result){
    echo "login success";
    session::set('is_loggedin',true);
    session::set('session_user',$result);
}
else{
    echo "failed";
}