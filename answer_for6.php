<?php

$products = [['name'=> 'Televizor','price'=>400,'quantity'=>'2'],
			['name'=> 'Televizor','price'=>400,'quantity'=>'1'],
			['name'=> 'Televizor','price'=>400,'quantity'=>'1']];
/**
 ¬озвращает массив, который содержит:
Х ќбщую сумму покупок
Х ќбщее количество выбранных товаров

    I spend an hour just couse confused with sign"==" and "="
 * 
 * @staticvar int $price
 * @staticvar int $quantity
 * @param type $prod
 * @return array
 */
function cart_counter($prod){
static $price = 0;
 static $quantity = 0;
$array = [];
  foreach($prod as $x) {
	if(is_array($x)){
		foreach($x as $name=>$value){
		if($name =='price' )
	      {
			$price = $price + $value ;
		}if($name =='quantity')
		{
			$quantity = $quantity + $value;
		}
	}
  }
}
array_push($array, $price);
array_push($array, $quantity);
return $array;
}


echo '<pre>';
 print_r(cart_counter($products));
 echo '</pre>';

 echo'<br><br>';
 
 /**
  * 
  * @param int $a
  * @param int $b
  * @param int $c
  * @return boolean|array
  * that contain two element if d>0, one element if 
  */
 function equationSolver($a, $b, $c){
	 $arr = [];
if ( $a == 0){
	 return $a = 1;
}
$d = ($b*$b)-(4*$a*$c);

if($d > 0){
		$x1 = ((-$b)+sqrt($d))/(2*$a);
		$x2 = ((-$b)-sqrt($d))/(2*$a);
		array_push($arr, $x1, $x2);
}elseif($d == 0){
		$y1 = ((-$b)+sqrt($d))/(2*$a);
		array_push($arr, $y1);
}
if(!empty($arr)){
	return $arr;
}else{
	return false;
}
}

$a1 = rand(-20,20);
$b1 = rand(-20,20);
$c1= rand(-20,20);
echo $a1. " " .$b1. " " .$c1. '<br>'; 
$value = equationSolver($a1, $b1, $c1);
$count = count($value);
    if ($count == 2){
		echo 'x1 = '.$value[0].'<br>';
		echo 'x2 = '.$value[1].'<br>';
	}elseif($count == 1){
		echo 'x1 = '.$value[0].'<br>';
	}else{
		echo 'This equation is not that type';
	}

        
     /**
      * return array witout negative integer
      * @param type $array
      * @return array
      */   
   function deleteNegatives($array){
         $arrWithoutNegatives = [];
	for($i = 0;$i<count($array);$i++){
		if($array[$i]>0){
                    array_push($arrWithoutNegatives,$array[$i]);
                }		
			}
                        return $arrWithoutNegatives;
}

$arrWithNegatives = [12, 45, -23, 45, -56, 34];
 echo'<br><br>';
echo '<pre>';
 print_r($arrWithNegatives);
 echo '</pre>';
  echo'<br><br>';
echo '<pre>';
 print_r(deleteNegatives($arrWithNegatives));
 echo '</pre>';

 
 
     /**
      * return array, that use as reference, without negative integer 
      * @param type $array2
      * @return array
      */
    function deleteNegatives2(&$array2){
         
	for($j = 0;$j<count($array2);$j++){
		if($array2[$j]<0){
                   unset( $array2[$j]);
                }		
			}
                        return $array2;
}

 echo'<br><br>';
echo '<pre>';
 print_r($arrWithNegatives);
 echo '</pre>';
  echo'<br><br>';
echo '<pre>';
 print_r(deleteNegatives2($arrWithNegatives));
 echo '</pre>';
?>

