<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>View Existing User</title>
</head>
<body>

<?php
/* 
	VIEW.PHP
	Displays all data from 'players' table
*/

	// connect to the database
	include('connect-db.php');

	// get results from database
	$result = mysql_query("SELECT * FROM players") 
		or die(mysql_error());  
		
	// display data in table
	echo "<center><p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p></center>";
        echo "<center>";
	echo "<table border='1' cellpadding='10'>";
	echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th><th>Phone No</th><th>Address</th> <th></th> <th></th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {

		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['id'] . '</td>';
		echo '<td>' . $row['firstname'] . '</td>';
		echo '<td>' . $row['lastname'] . '</td>';
		echo '<td>' . $row['phone'] . '</td>';
		echo '<td>' . $row['address'] . '</td>';
                echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
		echo "</tr>";
	}

	// close table>
	echo "</table>";
	echo "</center>";
?>
<center>
<a href="new.php">Create new user</a>
<a href="menutry1.php">Main Menu</a>

</body>
</html>