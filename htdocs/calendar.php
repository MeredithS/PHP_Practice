<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
</head>
<body>


<form action="calendar.php" method="post">
	<?php
		function make_calendar_pulldown(){
			$months = array(1=> 'January', 'February', 'March', 'April', 'May','June', 'July', 'August', 'September', 'October', 'November','December');

			$days = range(1, 31);

			$years = range(2008, 2018);

			echo '<select  name="month">';
			foreach($months as $key => $value){
				echo "<option value=\"$key\">$value</option>\n";
			}
			echo '</select>';

			echo '<select name="day">';
			foreach($days as $value){
				echo "<option value=\"$value\">$value</option>\n";
			}
			echo '</select>';

			echo '<select name="year">';
			foreach($years as $value){
				echo "<option value=\"$value\">$value</option>\n";
			}
			echo '</select>';
		}

		make_calendar_pulldown();
	?>
</form>

</body>
</html>