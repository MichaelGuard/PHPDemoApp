<?php

$numbers = array(1,2,3,4);

$total = count($numbers);

$sum = 0;

$output = "";

$i = 0;

foreach($numbers as $number) {

    $i = $i + 1;

    if ($i < $total) {

        $sum = $sum + $number;

    }

}

echo $sum;

?>