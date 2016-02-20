<?php 
include 'database.php';

// Check if you form is submitted
if (isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);

	// Set time zone
	date_default_timezone_set('America/Halifax');
	$time = date('h:i:s a', time());

	if (!isset($user) || $user == '' || !isset($message) || $message == '') {
		// echo "bad";
		$error = "Please fill in your name and message";
		header("Location: index.php?error=" . urlencode($error));
		exit();
	} 
	else {
		$query = "INSERT INTO shouts (user, message, time)
					VALUES ('$user', '$message', '$time')";

		if (!mysqli_query($con, $query)) {
			die('Error: ' . mysql_error($con));
		}
		else {
			header("Location: index.php");
			exit();
		}
		// echo "Message sent!";
	}
}

?>