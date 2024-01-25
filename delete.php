<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Delete</title>
</head>

<body>
    <?php
    include('connect.php');

    $id = $_GET['id'];
    // query to delete
    $q = "delete from tblclient where id=$id";
    mysqli_query($c, $q) or die("Error in $q" . mysqli_error($c));

    // Display
    echo "<h3>The Client Record was Deleted</h3>";

    // Link
    echo "<a href='view.php'>Back to View page</a>";
    ?>
</body>

</html>