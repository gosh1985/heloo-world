<?php
$count = 0;
for($i =1; $i<25+1; $i++){
	$count = $count + $i;
}
echo $count;
echo '<br>';
$count2 = 0;
$j = 1;
while($j<25){
	$count2 = $count2 + $j;
	$j++;
}
echo $count2;
echo '<br>';

$n = rand(1,10);
echo 'rand is...'.$n;
echo'<br>';
for($i =0;$i<$n+1;$i++){
	echo $i*$i.'<br>';
}
echo '<br>';
echo '<br>';

echo'<ul>';
for($i =1; $i<10; $i++){
echo'<li>';
	echo'<a href="#">Кнопка'. $i;
	echo'</a></li> ';
}
echo'</ul>';
?>