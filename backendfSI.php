<?php

$principal =$_REQUEST['principal'];
$rate =$_REQUEST['rate'];
$time =$_REQUEST['time'];

$res=($principal*$rate*$time)/100;



echo "*****************MAKE BY MR. UMESH PAL*************<BR>";


printf(" <br>YOUR PASSWPRD IS : %s",$principal);
printf(" <br>YOUR EMAIL IS : %s",$rate);
printf(" <br>YOUR MOBILE NO IS : %s",$time);
printf(" <br>YOUR MOBILE NO IS : %s",$res);



?>