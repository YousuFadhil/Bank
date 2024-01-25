<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Update Code</title>
</head>

<body>
	<?php
	include('connect.php');
	include('mylib.php');
	$errors = [];
	// Receive values from update form
	$name = $_POST['name'];
	$address = $_POST['add'];
	$phone = $_POST['phone'];
	if (!isset($_POST['acc'])) {
		$errors[] = "Choose a type of account";
	} else $account = $_POST['acc'];
	
	$loans = $_POST['loans'];
	$id = $_POST['id'];

	if (!isset($_POST['sector'])) {
		$errors[] = "Choose a job sector";
	} else
		$sector = $_POST['sector'];

	$email = $_POST['email'];
	
	// Validation
	if (!preg_match("/^[A-Za-z\s]{3,50}$/", $name)) {
		$errors[] = "Invalid user name";}
	if (!preg_match("/^[A-Za-z\s]{3,20}$/", $address)) {
		$errors[] = "Invalid address";}
	if (!preg_match("/^[9|7]{1}[0-9]{7}$/", $phone)) {
		$errors[] = "Invalid phone number";}
	if ($loans == 'x') {
		$errors[] = "Choose a range of loans";}
	if (!preg_match("/^[0-9]{1,8}$/", $id)) {
		$errors[] = "Invalid Civil ID";}
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors[] = "Invalid Email";}
		
	// if no element in the errors array
	if (count($errors) == 0) {
		// update values into database
		$q = "update tblclient set name='$name',address='$address',phone='$phone',account='$account',loans='$loans',id='$id',sector='$sector',email='$email' where id=$id";
		mysqli_query($c, $q) or die("Error in $q" . mysqli_error($c));

		// Display
		echo "<h3>New client details are successfully updated to the database</h3>";
		echo "Client Name: $name<br>";
		echo "Address: $address<br>";
		echo "Phone Number: $phone<br>";
		echo "Type of Account: $account<br>";
		echo "Job Sector: $sector<br>";
		echo "Range of Loans: $loans<br>";
		echo "Civil ID: $id<br>";
		echo "Email: $email<br>";
		echo "<br><br>";

		// Link
		echo "<a href='view.php'>Back to View page</a>";
	} else // display the errors by running the function in the mylib.php file
		DisplayErrors();
	?>
</body>

</html>