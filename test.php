 <?php
include_once 'libs/load.php' ;
$mic1=new mic();
$mic1->light="rd";
echo $mic1->light."\n";
echo $mic1->setlight("bluee");
$mic1->name = 'red';
echo $mic1->name."\n";
?>
