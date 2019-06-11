<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="ICAN online e-learning website for ICAN students.">
	<meta name="keywords" content="ICAN, Account, Accounting, Lecture, e-Learning">
	<meta name="author" content="Uwem slim Udoh">


	<!-- favicon links-->
	<link rel="shortcut icon" href="images/favicon/favicon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<title>ICANLECTURES.COM - Checkout</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >

	<!-- style sheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">


	<!-- font-awesome -->
	<link rel="stylesheet" href="font/css/font-awesome.min.css">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">




	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>
  <body>

	<div class="overlay">

		<?php
		  include "inc/navin.php";
		?>

		<div class="check-banner">
			 <div class="container">
				<div class="row">
				  <div class="col-md-2">
					<img src="images/checkpng.png" alt="">
				  </div>
				  <div class="col-md-10">
					<h4 style="color:#fff">
					  <a href="index.php">HOME</a> <i class="fa fa-arrows-h"></i> <a href="cart.php">CART</a><i class="fa fa-arrows-h"></i> CHECKOUT
					</h4>
				  </div>
				</div>
			 </div>
		</div>


		<div class="section-4">
			<div class="container section4-bg">
				 <div class="col-md-12 text-center">
					<h2>EXPRESS CHECKOUT</h2>
					<span class="note">PLEASE ENTER YOUR DETAILS BELOW TO COMPLETE YOUR PURCHASE.</span>
				  </div>
			 	<form> 

				 <div class="row" style="clear: both;">
					<div style="width: 100%; margin: 50px auto;padding: 0 30px;overflow: auto;">

						<div class="col-md-12" >
							<div class="col-xs-4 col-sm-4 col-md-4">
								<div class="ckt-bar" id="ckt-left">
									<i class="fa fa-check-square-o fa-5x"></i>							
								 	<h3> BILLING ADDRESS</h3>
								</div>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4">
								<div class="ckt-bar" id="ckt-middle">
									<i class="fa fa-square-o fa-5x"></i>							
								 	<h3> SHIPPING ADDRESS</h3>
								</div>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4">
								<div class="ckt-bar" id="ckt-right">
									<i class="fa fa-square-o fa-5x"></i>							
								 	<h3> ORDER SUMMARY</h3>
								</div>
							</div>							
						</div>



						<div class="cart-empty">
							<div class="col-md-6" style="border: 1px dotted red;">
								<h4>PERSONAL DETAILS</h4>
								<div style="margin-top: 50px;"></div>
								<div class="col-md-12">
									<div class="col-md-6 text-left">
										<label>FIRSTNAME</label>
										<div class="ship-div">
											<input type="text" name="" class="ship-inp">
										</div>
									</div>
									<div class="col-md-6 text-left">
										<label>LASTNAME</label>
										<div class="ship-div">
											<input type="text" name="" class="ship-inp">
										</div>
									</div>
								</div>


								<div style="margin-top: 20px;clear: both;"></div>
								<div class="col-md-12 text-left">
									<div class="col-md-12">
										<label>EMAIL</label>
										<div class="ship-div">
											<input type="email" name="" class="ship-inp">
										</div>
									</div>						
								</div>

								<div style="margin-top: 20px;clear: both;"></div>
								<div class="col-md-12 text-left">
									<div class="col-md-12">
										<label>TELEPHONE</label>
										<div class="ship-div">
											<input type="telephone" name="" class="ship-inp">
										</div>
									</div>						
								</div>
							</div>

							<div class="col-md-6" style="border: 1px dotted red;">
								<h4>SHIPPING DETAILS</h4>
								<div style="margin-top: 50px;clear: both;"></div>
								<div class="col-md-12 text-left">
									<div class="col-md-12">
										<label>ADDRESS 1</label>
										<div class="ship-div">
											<input type="text" name="" class="ship-inp">
										</div>
									</div>						
								</div>

								<div style="margin-top: 20px;clear: both;"></div>
								<div class="col-md-12 text-left">
									<div class="col-md-12">
										<label>ADDRESS 2</label>
										<div class="ship-div">
											<input type="text" name="" class="ship-inp">
										</div>
									</div>						
								</div>

								<div style="margin-top: 20px;clear: both;"></div>
								<div class="col-md-12">
									<div class="col-md-6 text-left">
										<label>STATE</label>
										<div class="ship-div">
											<input type="text" name="" class="ship-inp">
										</div>
									</div>
									<div class="col-md-6 text-left">
										<label>COUNTRY</label>
										<div class="ship-div">
											<input type="text" name="" class="ship-inp">
										</div>
									</div>
								</div>							
							</div>							
						</div>
					</div> 
				 </div>

				  <div class="row">
					<div class="col-md-12 text-center">
						<span class="note">
							<input type="checkbox" name="" class="">
							BY PLACING ORDER YOU AGREE TO THE <a href="terms.php" style="color: red;text-decoration: underline;">TERMS AND CONDITIONS</a>.
						</span>

						 <div class="buy-btn">
							<a href="summary.php">
								  <div style="height: 40px;">
									<div class="buybtn-left">
										PLACE ORDER
									</div>
									
									<div class="buybtn-right">
									  <img src="images/paycard.png" alt="">
									</div>
								  </div>
							</a>
						  </div>				  
					</div>
				  </div>
				  </form>
			</div>
	  	</div>

	  <?php
		include "inc/footer.php";
	  ?>
