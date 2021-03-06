<?php
require 'includes/common.php';
if (isset($_SESSION['id']))
{
    header("location:home.php");
}
?>
<!doctype html>
<html>
<head>
		<title>Sign up-Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
	    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--   Navigation Bar -->
    <?php
    include 'includes/header.php';
    ?>

	<!-- Signup form   -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <img src="img/signupimg.png">
        </div>
        <div class="col-sm-4 col-sm-offset-3 ">

						<div class="panel panel-info">
							<div class="panel-heading">
                        <h2>SIGN UP</h2></div>
							<div class="panel-body">
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <input class="form-control" placeholder="firstName" name="first_name"  required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="lastName" name="last_name" >
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
								</form></div>
                        </div></div>
                    </div>
                </div>
    </div>
            </div>
	
	
	
	<!--  footer  -->
    <?php
    include 'includes/footer.php';
    ?>
</body>
</html>