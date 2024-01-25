<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: #edeae5;">
	<header>
		<av class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Bank</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="nav nav-tabs mr-auto">
					<li class="nav-item ">
						<a class="nav-link " href="home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="login_form.php">Login</a>
					</li>

				</ul>
			</div>
			</nav>
	</header>
	<br><br>
	<div class="container" style="background-color: #f2f2f2;">
		<br>
		<h1 class="display-6">Clerk Login </h1>
		<br>
		<form action="login_code.php" method="post">
			<table class="table table-borderless">
				<tr>
					<td class="text-center"><span>Username</span></td>
					<td class="text-center"><input name="n" type="text">&nbsp;</td>
				</tr>
				<tr>
					<td class="text-center"><span>Password</span></td>
					<td class="text-center"><input name="p" type="password">&nbsp;</td>
				</tr>
				<tr>
					<td class="text-center">
						<button type="submit" class="btn btn-primary btn-sm">Login</button>
					</td>
					<td class="text-center">
						<button type="reset" class="btn btn-warning btn-sm">Cancel</button>

					</td>
				</tr>
			</table>
		</form>
		<br>
	</div>
	<br><br>
	<footer><?php include('footer.php'); ?></footer>
</body>

</html>