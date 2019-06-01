<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand">Lifestyle Store</a>
			<button type="button" class="navbar-toggle" data-target="#myicon" data-toggle="collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar">/<span>
			</button>
		</div>
		<div>
			<div class="collapse navbar-collapse" id="myicon">
				<ul class="nav navbar-nav navbar-right">
                                    <?php
                                        if (isset($_SESSION['email'])) {
                                    ?>
                                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
					<li><a href="setting.php"><span class="glyphicon glyphicon-user"></span>Setting</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                                    <?php 
                                        }
                                        else {
                                    ?>                                     
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Signup</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbspLogin</a></li>
                                    <?php                                    
                                        }
                                    ?>
				</ul>
			</div>
		</div>
	</div>
</div>
