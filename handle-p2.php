<?php 

#echo getType($_REQUEST);
#print_r($_REQUEST); //super global variable(predefined in php)

$name =$_REQUEST['name'];
//echo $name;
//$name1=$_REQUEST['name1'];

//$res=$name+$name1;

printf("hy WELCOME ! Mr. %s",$name);

?>