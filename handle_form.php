<!DOCTYPE html>
<html>
<head>
	<title>Form Feedback</title>
</head>
<body>
	<?php
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$comments = $_REQUEST['comments'];

		echo "<p>Thank you, <b>$name</b>, for the following comments:<br/>

		<tt>$comments</tt></p>

		<p>We will reply to you at <em>$email</em>.</p>";
	?>

</body>
</html>