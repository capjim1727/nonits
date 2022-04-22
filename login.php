<?php
session_start(); //start session
$connection = mysqli_connect('155.138.203.169', 'root', '-v2Nk=j*=481NT=6', 'nonits'); //connect to database

if (isset($_POST['button'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

    $sql = mysqli_query($connection, "SELECT count(*) as total from register where 
        username = '".$username."' and password = '".$password."'") or die(
        mysqli_error($connection));

    $rw = mysqli_fetch_array($sql);

    if($rw['total'] > 0) {
	
	$_SESSION['password'] = $password; //Initializing session

    header("Location: admin.php"); //Redirecting after login
    }
    else 
    {
        echo "<script>alert('username and/or password are incorrect')</script>";
    }
	mysqli_close($connection);
}
?>


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

</head>

    <div class="body">
        <div class="container py-1">
            <div class="row justify-content-md-center py-4 mt-3">
                <p class="text-8 text-color-dark">No Nits Lice Removal LLC</p>
            </div>
        </div>
    </div>
    <br>
    <div role="main" class="main">
        <section class="section section-parallax border-0 m-0">
            <div class="container pb-2 mb-2">
                <div class="row text-center pb-3 mb-3">
                    <div class="col-md-10 mx-md-auto pb-3 mb-3">
                        <div role="main" aria-label="login" class="main shop py-4">
                            <div class="container py-3">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 col-lg-5 mb-3 mb-lg-0">
                                        <h2 class="font-weight-bold text-5 mb-0">Login</h2>
                                        <form action="login.php" id="frmSignIn" method="post" class="needs-validation">
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
                                            <br>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3" name="button" value="submit">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <br>
    <br>
    <br>
    <br>

    <footer id="footer" class="m-0 bg-color-dark">
		<div>
			<div class="row py-5">
				<div class="col-lg-12 text-center text-6 m-0 pb-4">
					NoNitsLiceRemovalLLC
				</div>
			</div>
		</div>
												
		<div class="footer-copyright pt-3 pb-3 container bg-color-dark">
			<div class="row">
				<div class="col-lg-12 text-center m-0 pb-4">
					<p class="text-color-default">CapJimLLC. ©  2020.  All Rights Reserved</p>
				</div>
			</div>
		</div>
	</footer>