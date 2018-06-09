<html>
<head>
<?php require_once("./class.php");

?>
<title>CarSeller+||Home</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all" />
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="sell car Online, Buy car Online, Need to sell a car, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/cookie.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body style="background-image:url(./images/009.jpg); background-size:cover;">
	<!--header-->
	
		<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="detail">
						<ul>
							<li><a href="tel:0798378646" style="color:#ffffff;"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> +254 798 878 646 | admin</a></li>
							<li><a href="owner.php" style="color:#ffffff;"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Login </li>
						</ul>
					</div>
					<div class="indicate">
						<p><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Nairobi | Kenya.</p>
					
						
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
				<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php">CarSeller<span>+</span></a></h1>
							</div>
						</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
									<li><a href="owner.php"><span data-hover="Owners Portal">Owners Portal</span></a></li>
									<li  class="active"><a href="allcars.php"><span data-hover="All Cars">All Cars</span></a></li>
										<li><a href="car-hire.php"><span data-hover="CarHire">CarHire</span></a></li>	
									<li><a href="contact.php"><span data-hover="Contact us">Contact us</span></a></li>
							
									
								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<div class="col-md-12 col-xs-12">
		
		 <?php Carsproject::getallcars(); ?>
      
		

		
		</div>
		
		</body>
		</html>
		
		
		
		
		
		
		
		
		
		
		