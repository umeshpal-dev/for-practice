<?php

$name1 =$_REQUEST['name1'];
$name2 =$_REQUEST['name2'];
$name3 =$_REQUEST['name3'];

$res =$name1+$name2+$name3;
echo "*****************MAKE BY MR. UMESH PAL*************<BR>";
printf(" <br>FIRST NUMBER IS  : %s",$name1);
printf(" <br>SECOND NUMBER IS :  %s",$name2);
printf(" <br>THIRD NUMBER IS : %s",$name3);
echo "<br>******************************<BR>";

printf(" TOTAL SUM : %s",$res);
?>