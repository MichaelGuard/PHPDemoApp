<?php include('includes/products.php'); 

$product_id = $_GET["id"];
$product = $products[$product_id];

?>
<pre><?php 
echo $product_id . "\n";
var_dump($product);
?></pre>