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
				<li class="shirts <?php if ($section == 'shirts') { echo 'on'; } ?>"><a href="shirts.php">Shirts</a></li>
				<li class="contact <?php if ($section == 'contact') { echo 'on'; } ?>"><a href="contact.php">Contact</a></li>
				<!-- Note the url in the "cart" link below is a placeholder. Please go to http://teamtreehouse.com/library/programming/build-a-simple-php-application/wrapping-up-the-project/deploying-the-site for the lesson on how to go to paypal and get the correct url.-->
				<li class="cart"><a href="https://www.paypal.com/cgi-bin/webscr">Shopping Cart</a></li>
			</ul>

		</div>

	</div>

	<div id="content">