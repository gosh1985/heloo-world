<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Complaints</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<form style = "margin-top:40px; margin-left:40px;" action="" method = "post" >
Имя: <input type = "text" name = "name"/></br></br>
<input type = "radio" name = "gender" value="male"/>Male </br></br>
<input type = "radio" name = "gender" value="female"/>Female</br></br>
<input type = "submit" name = "submit" value = "Submit"/>

<?php
if(isset($_POST['submit'])){
$gender = $_POST['gender'];
$name = $_POST['name'];
$owner = '';
if($gender == 'male'){
	$owner = 'мистер';
}else{
	$owner = 'миссис';
}
echo '<br>'.'Добро пожаловать ';
echo  $owner .' ';  
echo  $name;
echo '<br>';
echo '<br>';
}else{
	echo'  ';
}

?>
<p>Введите числа: <p>
<input type = "text" name = "number1"/></br></br>
<input type = "text" name = "number2"></br></br>
<input type = "text" name = "number3"></br></br>
<input type = "text" name = "number4"></br></br>
<input type = "text" name = "number5"></br></br>
<input type = "text" name = "number6"></br></br>
<input type = "text" name = "number7"></br></br>
<input type = "submit" name = "submit" value = "Submit"/>
<?php
if(isset($_POST['submit'])){
echo 'Введите числа:'.'<br>';


$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$number3 = $_POST['number3'];
$number4 = $_POST['number4'];
$number5 = $_POST['number5'];
$number6 = $_POST['number6'];
$number7 = $_POST['number7'];

$arr =[$number1,$number2,$number3,$number4,$number5,$number6,$number7];
$max = max($arr);
$min = min($arr);
$avg = array_sum($arr)/count($arr);
echo $max.'<br>';
echo $min.'<br>';
echo int($avg).'<br>';
}
?>
</body>
</html>