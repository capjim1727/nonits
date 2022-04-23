<?php
if(isset($_POST['button'])){
    
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
    $Age = $_POST['Age'];
    $Note = $_POST['Note'];

     //TO CONFIRM YOU ARE CONNECTED TO YOUR DATABASE (OPTIONAL)
     $connection = mysqli_connect('155.138.203.169', 'root', '-v2Nk=j*=481NT=6', 'nonits');
     if (!$connection){
         echo "connection failed ";
     }
            
     //TO INSERT customer information from field to nonits database customer table
    $query = "INSERT INTO customers(FirstName,LastName,Phone,Email,Gender,Age,Note) VALUES('$FirstName', '$LastName', '$Phone', '$Email', '$Gender', '$Age', '$Note')";
    $result = mysqli_query($connection, $query);
	$url = "";
    if(!$result){
        die("OOPPS! query failed".mysqli_error($connection)); 
    }
    else {
		echo "<script>alert('Thank You')</script>";
	}
    
}
?>

<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>NoNitsLiceRemovalServices</title>	

		<meta name="keywords" content="NoNitsLiceRemovalServices" />
		<meta name="description" content="NoNits">
		<meta name="developer" content="CapJimLLC.com">

		<!-- Custom Image -->
		<link rel="shortcut icon" href="img/penny.png" type="" />
		<link rel="apple-touch-icon" href="img/penny.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=yes">

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

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-medical-2.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/skin-medical-2.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">

		<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
						<div class="container h-100">
							<div class="header-row h-100">
								<div class="header-column justify-content-between">
									<div class="header-row">
										<nav class="header-nav-top w-100">
											<ul class="nav nav-pills justify-content-between w-100 h-100">
												<li class="nav-item py-2 d-none d-xl-inline-flex">
													<span class="header-top-phone py-2 d-flex align-items-center text-color-primary font-weight-semibold text-uppercase">
														<i class="icon-phone icons text-5 mr-2"></i> <a href="tel:+1234567890">(305) 676-1940</a>
													</span>
													<span class="header-top-email px-0 font-weight-normal d-flex align-items-center"><i class="far fa-envelope text-4"></i>  <a class="text-color-default" href="mailto:mail@example.com">nonitsliceremovalservices@gmail.com</a></span>
													<span class="header-top-opening-hours px-0 font-weight-normal d-flex align-items-center"><i class="far fa-clock text-4"></i>Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED</span>
												</li>
												<li class="nav-item nav-item-header-top-socials d-flex justify-content-between">
													<span class="header-top-socials p-0 h-100">
														<ul class="d-flex align-items-center h-100 p-0">
															<li class="list-unstyled">
																<a href="#"><i class="fab fa-instagram text-color-quaternary text-hover-primary"></i></a>
															</li>
															<li class="list-unstyled">
																<a href="#"><i class="fab fa-facebook-f text-color-quaternary text-hover-primary"></i></a>
															</li>
															<li class="list-unstyled">
																<a href="#"><i class="fab fa-twitter text-color-quaternary text-hover-primary"></i></a>
															</li>
														</ul>
													</span>
													<span class="header-top-button-make-as-appoitment d-inline-flex align-items-center justify-content-center h-100 p-0 align-top">
														<a href="appointments.php" class="d-flex align-items-center justify-content-center h-100 w-100 btn-primary font-weight-normal text-decoration-none">MAKE AN APPOINTMENT</a>
													</span>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container bg-color-light">
						<div class="header-row">
							<div class="header-column header-column-logo">
								<div class="header-row">
									<div class="header-logo font-weight-bold text-6 text-color-dark">
										
									NoNitsLiceRemoval<br>Services© 
										
									</div>
								</div>
							</div>
							<div class="header-column header-column-nav-menu justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown-secondary">
														<a class="nav-link" href="index.php">
															Home
														</a>
													</li>
													<li class="dropdown-secondary">
														<a class="nav-link" href="myths.php">
															Myths & Facts
														</a>
													</li>													
													<li class="dropdown-secondary">
														<a class="nav-link active" href="customer.php">
															Contact Us
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>


                <div class="container">
                    <div role="main" class="main">
                        <div class="row py-4">
                            <div class="col-lg-6">
                                <div class="overflow-hidden mb-1">
                                    <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
                                </div>
                                <div class="overflow-hidden mb-4 pb-3">
                                    <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Feel free to ask for details, don't save any questions!</p>
                                </div>
                                <form action="customer.php" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <label class="required font-weight-bold text-dark text-2">First Name</label>
                                            <input type="text" value="" data-msg-required="Please enter your first name." maxlength="100" class="form-control" name="FirstName" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="required font-weight-bold text-dark text-2">Last Name</label>
                                            <input type="text" value="" data-msg-required="Please enter your last name." maxlength="100" class="form-control" name="LastName" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="required font-weight-bold text-dark text-2">Phone</label>
                                            <input type="phone" value="" data-msg-required="Please enter your phone number." maxlength="10" class="form-control" name="Phone" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="required font-weight-bold text-dark text-2">Email Address</label>
                                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="Email" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="required font-weight-bold text-dark text-2">Gender</label>
                                            <input type="text" value="" data-msg-required="Please enter your first name." maxlength="10" class="form-control" name="Gender" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="required font-weight-bold text-dark text-2">Age</label>
                                            <input type="text" value="" data-msg-required="Please enter your first name." maxlength="2" class="form-control" name="Age" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label class="required font-weight-bold text-dark text-2">Message</label>
                                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="Note" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <input type="submit" value="Send Message" name="button" class="btn btn-primary btn-modern"></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                                    <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                                    <ul class="list list-icons list-icons-style-2 mt-2">
                                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address: 1196 19th Avenue Southwest, Vero Beach, FL 32962-5305</strong></li>
                                        <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone: (305) 676-1940</strong></li>
                                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email: <a href="mailto:mail@example.com">nonitsliceremovalservices@gmail.com</strong></a></li>
                                    </ul>
                                </div>
                                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                                    <h4 class="pt-5">Business <strong>Hours</strong></h4>
                                    <ul class="list list-icons list-dark mt-2">
                                        <li><i class="far fa-clock top-6"></i><strong class="text-dark"> Monday - Friday - 9am to 5pm</strong></li>
                                        <li><i class="far fa-clock top-6"></i><strong class="text-dark"> Saturday - 9am to 2pm</strong></li>
                                        <li><i class="far fa-clock top-6"></i><strong class="text-dark"> Sunday - Closed</strong></li>
                                    </ul>
                                </div>
                                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1100">
                                    <h4 class="pt-5">Get in <strong>Touch</strong></h4>
                                </div>
                            </div>
                        </div>
                    </div>             
                </div>
                <footer id="footer" class="m-0 bg-color-quaternary">
					<div>
						<div class="row py-5">
							<div class="col-lg-12 text-center text-6 m-0 pb-4">
							NoNitsLiceRemovalServices © 
							</div>
						</div>
					</div>
												
					<div class="footer-copyright pt-3 pb-3 container bg-color-quaternary">
						<div class="row">
							<div class="col-lg-12 text-center m-0 pb-4">
								<p class="text-color-default">CapJimLLC. ©  2020.  All Rights Reserved</p>
							</div>
						</div>
					</div>
				</footer> 

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
                <script src="js/demos/demo-medical-2.js"></script>

                <!-- Theme Custom -->
                <script src="js/custom.js"></script>


                <!-- Theme Initialization Files -->
                <script src="js/theme.init.js"></script>




                <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
                <script>
                    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                    ga('create', 'UA-12345678-1', 'auto');
                    ga('send', 'pageview');
                </script>
                -->


            </body>
        </html>
