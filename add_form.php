<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>add form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
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
						<a class="nav-link active" href="add_form.php">Add New Client</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="view.php">View Clients</a>
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
	<div class="container" style="background-color: #e7e3d4;">
		<h1 class="display-6">Add New Client</h1>
		<br>
		<form action="add_code.php" method="post">
			<table class="table table-borderless">
				<tr>
					<td class="text-center">C<span>lient Name</span></td>
					<td class="text-center"><input name="name" type="text"></td>
				</tr>
				<tr>
					<td class="text-center"><span>Address</span></td>
					<td class="text-center"><input name="add" type="text"></td>
				</tr>
				<tr>
					<td class="text-center">P<span>hone Number</span></td>
					<td class="text-center"><input name="phone" type="text"></td>
				</tr>
				<tr>
					<td class="text-center">T<span>ype of Account</span></td>
					<td class="text-center">
						<input name="acc" type="radio" value="Jawaher">Jawaher
						<input name="acc" type="radio" value="Mazyona ">Mazyona
					</td>
				</tr>
				<tr>
					<td class="text-center">R<span>ange of Loans</span></td>
					<td class="text-center">
						<select name="loans">
							<option>5000</option>
							<option>10000</option>
							<option>25000</option>
							<option selected="" value="x">Range of loans</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="text-center">Civil ID</td>
					<td class="text-center"><input name="id" type="text"></td>
				</tr>
				<tr>
					<td class="text-center">Job Sector</td>
					<td class="text-center">
						<input name="sector" type="checkbox" value="Government">Government
						<input name="sector" type="checkbox" value="Private ">Private
						<input name="sector" type="checkbox" value="Entrepreneur">Entrepreneur
					</td>
				</tr>
				<tr>
					<td class="text-center">Email</td>
					<td class="text-center"><input name="email" type="email"></td>
				</tr>
				<tr>
					<td class="text-center">
						<button type="submit" class="btn btn-primary btn-sm">Add</button>
					</td>
					<td class="text-center">
						<button type="reset" class="btn btn-warning btn-sm">Reset</button>
					</td>
				</tr>
			</table>
		</form>
		<br><br>

		<a class="btn btn-default" href="clerk.php" role="button">Back</a>
	</div>
	<br>
	<footer><?php include('footer.php'); ?></footer>
</body>

</html>