<!DOCTYPE html>
<html>
<head>
	<title>Sample Results</title>
</head>
<body>

<h4> Results </h4>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$cpass = $_POST["cpass"];

			echo "<b>Firstname:</b> $firstname";
            echo '<br/>';
			echo "<b>Lastname:</b> $lastname";
            echo '<br/>';
			echo "<b>Email:</b> $email";
            echo '<br/>';

			$password_length = strlen($password);
			echo "<b>Password length:</b> $password_length";
            
			if ($password == $cpass) {
				echo "<p>Passwords match</p>";
			} else {
				echo "<br><br><b> WARNING! </b> <p>Passwords do not match</p>";
			}
		} 
        else {
			echo "<p>Error: Form was not submitted using the POST method</p>";
		}
	?>

</body>

</html>