<?php

require_once('../mysqli_connect.php');

$query = "SELECT first_name, last_name";

$response = @mysql_query($dbc, $query);

if ($response) {
	echo '<table align="left" cellspacing="5" cellpadding="8">
	<tr><td align="left"><b>First Name</b></td>
	<td align="left"><b>Last Name</b></td></tr>';

	while ($row = mysqli_fetch_array($response)) {
		echo '<tr><td align="left">' .
		$row['first_name'] . '</td><td align="left">' .
		$row['last_name'] . '</td>';

		echo '</tr>';
	}

	echo '</table>';
} else {
	echo "Could not issue database query<br>";
	echo mysqli_error($dbc);
}

mysqli_close($dbc);

?>