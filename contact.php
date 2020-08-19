<!DOCTYPE html>
<html lang="en">
<head>
    <title>contact us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include 'includes/header.php';
?>
<div class="row container ">
    <div class="col-sm-8 col-xs-offset-1">
        <h2>LIVE SUPPORT</h2>
        <h4>24 hours | 7 days | 365 days a year Live Technical Support</h4>
        <p>The navbar and the footer will remain same. In the body section, two rows will be created and both the rows will
    be divided into two columns. First row will contain live support section and the image. Second row will contain
    the contact us form and company information.</p>
    </div>
    <div class="col-sm-2 ">
        <img src="img/contact-pc.jpeg" alt="contactus">
    </div>
</div>
<hr>
<div class="row container">
    <div class="col-sm-6 col-xs-offset-1">
        <form>
            <h2>Contact Us</h2>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="email" placeholder="name">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="name" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label>Example textarea</label>
                <textarea class="form-control" name="message" placeholder="input your query" rows="3"></textarea>
            </div>
            <div class="form-group ">
                <a class="btn btn-primary" href="#">Submit</a>
            </div>
        </form>
    </div>
    <div class="col-sm-3 col-xs-offset-1">
         <h2>Company Informstion : </h2>
        <p>500, Lorem Ipsum Dolor sit,<br>22-56-2-9 Sit Amet Lorem,<br>
            USA<br><br>Phone:(00) 222 666 444<br>
            fax:(000) 000 00 00 0<br><br>
            Email: info@esamsungstore.com<br>
            Follow on: Facebook, Twitter.

        </p>
    </div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>