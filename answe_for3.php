
<?php
$a = 152; $b = '152'; $c = 'London'; $d = array(152,23); $e = 15.2; $f = false; $g = true;
var_dump($a);
var_dump($c);
var_dump($b);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);

echo '<br>';
$a = 10;
$b = 5;
echo'Результат:'. $b. 'из'. $a.'ти студентов посетили лекцию';
echo '<br>';
echo"Результат:". $b. "из". $a."ти студентов посетили лекцию";
echo '<br>';
echo'Результат:'. "{$b}". 'из'." {$a}".'ти студентов посетили лекцию';
echo '<br>';
echo "$b";
echo '<br>';
echo"Результат:". '$b'. "из". '$a'."ти студентов посетили лекцию";
echo '<br>';
echo"Результат:". '{$b}'. "из". '{$a}'."ти студентов посетили лекцию";
echo '<br>';

$x = 'Доброе утро' ;
$y = 'дамы' ;
$z = 'и господа';
echo $x . ' ' . $y . ' ' . $z;
echo '<br>';

$arr = [1,2,22,34,56];
$arr2 = [12,23,34,45,56];
$arr[] = 'element => some';
echo'<pre>';
print_r($arr);
echo'</pre>';
unset($arr2[0]);
echo'<pre>';
print_r($arr2);
echo'</pre>';
echo '<br>';
echo $arr[2];
echo '<br>';
echo $arr2[2];

echo '<br>';
echo'<pre>';
print_r($arr);
echo'</pre>';
echo '<br>';
echo'<pre>';
print_r($arr2);
echo'</pre>';
echo '<br>';
echo count($arr);
echo '<br>';
echo count($arr2);



 

?>