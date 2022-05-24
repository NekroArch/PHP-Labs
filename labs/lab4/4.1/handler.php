<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];

$minNum = min($num1, $num2, $num3);

$maxNum = max($num1, $num2, $num3);

$resWithNum =  withNumbers($minNum, $maxNum);

echo $resWithNum;

function withNumbers($min, $max){
	$minArray = array();
	$maxArray = array();
	$res = 0;
	$minArray = array_map('intval', str_split($min)); 
	$maxArray = array_map('intval', str_split($max));
for($i = 0; $i < count($minArray); $i++){
	$res += $minArray[$i];
};
for($i = 0; $i < count($maxArray); $i++){
	$res += $maxArray[$i];
};
	return $res;
}
?>
