<?php
session_start();
if(!isset($_SESSION['password'])) {
	header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>NoNitsLiceRemovalLLC</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

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
					<div class="header-container container bg-color-light">
						<div class="header-row">
							<div class="header-column header-column-logo">
								<div class="header-row">
									<div class="header-logo text-7 text-color-dark">
										
											NoNitsLiceRemovalLLC
										
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
														<a class="nav-link" href="admin.php">
															Home
														</a>
													</li>
													<li class="dropdown-secondary">
														<a class="nav-link" href="logout.php">
															Logout
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

			<style>
            html *
            {
            font-family:  'Poppins', sans-serif;
            font-size:    14px;
			color: #000000;
            }

            </style>
            <style>
            table {
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #add8ff;
            }
            </style>
            <style>
            .spinner {
            margin: 100px auto 0;
            width: 70px;
            text-align: center;
            }

            .spinner > div {
            width: 18px;
            height: 18px;
            background-color: #999;

            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            }

            .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
            }

            .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
            }

            @-webkit-keyframes sk-bouncedelay {
            0%, 80%, 100% { -webkit-transform: scale(0) }
            40% { -webkit-transform: scale(1.0) }
            }

            @keyframes sk-bouncedelay {
            0%, 80%, 100% { 
            -webkit-transform: scale(0);
            transform: scale(0);
            } 40% { 
            -webkit-transform: scale(1.0);
            transform: scale(1.0);
            }
            }			
            </style> 

			<body>
				<div class="container">
                    <div role="main" class="main">
                        <div class="row py-4 my-5">
						<h1 class="text-5 text-center">Inquiries</h1>
							<div style="overflow-x:auto; width: 100%;">
								<table border="2">
									<tr>
										<th class="text-center">FirstName</th>
										<th class="text-center">LastName</th>
										<th class="text-center">Phone</th>
										<th class="text-center">Email</th>
                                        <th class="text-center">Note</th>
									</tr>
								
									<?php
									$servername = "155.138.203.169";
									$username = "root";
									$password = "-v2Nk=j*=481NT=6";
									$dbname = "nonits";

									// Create connection
									$connection = mysqli_connect('155.138.203.169', 'root', '-v2Nk=j*=481NT=6', 'nonits');
									// Check connection
									if ($connection->connect_error) {
										die("Connection failed: " . $connection->connect_error);
									}

									$sql = "SELECT CustomerID, FirstName, LastName, Phone, Email, Note FROM customers";
									$result = $connection->query($sql);

									if ($result->num_rows > 0) {
										// output data of each row
										while($row = $result->fetch_assoc()) {
											echo "<tr><td>". $row["FirstName"]. "</td><td>" . $row["LastName"] . "</td><td>". $row["Phone"]. "</td><td>" . $row["Email"] . "</td><td>" . $row["Note"] . "</td></tr>";
										}
									} else {
										echo "0 results";
									}

									$connection->close();
									?>
								</table>
							</div>
						</div>
                    </div>            
                </div>

				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
							
				<footer id="footer" class="m-0 bg-color-quaternary">
					<div>
						<div class="row py-5">
							<div class="col-lg-12 text-color-light text-center text-6 m-0 pb-4">
								NoNitsLiceRemovalLLC
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