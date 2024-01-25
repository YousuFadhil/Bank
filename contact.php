<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
	<title>Contact Us</title>
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
						<a class="nav-link active" href="contact.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login_form.php">Login</a>
					</li>

				</ul>
			</div>
			</nav>
	</header> 
	<br><br>
	<div class="container" style="background-color: #f2f2f2;">
		<h1 class="display-6">Contact us</h1>
		<br>
		<table class="table table-borderless" style="width:60%">
			<tr>
				<td class="text-start">T<span>elephone Number</span></td>
				<td class="text-start"><a class="btn-floating btn-tw mx-1">
						<i class="bi bi-telephone-fill"></i><img src="photo/telephone-fill.svg" alt=""></a>+968 24884444</td>
			</tr>
			<tr>
				<td class="text-start"><span>Email</span></td>
				<td class="text-start"><a class="btn-floating btn-tw mx-1">
						<i class="bi bi-envelope-fill"></i><img src="photo/envelope-fill.svg" alt=""></a>banksupport@yfs.com</td>
			</tr>
			<tr>
				<td class="text-start"><span>Instagram</span></td>
				<td class="text-start"><a class="btn-floating btn-tw mx-1">
						<i class="bi bi-instagram"></i><img src="photo/instagram.svg" alt=""></a> yfs_bank</td>
			</tr>
			<tr>
				<td class="text-start">T<span>witter</span></td>
				<td class="text-start"><a class="btn-floating btn-tw mx-1">
						<i class="bi bi-twitter"></i><img src="photo/twitter.svg" alt=""></a>yfs_bank</td>
			</tr>
		</table>
		<br><br>
		<a class="btn btn-primary" href="home.php" role="button">Home Page</a>
	</div>
	<br><br>
	<footer><?php include('footer.php'); ?></footer>
</body>

</html>