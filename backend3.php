<?php

$name1 =$_REQUEST['name1'];
$name2 =$_REQUEST['name2'];


$sum =$name1+$name2;
$sub =$name1-$name2;
$mul =$name1*$name2;
$div =$name1/$name2;


echo "*****************MAKE BY MR. UMESH PAL*************<BR>";
printf("<br> FIRST NUMBER IS : %s",$name1);
printf("<br> SECOND NUMBER IS  : %s",$name2);
echo "<br/><br>*****************OPERATION (calculate)OF TWO NUMBER *************<BR>";

printf("<br> TOTAL SUM : %s",$sum);

printf(" <br>TOTAL substraction : %s",$sub);
printf(" <br>TOTAL multification : %s",$mul);
printf(" <br>TOTAL dividation : %s",$div);


?>