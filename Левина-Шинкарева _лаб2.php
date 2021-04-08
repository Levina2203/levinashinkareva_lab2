<form action="Lab_2.php" method="get">
	N: <input type="text" name="n">
	<input type="submit" name="submit" value="Отправить" />
</form>
<?php
$ar1=array('html','css','php','js','jq');
echo "1)<br> ";
foreach ($ar1 as $value) {
	echo "$value<br>";
}

echo "<br>2)<br>";
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $value) {
	echo "$key<br>";
}
echo "<br>";
foreach ($arr as $value) {
	echo "$value<br>";
}

$n=$_REQUEST['n'];
echo "<br>3) ";
$ar2=array();
for ($i=0; $i <= $n ; $i++) {
	if ($i % 2 == 0) {
		$j=0;
	}
	else $j=1;
	echo "$j ";
}

echo "<br><br>4)Разбиение массива arr на два массива en и ru<br>";
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en=array();
$ru=array();
foreach ($arr as $key => $value) {
	array_push($en,$key);
	array_push($ru,$value);
}
foreach ($en as $value) {
	echo "$value<br>";
}
foreach ($ru as $value) {
	echo "$value<br>";
}

echo "<br>5)Есть ли в массиве (4,2,5,19,13,0,10) элемент равный 2, 3 или 4?<br>";
$ar5=array(4,2,5,19,13,0,10);
foreach ($ar5 as $key => $e) {
	if ($e == 2 or $e == 3 or $e == 4) {
		echo "Есть!<br>";
		break;
	}
	if (count($ar5) == $key+1) {
		echo "Нет!<br>";
		break;
	}
}

echo "<br>6)<br>";
$ar6 = array('Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье');
$day = 'Пятница';
foreach ($ar6 as $value) {
	if($day == $value) {
		echo "<i>$value</i><br>";
	}
	elseif ($value == 'Суббота' or $value == 'Воскресенье') {
		echo "<b>$value</b><br>";
	}
	else echo "$value<br>";
}

echo "<br>7)<br>";
$string='яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
$arr=explode(" ", $string);
$fruits = [];
$number = [];
foreach ($arr as $key => $value) {
    if (in_array($value, $fruits) != true){
        array_push($fruits, $value);
	}
}
for ($i=0; $i < count($fruits); $i++){
	$n = 0;
	for ($j=0; $j < count($arr); $j++){
		if ($fruits[$i] == $arr[$j]){
        	$n++;
    	}
	}
	array_push($number, $n);
}
$res = array_combine($fruits, $number);
arsort($res);
foreach ($res as $key => $value) {
	echo "$key - $value<br>";
}

echo "<br>8)<br>";
$arr = array("first"=>45, "second"=>76, "third"=>12);
$arr2=array_reverse($arr);
foreach ($arr2 as $key => $value) {
	echo "$key - $value<br>";
}
?>