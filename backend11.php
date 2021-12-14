<?php

$hindi =$_REQUEST['hindi'];
$english =$_REQUEST['english'];
$math =$_REQUEST['math'];
$science =$_REQUEST['science'];
$civics =$_REQUEST['civics'];
$res =$hindi+$english+$math+$science+$civics;
echo "*****************MAKE BY MR. UMESH PAL*************<BR>";
printf(" <BR>TOTAL HINFDI MARKS : %s",$hindi);
printf(" <BR>TOTAL ENGLISH MARKS : %s",$english);
printf(" <BR>TOTAL MATH : %s",$math);
printf(" <BR>TOTAL SCIENCE MARKS : %s",$science);
printf(" <BR>TOTAL CIVICS MARKS : %s",$civics);
echo "<br><br>********************************************<BR>";
printf(" <BR>SUM OF ALL SUBJECT MARKS : %s",$res);
echo "<br><br>******************************************<BR>";

printf(" <br><BR>AVERAGE OF EACH SUBJECT : %.2f",$res/5);
?>