
<?php


require_once("class.palprimechecker.php");
$checker = new PalprimeChecker();

$checker->number=151;


echo "The number " . $checker->number . " ";
//echo "(is|is not)";
if($checker->isPalprime()) {
		echo "is";
    }
else {
		echo "is not";
		}
echo " a palprime.";

?>
