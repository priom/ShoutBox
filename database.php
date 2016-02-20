<?php
// Connect to MySQL
$con = mysqli_connect("DB_NAME", "DB_USER", "DB_USER_PASSWORD", "DB_TABLE_NAME");

// Test connection
if (mysqli_connect_errno()) {
	echo "Failed to connect: " . mysqli_connect_error();
	// die ("Failed to connect: " . mysqli_connect_error());
}
