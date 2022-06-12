<?php
class mic{
    private $brand;
    public $color;
    public $light;
    public $name;

    //Methods
    function __construct()
    {
        printf("dd \n");
    }
    function set_name($name) {
        return  $this->name = $name;

      }

    function getname(){
        return $this->name;
    }
     private function set_brand($name){
        echo "hello milf \n entered privte repo :  ";
        $this->brand=$name;
        return $this->brand;

    }
    public function set_brandproxy($name){
        return $this->set_brand($name);
    }
    public function setlight($name){
        print($name);
        print($this->light);

    }


}
// $mic1=new mic();
// $mic1->set_name('robo ');
// echo $mic1->getname()."\n";
// $mic1->set_brand('nnn');
// echo $mic1->getname1()."\n";


?>