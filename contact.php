<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);

	if($name == "" OR $email == "" OR $message == "") {
		echo "You must provide a your name, email address and a message.";
		exit;
	}

	foreach($_POST as $value) {
		if( stripos($value, 'Content-Type:') != "") {
			echo "There was a problem with the information you entered.";
			exit;
		}
	}

	if($_POST["address"] != "") {
		echo "Your form submission has an error.";
		exit;
	}

	require("includes/phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();

	if(!$mail->ValidateAddress($email)) {
		echo "You must specify a valid email address.";
		exit;
	}


	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "<br>";
	$email_body = $email_body . "Email: " . $email . "<br>";
	$email_body = $email_body . "Message: " . $message;

	$mail->SetFrom($email, $name);
	//Set an alternative reply-to address
	//$mail->AddReplyTo('replyto@example.com','First Last');
	//Set who the message is to be sent to
	$mail->AddAddress('dhtml@verizon.net', 'Orders');
	//Set the subject line
	$mail->Subject = "Shirts 4 Mike Order | " . $name;
	//Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
	$mail->MsgHTML($email_body);
	//Replace the plain text body with one created manually
	//$mail->AltBody = 'This is a plain-text message body';
	//Attach an image file
	//$mail->AddAttachment('images/phpmailer_mini.gif');

	//Send the message, check for errors
	if(!$mail->Send()) {
	  echo "There was a problem sending the email: " . $mail->ErrorInfo;
	} 
	//else {
	  //echo "Message sent!";
	//}

	header("Location: contact.php?status=thanks");
	exit;
// TODO Send email
}
?>
<?php 
$pageTitle = 'Contact Mike';
$section = 'contact';
include('includes/header.php'); 
?>

<div class="section page">
	<div class="wrapper">
		<h1>CONTACT</h1>

		<?php 
		if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
		<p>Thanks for the email! I&rsquo;ll get back to you soon.</p>
		<?php } else { ?>

		<p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>
		<form method="post" action="contact.php">
		<table>
			<tr>
				<th>
					<label for="name">Name</label>
				</th>
				<td>
			 		<input type="text" name="name" id="name">
				</td>
			<tr>
			<tr>
				<th>
					<label for="email">Email</label>
				</th>
				<td>
			 		<input type="text" name="email" id="email">
				</td>
			<tr>
				<tr>
				<th>
					<label for="message">Message</label>
				</th>
				<td>
			 		<textarea name="message" id="message"></textarea>
				</td>
			<tr>
			<tr class="hide-address">
				<th>
					<label for="address">address</label>
				</th>
				<td>
			 		<input type="text" name="address" id="address">
			 		<p>Humans: Please leave this field blank.</p>
				</td>
			<tr>
		</table>
		<input type="submit" value="Send">
		</form>

		<?php } ?>

	</div>
</div>
<?php include('includes/footer.php'); ?>