<?php

$numbers = array(1,2,3,4);

$total = count($numbers);

$sum = 0;

$output = "";

$i = 0;

foreach($numbers as $number) {

    $i = $i + 1;
    //echo $i;

    if ($i < $total) {
    	//echo $total;

        $output = $number . $output;
        //echo $number;
        echo $output;

    }

}

//echo $output;

?>