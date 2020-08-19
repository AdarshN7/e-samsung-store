<?php
    require "includes/common.php";
    if (isset($_SESSION['email']))
        { header('location: home.php'); }
?>

<!doctype html>
<html lang="en">
<head>
		<title>Home e-Samsung Store</title>
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

	<!-- Banneer image   -->
    <div id="banner_image">
        <center>
            <div class="container">
                <div id="banner_content">
                    <h1>E-Samsung Store</h1><br>
                    <a href="home.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </center>
    </div>

    <div class="container head_style">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/i1.jpeg" alt="image" style="height: 450px">
                    <h4>Samsung Galaxy S20 Ultra </h4><h5>(Cosmic Gray, 128 GB)  (12 GB RAM)</h5><h6>Price: ₹97,999</h6>
                    <?php if(!isset($_SESSION["email"])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Order Now!</a>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/i2.jpeg" alt="image" style="height: 450px">
                    <h4>Samsung Galaxy Note 20 Ultra</h4><h5>(Mystic Bronze, 256 GB) (12 GB RAM)</h5><h6>Price: ₹1,04,999</h6>
                    <?php if(!isset($_SESSION["email"])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Order Now!</a>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/i3.jpeg" alt="image" style="height: 450px">
                    <h4>Samsung Galaxy S20+</h4><h5>(Cosmic Gray, 128 GB)  (8 GB RAM)</h5><h6>Price: ₹77,999</h6>
                    <?php if(!isset($_SESSION["email"])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Order Now!</a>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/i4.jpeg" alt="image" style="height: 450px">
                    <h4>Samsung Galaxy Note 10 </h4><h5> (Aura Glow, 256 GB)  (8 GB RAM)</h5><h6>Price: ₹75,000</h6>
                    <?php if(!isset($_SESSION["email"])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Order Now!</a>
                    <?php }?>
                </div>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/i5.jpeg" alt="watch img " style="height: 350px">
                    <h4>Samsung Galaxy Tab S6</h4><h5> 4 GB RAM | 64 GB ROM | 10.4 inch</h5><h6>Price: ₹31,999</h6>
                    <?php if(!isset($_SESSION["email"])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Order Now!</a>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/i6.jpeg" alt="watch img" style="height: 350px">
                    <h4>Samsung Galaxy Tab A</h4><h5> 2GB RAM | 32 GB ROM| 10 inch</h5><h6>Price: ₹19,999</h6>
                    <?php if(!isset($_SESSION["email"])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Order Now!</a>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/i7.jpeg" alt="watch img" style="height: 350px">
                    <h4>Samsung Watch Active 2</h4><h5> Steel Smartwatch  (Black Strap, Regular)</h5><h6>Price: ₹31,999</h6>
                    <?php if(!isset($_SESSION["email"])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Order Now!</a>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/i8.jpeg" alt="watch img" style="height: 350px">
                    <h4>Samsung Watch Active 2 4G</h4><h5>Smartwatch  (Grey Strap, Regular)</h5><h6>Price: ₹28,999</h6>
                    <?php if(!isset($_SESSION["email"])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Order Now!</a>
                    <?php }?>
                </div>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/i9.jpeg" alt="sirt img" style="height: 350px">
                    <h4>Samsung QLED Smart TV1</h4><h5>Q Series 163cm(65 inch) UltraHD (4K)</h5><h6>Price: ₹2,13,999</h6>
                    <?php if(!isset($_SESSION["email"])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Order Now!</a>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/i10.jpeg" alt="sirt img" style="height: 350px">
                    <h4>Samsung QLED Smart TV2</h4><h5>Q Series 163cm(65 inch) UltraHD (4K)</h5><h6>Price: ₹3,70,000</h6>
                    <?php if(!isset($_SESSION["email"])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Order Now!</a>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/i11.jpeg" alt="shirt img" style="height: 350px">
                    <h4>Samsung QLED Smart TV3</h4><h5>Q70RAK 138cm(55 inch) UltraHD (4K) </h5><h6>Price: ₹1,28,999</h6>
                    <?php if(!isset($_SESSION["email"])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Order Now!</a>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/i12nm.jpeg" alt="shirt img" style="height: 350px" >
                    <h4>Samsung Galaxy S10</h4><h5>(Prism Blue, 128 GB)  (8 GB RAM)</h5><h6>Price: ₹57,800</h6>
                    <?php if(!isset($_SESSION["email"])){ ?>
                        <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Order Now!</a>
                    <?php }?>
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
