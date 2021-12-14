<?php

$name1 =$_REQUEST['num1'];
$name2 =$_REQUEST['num2'];

$rem=($name1/$name2-(int))($name1/$name2)*$name2;
echo "*****************MAKE BY MR. UMESH PAL*************<BR>";

echo "<br>******************************<BR>";

printf(" TOTAL SUM : %s",$rem);
?>