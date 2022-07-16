 <?php
class mic
{
    private $brand;
    public $color;
    public $light;
    public $name;

    //Methods
    public function __construct()
    {
        printf("dd \n");
    }
    public function set_name($name)
    {
        return  $this->name = $name;
    }

    public function getname()
    {
        return $this->name;
    }
    private function set_brand($name)
    {
        echo "hello milf \n entered privte repo :  ";
        $this->brand=$name;
        return $this->brand;
    }
    public function set_brandproxy($name)
    {
        return $this->set_brand($name);
    }
    public function setlight($name)
    {
        print($name);
        print($this->light);
    }
    public function __destruct()
    {
        printf(" \ndestructor !!");
    }
}




// $mic1=new mic();
// $mic1->set_name('robo ');
// echo $mic1->getname()."\n";
// $mic1->set_brand('nnn');
// echo $mic1->getname1()."\n";

// 2nd tried 

class user{
   public $username;
   public static $pass;
   private $name;
   
   public function __construct()
   {
    printf("constructor is called \n ");
   }
 private function set_name($name) {
    echo "entered the private repo ";

    return  $this->name = $name;
  }
  public function set_nameproxy($name){
    return $this-> set_name($name);
  }
  function getname(){
    return $this->name;
}
public static function cread($username,$pass){
    printf("static site loaded  ".$username." ".$pass);
    

}
  function __destruct()
{
    printf("destructing \n");
}

   }



?>
