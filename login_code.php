<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>login code</title>
</head>

<body>
	<?php
	$errors = [];
	include('connect.php');
	include('mylib.php');
	// Receive values from form
	$name = $_POST['n'];
	$pass = $_POST['p'];


	// query to get the data and run it 
	$q = "select * from tblclerk where name='$name' and pass='$pass'";
	$r = mysqli_query($c, $q) or die("Error in $q" . mysqli_error($c));
	// Check for the validity of the entered username and password 
	if (mysqli_num_rows($r) == 1) {
		$row = mysqli_fetch_assoc($r);

		session_start();
		//Save data in session array
		$_SESSION['name'] = $row['name'];
		$_SESSION['pass'] = $row['pass'];
		// Redirect the user to page you want to deal with
		header("Location:clerk.php");
	} else {
		// Redirect the user to error page 
		header("Location:name&passError.php");
		exit;
	}

	?>
</body>

</html>