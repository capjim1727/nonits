<?php
if(isset($_POST['button'])){
			    
    $fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

    //TO ALERT SUBMISSION OF BLANK FIELDS(IT DOESN'T PREVENT SUBMISSION OF BLANK FIELD THOUGH)
    if (!$username && !$password){
        echo "can't submit blank fields";
    }

    //TO CONFIRM YOU ARE CONNECTED TO YOUR DATABASE (OPTIONAL)
    $connection = mysqli_connect('155.138.203.169', 'root', '-v2Nk=j*=481NT=6', 'nonits');
    if (!$connection){
        echo "connection failed ";
	}
    

    //TO INSERT username and password from field to jossyusers database
    $query = "INSERT INTO register(fullname,username,password,email,phone) VALUES('$fullname', '$username', '$password', '$email', '$phone')";
    $result = mysqli_query($connection, $query);
	$url = "";
    if(!$result){
        die("OOPPS! query failed".mysqli_error($connection)); 
    }else {
		echo "<script>location.href='$url'</script>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>NoNitsLiceRemovalLLC | Register</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/styles.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-construction-2.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/skin-construction-2.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>
		<script src="https://www.google.com/recaptcha/api.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-effect-shrink bg-color-tertiary custom-header" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 100, 'stickyHeaderContainerHeight': 83}">
				<div class="header-body border-0 box-shadow-none">
					<div class="header-container container-fluid bg-dark px-0">
						<div class="header-row">
							<div class="container">
								
							<div id="mySidebar" class="sidebar">
									<a href="javascript:void()" class="closebtn" onclick="closeNav()">×</a>
									<a href="login.php">LOGIN</a>
									<a href="register.php">REGISTER</a>
									<a href="plumbers.html">PLUMBING</a>
									<a href="construction.html">GENERAL CONSTRUCTION</a>
									<a href="homeservices.html">HOME SERVICES</a>
									<a href="food.html">FOOD SERVICES</a>
									<a href="painting.html">PAINTING</a>
									<a href="tow.html">TOW SERVICES</a>	
									<a href="logout.php">LOGOUT</a>
								</div>
								
								<div id="main">
									<button class="openbtn" onclick="openNav()">☰</button>  
								</div>
								
								<script>
									function openNav() {
									document.getElementById("mySidebar").style.width = "180px";
									document.getElementById("main").style.marginLeft = "180px";
									}
									
									function closeNav() {
									document.getElementById("mySidebar").style.width = "0";
									document.getElementById("main").style.marginLeft= "0";
									}
								</script>

								<div class="header-column justify-content-end">
									<div class="header-row">
										<div class="header-nav header-nav-line justify-content-end">
											<div class="header-nav-main">
												<nav class="sitenavigation">
													<ul class="nav nav-links">
														<li class="logo-for-mobile">
															<a class="text-6" href="index.php">
																HOME
															</a>
														</li>
														<br>
														<li class="dropdown">
															<a class="text-6" href="login.php">
																LOGIN
															</a>
														</li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
   
            <div role="main" aria-label="Register" class="main">
                <section class="page-header bg-color-tertiary custom-page-header page-header-modern page-header-background page-header-background-sm parallax mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}" data-image-src="img/demos/construction-2/page-header.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 align-self-center">
                                <ul class="breadcrumb custom-breadcrumb d-block text-center text-4">
                                    <li><a href="Ibrakedown.html">Home</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12 align-self-center p-static text-center mt-2">
                                <h1 class="font-weight-bold text-color-dark text-11">NoNitsLiceRemovalLLC</h1>
                            </div>
                        </div>
                    </div>
                </section>

            <div role="main" aria-label="Register" class="main shop py-4">
				<div class="container py-4">
					<div class="row justify-content-center">
                        <div class="col-md-6 col-lg-5">
                            <h2 class="font-weight-bold text-5 mb-0">Register</h2>
                            <form action="register.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark text-3">Full Name <span class="text-color-danger">*</span></label>
                                        <input type="text" value="" class="form-control form-control-lg text-4" name="fullname" required>
                                    </div>
                                </div>
								<div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark text-3">Username <span class="text-color-danger">*</span></label>
                                        <input type="text" value="" class="form-control form-control-lg text-4" name="username" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
                                        <input type="password" value="" class="form-control form-control-lg text-4" name="password" required>
                                    </div>
                                </div>
								<div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark text-3">Email <span class="text-color-danger">*</span></label>
                                        <input type="Phone" value="" class="form-control form-control-lg text-4" name="email" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-dark text-3">Phone Number <span class="text-color-danger">*</span></label>
                                        <input type="Phone" value="" class="form-control form-control-lg text-4" name="phone" required>
                                    </div>
                                </div>
								<div class="g-recaptcha" data-sitekey="6LfE53kaAAAAAGqGVpP8hXEa6EUWKaFKxJbVWQy3"></div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="submit" name="button" class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3" value="submit"></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    		<footer id="footer" class="bg-color-dark border-top-0 mt-0 custom-footer">
				<div class="container container-lg-custom">
					<div class="footer-copyright footer-copyright-style-2 bg-color-dark">
						<div class="py-2">
							<div class="row py-4">
								<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
									<p class="text-3 text-color-light opacity-7">NoNitsLiceRemovalLLC. © 2020. All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/jquery.vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>

		<!--(remove-empty-lines-end)-->

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-construction-2.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.gallery.js"></script>	

	</body>

</html>