<?php
$flavors = array("Vanilla", "Chocolate", "Strawberry", "Cookie Dough"); ?>

<pre>
<?php
echo $flavors[0] . "\n" . $flavors[1] . "\n" . $flavors[2];
?>
</pre>

<?php
echo "We have " . count($flavors) . " flavors.";
?>

<pre>
<?php
foreach($flavors as $flavor) {
	echo $flavor . "\n";
}
?>
</pre>