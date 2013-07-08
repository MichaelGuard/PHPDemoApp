<?php 
$navlinks = array();
$navlinks[101] = array(
	"class" => "shirts",
	"linkurl" => "shirtsmg.php?nav=shirts",
	"linktext" => "Shirts"
);
$navlinks[102] = array(
	"class" => "contact",
	"linkurl" => "contactmg.php?nav=contact",
	"linktext" => "Contact"
);
$navlinks[103] = array(
	"class" => "cart",
	"linkurl" => "#",
	"linktext" => "Shopping Cart"
);

?>

<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./">Shirts 4 Mike</a></h1>
			<ul class="nav">
				<?php 
				$n=0;
				foreach($navlinks as $navlink) { 
					echo '<li class="' . $navlink["class"] . " ";
					if (isset($_GET["nav"]) AND $_GET["nav"] == "shirts") { echo 'on'; }
					elseif (isset($_GET["nav"]) AND $_GET["nav"] == "contact") { echo 'on'; }
					echo '">';
					echo '<a href="' . $navlink["linkurl"] . '">';
					echo $navlink["linktext"];
					echo "</a></li>";
					$n++;
				}
				?>
			</ul>

			

		</div>

	</div>

	<div id="content">