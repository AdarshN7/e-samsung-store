<?php
session_start();
if (!isset($_SESSION['email']))
{
    header("loction:insex.php");
}
else {
    session_unset();
    session_destroy();
    //header("location:index.php?logout succesfully");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="head_style">
    <div class="alert alert-success text-center" role="alert">
        <h1>Logged out Successfully</h1>
        <h5>Thank you for visiting to us.</h5>
        <a href="index.php"><button type="button" class="btn btn-danger">Close</button></a>
    </div></div>

</body>
</html>
