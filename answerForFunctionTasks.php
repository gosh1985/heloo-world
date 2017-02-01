<?php
$a = rand(-10,20);
$b = rand(-10,20);
$c= rand(-10,20);
/**
 * return sum of three rand number
 * @param int $x
 * @param int $y
 * @param int $z
 * @return int
 */
function getsum($x = 0,$y = 0,$z = 0){
$sum = $x + $y + $z;
if($sum<0){
	return 'Negative integer';
}elseif($sum>=0){
	return $sum;
}
}
echo getsum($a,$b,$c);

//////////////////////////////////////////////////////////////////////

/**
 * return longes word from sentense
 * @param type $text
 * @return string
 */
function findLongestWord($text){
	$words = array_unique(explode(' ', $text));
	$max = $words[0];
for ($i=0; $i<count($words); $i++) {
    if(strlen($words[$i]) > strlen($max)){
        $max = $words[$i];
      }
    }
return $max;
	
}
$string = 'Это предложение с очень длинными словами, его надо укоротить';
echo '<br>';
echo findLongestWord($string);

echo '<br>';
/////////////////////////////////////////////////////////////////////////

/**
 * return abraviation from full name
 * @param type $string
 * @return string
 */
function abr($string){
	$str = '';
	$words = explode(' ', $string);
	//for ($i=0; $i<count($words); $i++) {
	//	$str .= $words[$i].'<br>';
		
		//echo $words[$i].'<br>';
	//}
	//return $str;
	$str .= $words[0];
	$secondName = mb_substr($words[1],0,1);
	$midldName = mb_substr($words[2],0,1);
	$str .=$secondName.''.$midldName;
	return $str;
}
 echo abr('Петров Петр Петрович').'<br>';
 echo abr('Сидоров Сидор Сидорович').'<br>';
///////////////////////////////////////////////////////////////////////////

/**
 * return shose size
 * @param int $a
 * @return int
 */
function findRightSize($a){
	$aproxSize = round((($a + 1.5)*3)/2);
	return $aproxSize;
}

echo findRightSize(28);

?>