
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>REGISTRATION</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/css2.css" rel="stylesheet" type="text/css" media="all" />	
        <div link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
		
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
		<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    </head>
    <body>
	<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("hackathon",$con);

?>
	<div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">
                            <strong>WELCOME TO ELECTRIC BATTERY WEBSITE</strong>
                        </div>
                        <div class="col-sm-6 padding-vert-5">
                            <strong>WELCOME TO ELECTRIC BATTERY WEBSITE</strong>
                        </div>
                    </div>
                </div>
            </div>

	
        
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="assets/img/registration.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="index.php" class="fa-home ">Home</a>
                                    </li>
                                    <li>
                                        <a href="" class="fa-users ">Login</a>
                                       
                                    <li>
                                        <a href="" class="fa-copy active">Registration</a>
                                        
                                    </li>
                                    <li>
                                        <a href="" class="fa-th ">Battery</a>
                                        
                                    </li>
                                    <li>
                                        <a href="" class="fa-comment ">Payment</a>
                                    </li>    
                                    
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
			
            
                        
            <div id="content" class="bottom-border-shadow">
                <div class="container background-white bottom-border">
                    <div class="margin-vert-40">
				<div class="padding-horiz-120">
				 <div class="col-md-9 text-center ">
                            <div class="container">
							  <div class="card"></div>
								<div class="card">
								<h1 class="title">Register </h1>
								<form method="POST" action="battery.php">
								  <div class="input-container">
									<input type="text" name="emailid" required="required"/>
									<label for="Email Id">Email Id</label>
									<div class="bar"></div>
								  </div><div class="input-container">
									<input type="text" name="name" required="required"/>
									<label for="Name">Name</label>
									<div class="bar"></div>
								  </div><div class="input-container">
									<input type="text" name="age" required="required"/>
									<label for="Age">Age</label>
									<div class="bar"></div>
								  </div>
								  <div class="input-container">
									<input type="number" name="license" required="required"/>
									<label for="Licence">License No</label>
									<div class="bar"></div>
								  </div>
								  <div class="input-container">
									<input type="number" name="vehicle" required="required"/>
									<label for="Vehicle">Vehicle No</label>
									<div class="bar"></div>
								  </div>
								  
								<h2>Vehicle Type </h2>
								  <select name="vehiclet">
										
										<option value="Two Vehicle">Two Vehicle</option>
										<option value="Three Vehicle">Three Vehicle</option>
										<option value="Four Vehicle">Four Vehicle</option>
									</select>
								  
								  <div class="input-container">
									<input type="password" name="password" required="required"/>
									<label for="Password">Password</label>
									<div class="bar"></div>
								  </div>
								 
								    
								   <input type="submit" value="register" name="submit">
								</form>
								<br>
				  <br>
				  <br>
				  <br>
				  <br>
				  <br>
							  </div>
							</div>
                        </div>
                        <!-- End Main Text -->
						
                </div>
            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
           
                    </div>
                </div>
            </div>
			
            <!-- End Footer -->
            <!-- JS -->
			
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
			
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->