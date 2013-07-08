<?php

function mimic_count($array){
	$count = 0;
	foreach($array as $element) {
		$count = $count + 1;
	}
	return $count;
}

$flavors = array("Vanilla", "Chocolate", "Coffee", "Strawberry");
$count = mimic_count($flavors);
echo $count;

echo "<br/>";

function mimic_array_sum($array) {
	$total = 0;
	foreach($array as $number) {
		$total = $total + $number;
	}
	return $total;
}

$numbers = array(2, 3, 5, 100);
$sum = mimic_array_sum($numbers);
echo $sum;

?>