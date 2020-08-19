<div class="navbar navbar-default navbar-fixed-top”">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">E-Samsung Store</a>
        </div>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">

                <?php if (isset($_SESSION['email'])){ ?>
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                    <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span>Setting</a></li>
                    <li><a href="logout.php" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>

                <?php } else { ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                <li><a href="#" data-toggle="modal" data-target="#loginModalCenter"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span>About</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>

                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="loginModalLongTitle">Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="panel-body">
                <p class="text-warning">Login to make a purchase</p>
                <form method="post" action="login_submit.php" >
                    <div class="form-group">
                        <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true" >
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true" >
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                </form>
            </div>
            <div class="modal-footer">
                <p>Don't have an account?<a href="signup.php">Resister</a></p>
            </div>
        </div>
    </div>
</div>

<!--logout Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>