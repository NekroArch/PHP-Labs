<?php
$rows = $_GET['n'];
$columns = $_GET['m'];

/*functions*/
function generate_array($rows, $columns)
{
    $arr = array();
    for ($c = 0; $c < $rows; $c++):
        for ($r = 0; $r < $columns; $r++):
            $arr[$c][$r] = rand(0, 99);
        endfor;
    endfor;
    return $arr;
}

function findCustom($arr)
{
    echo "<hr>Расчёт с помощью самописных функций. <br><hr>";
    $min = null;
    $min_key = null;
    $max = null;
    $max_key = null;

    $start = microtime(true);
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {

            if ($arr[$i][$j] > $max or $max === null) {
                $max = $arr[$i][$j];
                $max_key = '[' . $i . '][' . $j . ']';
            }

            if ($arr[$i][$j] < $min or $min === null) {
                $min = $arr[$i][$j];
                $min_key = '[' . $i . '][' . $j . ']';
            }
        }
    }
    $time_result = microtime(true) - $start;

    echo "Min value: " . $min . "<br>" . " Min key:" . $min_key . "<br><br>";
    echo "Max value: " . $max . "<br>" . " Max key:" . $max_key . "<br><br>";
    echo 'Время выполнения скрипта: ' . number_format($time_result, 7, '.', '') . ' сек.<br><br>';
}

function findSystem($arr)
{
    echo "<hr>Расчёт с помощью встроенных функций. <br><hr>";
    $min = null;
    $min_key = null;
    $max = null;
    $max_key = null;

    $start = microtime(true);
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if (max($arr[$i]) > $max or $max === null) {
                $max = max($arr[$i]);
                $max_key = '[' . $i . '][' . array_keys($arr[$i], $max)[0] . ']';
            }

            if (min($arr[$i]) < $min or $min === null) {
                $min = min($arr[$i]);
                $min_key = '[' . $i . '][' . array_keys($arr[$i], $min)[0] . ']';
            }
        }
    }
    $time_result = microtime(true) - $start;

    echo "Min value: " . $min . "<br>" . " Min key:" . $min_key . "<br><br>";
    echo "Max value: " . $max . "<br>" . " Max key:" . $max_key . "<br><br>";
    echo 'Время выполнения скрипта: ' . number_format($time_result, 7, '.', '') . ' сек.<br><br>';
}

function print_array($arr)
{
    echo '<table border=1 >';
    foreach ($arr as $k => $v) {
        echo "<tr>";
        foreach ($v as $s_k => $s_v) {
            echo '<td style="color:white;  font-size:18px; width: 92px; padding:12px; background-color:#6067ef; text-align:center">' . $s_v . '</td>';
        }
        echo "</tr>";
    }
    echo "</table>";
}

/*usage*/
$array = generate_array($rows, $columns);
print_array($array);
findCustom($array);
findSystem($array);