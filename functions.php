<?php

function compute_average($array) {
    $number_of_values = count($array);
    $total = 0;
    foreach ($array as $value) {
        $total += $value;
    }
    $average = $total / $number_of_values;

    return $average;
}

$numbers = array(10, 10, 10);

$average = compute_average($numbers);
echo $average;

$posts=array();
var_dump($posts);

?>

