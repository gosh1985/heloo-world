<?php
define('MAX',50);
define('MIN',10);
$a = rand(1,100);
echo $a . '<br>';
if($a< MAX && $a>MIN){
	echo'+';
}else{
	echo'-';
}
echo '<br>';

$x = rand(1,20);
$y = rand(1,20);
$z = rand(1,20);
echo $x .', '. $y .', '. $z;
$average = ($x + $y + $z)/3;
echo '<br>';
$string = 'Average value is ';

if ($x == $average || $y == $average || $z == $average){
	$string = $string .' ... But there is some error with that value  ';
echo $string;
echo $average;
}else{
	echo $string;
   echo $average;
}
?>