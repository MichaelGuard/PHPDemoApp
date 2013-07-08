<?php
$country = array(
	"code" => "US",
	"name" => "United States",
	"capital" => "Washington, D.C.",
	"population" => 225000000,
	"anthem" => "The Star-Spangled Banner"
);
?>
<h1><?php echo $country["name"]; ?></h1>
<dl>
	<dt>Country Code</dt>
	<dd><?php echo $country["code"]; ?></dd>
	<dt>Capital</dt>
	<dd><?php echo $country["capital"]; ?></dd>
	<dt>Population</dt>
	<dd><?php echo $country["population"]; ?></dd>
</dl>