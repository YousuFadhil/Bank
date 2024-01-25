<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta content="en-us" http-equiv="Content-Language" />
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <title>clerk</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body class="container" style="background-color: #eae7dc;">
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
    <div class="col-md">
      <img src="./photo/clerk.jpg" width="100%" height="100%" class="mx-auto d-block">
    </div>

  </div>
  <br>
  <footer><?php include('footer.php'); ?></footer>
</body>

</html>