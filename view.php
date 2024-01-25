<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>View</title>
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
						<a class="nav-link active" href="view.php">View Clients</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="search_form.php">Search Clients</a>
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
		<h1 class="display-6">View Client Details</h1>
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
					<strong>Job Sector</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Update</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Delete</strong>
				</td>
			</tr>
			<tr>
				<?php
				// Connect to the database
				include('connect.php');

				// query to get data from database
				$q = "select * from tblclient order by name";
				$r = mysqli_query($c, $q) or die("Error in $q " . mysqli_error($c));
				// To convert result table to separate row
				while ($row = mysqli_fetch_assoc($r)) {
					echo "<tr>";
					echo "<td><center>{$row['name']}</center></td>";
					echo "<td><center>{$row['address']}</center></td>";
					echo "<td><center>{$row['phone']}</center></td>";
					echo "<td><center>{$row['sector']}</center></td>";


					$id = $row['id'];
					// link for update with data token
					echo "<td><center><button type='button' class='btn btn-info btn-sm'><a href='update_form.php?id=$id'>Update</a></button></center></td>";
					// link for confirm with data token
					echo "<td><center><button type='button' class='btn btn-danger btn-sm'><a href='confirm.php?id=$id'>Delete</a></button></center></td>";

					echo "</tr>";
				}
				?>
			</tr>
		</table>
		<br><br>

		<a class="btn btn-default" href="clerk.php" role="button">Back</a>
	</div>
	<br>
	<footer><?php include('footer.php'); ?></footer>

</body>

</html>