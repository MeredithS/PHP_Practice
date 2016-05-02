<?php
	$page_title = "Form Feedback";
	include('includes/header.html');
	require_once ('../mysqli_connect.php');

	$q = "INSERT INTO users (first_name, last_name, email, pass, registration_date) VALUES ('{$_POST['f_name']}', '{$_POST['l_name']}','{$_POST['email']}', sha1('{$_POST['password']}'), NOW())";

	$r = mysqli_query($dbc, $q);

	if ($r) {
		echo "Thank you {$_POST['f_name']} for signing up";
	} else {
		'<p>' . mysqli_error($dbc) .'<br/><br/>Query: ' . $q . '</p>';
	}

	$q = "SELECT * FROM users WHERE first_name = 'Meredith'";

	$r = mysqli_query($dbc, $q);

	while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)){
		echo "<p>Somehting should go here: {$row['first_name']}<p>";
	}
		mysqli_free_result($r);
		// $name = $_REQUEST['name'];
		// $email = $_REQUEST['email'];
		// $comments = $_REQUEST['comments'];
		// $age = $_REQUEST['age'];

		// if(isset($_REQUEST['gender'])){
		// 	$gender = $_REQUEST['gender'];
		// } else {
		// 	$gender = NULL;
		// }

		// if($gender == 'M'){
		// 	echo '<p><b>Good day, Sir!</b></p>';
		// }else if($gender == 'F'){
		// 	echo '<p><b>Good day, Miss!</b></p>';
		// }else {
		// 	echo '<p><b>You forgot to enter your gender!</p></b>';
		// }

		// echo "<p>Thank you, <b>$name</b>, for the following comments:<br/>

		// <tt>$comments</tt></p>

		// <p>We will reply to you at <em>$email</em>.</p>";

		// if($gender){
		// 	echo "<p>Your age and gender were entered as $age and $gender respectively.</p>";
		// }else if($gender && !$age){
		// 	echo "<p>Your gender was entered as $gender but you forgot to enter your age!</p>";
		// }else if(!$gender && $age){
		// 	echo "<p>Your age was entered as $age but you forgot to enter your gender!</p>";
		// }

		// if(!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email'])){
		// 	echo "<p>Thank you,<b>{$_POST['name']}</b>, for the following comments:<br/>

		// 	<tt>{$_POST['comments']}</tt></p>

		// 	<p>We will reply to you at <i>{$_POST['email']}</i>.</p>\n";
		// } else {
		// 	echo '<p class="error">Please go back and fill out th form again.</p>';
		// }
		include('includes/footer.html');
	?>

