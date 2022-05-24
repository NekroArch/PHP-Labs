<?php

function sum($str, ...$numbers)
{
    $count = count($numbers);
    $result = $numbers[0];
    for ($i = 1; $i < $count; $i++) {
        if ($str == "+") {
            $result += $numbers[$i];
        } elseif ($str == "-") {
            $result -= $numbers[$i];
        } elseif ($str == "*") {
            $result *= $numbers[$i];
        } elseif ($str == "/") {
            foreach ($numbers as $number) {
                if ($number == 0) {
                    echo 'cant divide by zero<br>';
                    return "Syntax error";
                }
            }
            $result /= $numbers[$i];
        } else {
            return "Syntax error";
        }
    }
    return $result;
}

$str = "/";
echo sum($str, 1, 0, 3, 4);

?>