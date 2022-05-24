<?php
$sum = 0;
$n = 1;
$k = 5;

$result = sumOdd($n, $k, $sum);
echo '<br>>sum = ' . $result . '<br>';

function sumOdd($n, $k, $sum)
{
    if ($n > $k) {
         return $sum;
    }
    if ($n % 2 != 0) {
        $sum += $n;
    }
    $n++;
    return sumOdd($n, $k, $sum);
}

?>