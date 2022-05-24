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

function print_array($arr)
{
    echo '<table border=1 >';
    foreach ($arr as $k => $v) {
        echo "<tr>";
        foreach ($v as $s_k => $s_v) {
            if ($k == $s_k) {
                echo '<td style="color:white;  font-size:20px; width: 92px; padding:12px; background-color:#48fc15; text-align:center">' . $s_v . '</td>';
            } elseif ($k + $s_k == count($v) - 1) {
                echo '<td style="color:white;  font-size:20px; width: 92px; padding:12px; background-color:#f50037; text-align:center">' . $s_v . '</td>';
            } else {
                echo '<td style="color:white;  font-size:18px; width: 92px; padding:12px; background-color:#6067ef; text-align:center">' . $s_v . '</td>';
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

function sort_primary(&$arr)
{
    $diagonal_size = min($GLOBALS['rows'], $GLOBALS['columns']);
    for ($i = 0; $i < $diagonal_size; $i++) {
        for ($j = 0; $j < $diagonal_size - 1; $j++) {
            if ($arr[$j][$j] > $arr[$j + 1][$j + 1]) {
                swap($arr[$j][$j], $arr[$j + 1][$j + 1]);
            }
        }
    }
}

function sort_secondary(&$arr)
{
    $diagonal_size = min($GLOBALS['rows'], $GLOBALS['columns']);
    for ($counter = 0; $counter < $diagonal_size; $counter++) {
        for ($i = 0, $j = $diagonal_size - 1; $i < $diagonal_size, $j >= 0; $i++, $j--) {
            if ($arr[$i][$j] < $arr[$i + 1][$j - 1]) {
                swap($arr[$i][$j], $arr[$i + 1][$j - 1]);
            }
        }
    }
}

function swap(&$left, &$right)
{
    $tmp = $left;
    $left = $right;
    $right = $tmp;
}

/*usage*/
echo '<hr> Before sorting: <br><br>';
$array = generate_array($rows, $columns);
print_array($array);
echo '<hr> After sorting: <br><br>';

sort_primary($array);
sort_secondary($array);
print_array($array);
