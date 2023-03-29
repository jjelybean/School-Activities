<!DOCTYPE html>
<html>
<head>
	<title>Multiplication Table</title>
</head>
<body>

	<h1>Multiplication Table</h1>

	<?php

	$number = 5; 

	echo "Multiplication Table for $number:"; 

	echo "<table>"; 

	for ($i = 1; $i <= 10; $i++) { 

	    $result = $number * $i; 

	    echo "<tr>"; 

	    echo "<td>$number x $i =</td>"; 

	    echo "<td>$result</td>"; 

	    echo "</tr>"; 

	}

	echo "</table>"; 

	?>

	<p> By: BORJA, Angel Jasmine </p>

</body>
</html>
