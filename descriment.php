<?php
$a = rand(-50,50);
$b = rand(-50,50);
$c = rand(-50,50);
echo $a . " " .$b. " " .$c. '<br>'; 
$d = ($b*$b)-(4*$a*$c);
echo 'd= '.$d.'<br>';
if($d > 0){
$x1 = ((-$b)+sqrt($d))/(2*$a);
echo 'x1 ='.$x1 .'<br>';
$x2 = ((-$b)-sqrt($d))/(2*$a);
echo 'x2 ='.$x2;
}elseif($d = 0){
$y1 = ((-$b)+sqrt($d))/(2*$a);
echo 'x1 =  '. $y1.'<br>';

}else{
echo "NOTHING!";
}
?>

3