<?php

$a =$_REQUEST['num1'];
$b =$_REQUEST['num2']; 
if($a>0)
{
while($a>0)
{
$a--;
$b++;
}
}
if($a<0)
{
while($a<0)
{
$a++;
$b--;
}
}
echo "sum is",$b;

?>