<?php

$num1 = 10;
$num2 = 20;
$num3 = 30;
echo "Number 1 =".$num1 ."<br>";
echo "Number 2=".$num2."<br>";
echo "Number 3 =".$num3."<br>";
 if ($num1>$num2 && $num1>$num3) {
 	echo "Number 1 is largest";
 }
 elseif ($num2>$num1 && $num2>$num3) {
 	echo "Number 2 is largest";
 }
 else{
 	echo "Number 3 is largest";
 }

?>