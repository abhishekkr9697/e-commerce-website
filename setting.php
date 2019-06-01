<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) 
    {   
        header('location:index.php'); 
    } 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>     
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <div class="main_body">
	<div class="container">
		<div class="body_content">
		<div class="col-xs-6 col-xs-offset-3">
			<h2>Change Password</h2>
			<form method="post" action="setting_script.php">
				<div class="form-group">
					<input type="password" name="old_pass" placeholder="Old Password" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="new_pass" placeholder="New Password" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="re_pass" placeholder="Retype Password" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Change</button>
				</div>
                                <div>
                                    <?php
                                    if(isset($_GET['pass_msg']))
                                    { echo $_GET['pass_msg']; }
                                    ?>
                                </div>
			</form>
		</div>
		</div>
	</div>
	</div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>
