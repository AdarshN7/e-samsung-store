<?php
require 'includes/common.php';
?>
<!doctype html>
<html>
<head>
		<title>Product-Lifestyle Store</title>
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
    include 'includes/check-if-added.php';
    ?>
	
	<!-- products   -->
<div class="container head_style">
	<div class="row text-center">
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                <img src="img/i1.jpeg" alt="image" style="height: 450px">
                <h4>Samsung Galaxy S20 Ultra </h4><h5>(Cosmic Gray, 128 GB)  (12 GB RAM)</h5><h6>Price: ₹97,999</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Buy Now!</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(1)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                <img src="img/i2.jpeg" alt="image" style="height: 450px">
                <h4>Samsung Galaxy Note 20 Ultra</h4><h5>(Mystic Bronze, 256 GB) (12 GB RAM)</h5><h6>Price: ₹1,04,999</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Buy Now!</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(2)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                <img src="img/i3.jpeg" alt="image" style="height: 450px">
                <h4>Samsung Galaxy S20+</h4><h5>(Cosmic Gray, 128 GB)  (8 GB RAM)</h5><h6>Price: ₹77,999</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Buy Now!</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(3)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                <img src="img/i4.jpeg" alt="image" style="height: 450px">
                <h4>Samsung Galaxy Note 10 </h4><h5> (Aura Glow, 256 GB)  (8 GB RAM)</h5><h6>Price: ₹75,000</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Buy Now!</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(4)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
	</div>
	

	<div class="row text-center">
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                <img src="img/i5.jpeg" alt="watch img " style="height: 350px">
                <h4>Samsung Galaxy Tab S6</h4><h5> 4 GB RAM | 64 GB ROM | 10.4 inch</h5><h6>Price: ₹31,999</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Buy Now!</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(5)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                <img src="img/i6.jpeg" alt="watch img" style="height: 350px">
                <h4>Samsung Galaxy Tab A</h4><h5> 2GB RAM | 32 GB ROM| 10 inch</h5><h6>Price: ₹19,999</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Buy Now!</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(6)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                <img src="img/i7.jpeg" alt="watch img" style="height: 350px">
                <h4>Samsung Watch Active 2</h4><h5> Steel Smartwatch  (Black Strap, Regular)</h5><h6>Price: ₹31,999</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Buy Now!</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(7)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                <img src="img/i8.jpeg" alt="watch img" style="height: 350px">
                <h4>Samsung Watch Active 2 4G</h4><h5>Smartwatch  (Grey Strap, Regular)</h5><h6>Price: ₹28,999</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Buy Now!</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(8)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
	</div>
	

	<div class="row text-center">
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                <img src="img/i9.jpeg" alt="sirt img" style="height: 350px">
                <h4>Samsung QLED Smart TV</h4><h5>Q Series 163cm(65 inch) UltraHD (4K)</h5><h6>Price: ₹2,13,999</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Buy Now!</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(9)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/i10.jpeg" alt="sirt img" style="height: 350px">
                <h4>Samsung QLED Smart TV</h4><h5>Q Series 163cm(65 inch) UltraHD (4K)</h5><h6>Price: ₹3,70,000</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Buy Now!</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(10)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                <img src="img/i11.jpeg" alt="shirt img" style="height: 350px">
                <h4>Samsung QLED Smart TV</h4><h5>Q70RAK 138cm(55 inch) UltraHD (4K) </h5><h6>Price: ₹1,28,999</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Buy Now!</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(11)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                <img src="img/i12nm.jpeg" alt="shirt img" style="height: 350px" >
                <h4>Samsung Galaxy S10</h4><h5>(Prism Blue, 128 GB)  (8 GB RAM)</h5><h6>Price: ₹57,800</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="#" data-toggle="modal" data-target="#loginModalCenter" class="btn btn-primary btn-block">Buy Now!</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(12)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
	</div>

	</div>
	
	
	<!--  footer  -->
	<<?php
    include 'includes/footer.php';
    ?>


</body>
</html>