<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="en-us" http-equiv="Content-Language" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Search Code</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		.auto-style2 {
			border-style: solid;
			border-width: 1px;
		}

		.auto-style5 {
			text-align: center;
			font-size: large;
			line-height: 107%;
			font-family: Calibri, sans-serif;
			border-style: solid;
			border-width: 1px;
		}

		.auto-style6 {
			text-align: center;
		}
	</style>
</head>

<body style="background-color: #f2f2f2;">
	<header>
		<av class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Clerk Page</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="nav nav-tabs mr-auto">
					<li class="nav-item ">
						<a class="nav-link " href="add_form.php">Add New Client</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="view.php">View Clients</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="search_form.php">Search Clients</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">logout</a>
					</li>

				</ul>
			</div>
			</nav>
	</header>
	<br>
	<div class="container">
		<h1 class="display-6">Search Results</h1>
		<br>
		<table class="table table-success table-striped">
			<tr>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Client name</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Address</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Phone Number</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Type of Account</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Range of Loans</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Civil ID</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Job Sector</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Email</strong>
				</td>
			</tr>
			<tr>

				<?php
				// Connect to the database
				include("connect.php");
				include("mylib.php");
				$errors = [];
				// fill at least one field to search
				if (empty($_POST['name']) && empty($_POST['add']) && empty($_POST['phone']) && !isset($_POST['type']) && $_POST['loans'] == "x" && empty($_POST['id']) && !isset($_POST['sector'])){
					$errors[] = " User should choose at least one option";}

				$name = $_POST['name'];
				$address = $_POST['add'];
				$phone = $_POST['phone'];
				if (!isset($_POST['acc'])) {
					$account = 0;
				} else {
					$account = $_POST['acc'];}

				$loans = $_POST['loans'];
				$id = $_POST['id'];

				if (!isset($_POST['sector'])) {
					$sector = 0;
				} else {
					$sector = $_POST['sector'];}
					
				$email = $_POST['email'];
				// if no element in the errors array
				if (count($errors) == 0) {
					$q = "select * from tblclient where name='$name' or address='$address' or phone='$phone' or account='$account' or loans='$loans' or id='$id' or sector='$sector' or email='$email'";								
					$r = mysqli_query($c, $q) or die("Error in: $q" . mysqli_error($c));
					
					// if the result for searching the matched data equal zero rows
					if (mysqli_num_rows($r) == 0) {
						echo "<h2>No Results Matching your Search</h2>";
					} else { // in case there are matched rows print it
						while ($row = mysqli_fetch_assoc($r)) {
							echo "<tr>";
							echo "<td><center>{$row['name']}</center></td>";
							echo "<td><center>{$row['address']}</center></td>";
							echo "<td><center>{$row['phone']}</center></td>";
							echo "<td><center>{$row['account']}</center></td>";
							echo "<td><center>{$row['loans']}</center></td>";
							echo "<td><center>{$row['id']}</center></td>";
							echo "<td><center>{$row['sector']}</center></td>";
							echo "<td><center>{$row['email']}</center></td>";
							echo "</tr>";}
					}
				} else {
					DisplayErrors();
				}
				?>
			</tr>
		</table>
		<br>
		<center><a class="btn btn-success" href="search_form.php" role="button">Search Again</a></center>
		<br><br>
		<a class="btn btn-default " href="clerk.php" role="button">Back</a>
	</div>
	<br>
	<footer><?php include('footer.php'); ?></footer>
</body>


</html>