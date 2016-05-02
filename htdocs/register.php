<?php
$page_title = "Form";
include('includes/header.html');
?>
	<form action="handle_form.php" method="post">
		<fieldset>
			<legend>Enter you information in the form below:</legend>
			<p><b>First Name:</b> <input type="text" name="f_name"/></p>
			<p><b>Last Name:</b> <input type="text" name="l_name"/></p>
			<p><b>Email Address:</b> <input type="text" name="email"/></p>
			<p><b>Password:</b> <input type="password" name="password"/></p>
			<p><b>Password Confirmation:</b> <input type="password" name="password_confirmation"/></p>
		</fieldset>
		<div align="center"><input type="submit" name="submit" value="Submit My Information"/></div>
		
	</form>

<?php
	include('includes/footer.html');
?>