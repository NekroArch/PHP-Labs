<?php

$arr = [12, 4, 182, 1, 2.587, 1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 13, 14, 15, 16, 17, 18, 192, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];
$min = null;
$min_key = null;
$max = null;
$max_key = null;

$start = microtime(true);
foreach ($arr as $k => $v) {
    if ($v > $max or $max === null) {
        $max = $v;
        $max_key = $k;
    }

    if ($v < $min or $min === null) {
        $min = $v;
        $min_key = $k;
    }
}
$time_result = microtime(true) - $start;
printInfo("кастомного кода");

$start = microtime(true);
$max = max($arr);
$max_key = array_keys($arr, $max)[0];

$min = min($arr);
$min_key = array_keys($arr, $min)[0];

$time_result = microtime(true) - $start;
printInfo("системных функций");

function printInfo($calculated_by)
{
    echo "<hr>Расчёт с помощью $calculated_by. <br><hr>";
    echo "Min value: " . $GLOBALS["min"] . "<br>" . " Min key:" . $GLOBALS["min_key"] . "<br><br>";
    echo "Max value: " . $GLOBALS["max"] . "<br>" . " Max key:" . $GLOBALS["max_key"] . "<br><br>";
    echo 'Время выполнения скрипта: ' . number_format($GLOBALS["time_result"], 7, '.', '') . ' сек.<br><br>';
}
