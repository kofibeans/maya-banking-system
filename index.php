<?php
session_start();
include "core/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Leiana Mari Aquino & Cristel Kaye Biliones">

	<title>
		<?php echo SITE_NAME ?>
	</title>
	<link href="assets/img/logo-icon.png" rel="icon">

	<!-- vendor css files -->
	<link href="assets/css/custom.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" rel="stylesheet">

	<!-- main css files -->
	<link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
	<!-- top bar start -->
	<div class="alert bg-primary py-1 m-0 border-0 rounded-0 alert-dismissible fade show text-center overflow-hidden" role="alert">
		<p class="text-secondary m-1">Meet your new all-in-one web-based banking system</p>
	</div>
	<!-- top bar end -->

	<!-- header start -->
	<header class="navbar-light bg-body-tertiary sticky-top">
		<nav class="navbar navbar-expand-lg mx-5 px-5" aria-label="Offcanvas navbar large">
			<div class="container-fluid">
				<!-- responsive offcanvas button -->
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
					<span class="navbar-fries-icon"></span>
				</button>
				<!-- navbar brand -->
				<a href="#" class="navbar-brand">
					<img src="assets/img/logo-nav.png" alt="logo" class="navbar-brand-item" height="45">
				</a>
				<!-- offcanvas navbar deets -->
				<div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
					<div class="offcanvas-header">
						<img src="assets/img/logo-nav.png" alt="logo" class="navbar-brand-item" height="45">
						<button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<ul class="navbar-nav justify-content-end flex-grow-1 px-3">
							<li class="nav-item pe-3">
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item dropdown pe-3">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="includes/bills-payment.php">Bills Payment</a></li>
									<li><a class="dropdown-item" href="includes/bank-transfer.php">Bank Transfer</a></li>
									<li><a class="dropdown-item" href="includes/send-money.php">Send Money</a></li>
								</ul>
							</li>
							<li class="nav-item pe-3">
								<a class="nav-link" href="includes/user-guide.php">User Guide</a>
							</li>
							<li class="nav-item pe-3">
								<a class="nav-link" href="includes/faqs.php">Help & Support <span class="bi bi-box-arrow-up-right" style="font-size: 12px;"></span></a>
							</li>
						</ul>
					</div>
				</div>
				<a href="user/createAcc.php"><button class="btn btn-secondary text-primary fw-bold" type="submit">Sign in Now</button></a>
			</div>
		</nav>
	</header>
	<!-- header end -->

	<!-- hero start -->
	<div class="hero-banner">
		<div class="container col-sm-12 px-2 pt-5 pb-5">
			<div class="row flex-lg-row-reverse align-items-center g-5 pt-5 mb-0">
				<div class="col-10 col-sm-8 col-lg-6 pt-4">
					<img src="assets/img/hero-banner.png" class="d-block mx-lg-auto img-fluid" alt="liza" height="500" loading="lazy">
				</div>
				<div class="col-lg-6">
					<h1 class="display-2 lh-1 text-white">my money</h1>
					<h1 class="display-2 fw-bold lh-0 text-primary">my bank</h1>
					<h1 class="display-2 lh-1 mb-3 text-white">my way</h1>
					<h4 class="fw-bold lh-3 py-2 text-primary">Liza has leveled up to the no. 1 digital bank app. Now it's your turn to enjoy the web-based banking system too!</h4>
					<div class="d-grid gap-2 d-md-flex justify-content-md-start">
						<a href="user/createAcc.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Get started</button></a>
						<a href="user/loginAcc.php"><button type="button" class="btn btn-secondary btn-lg px-4 me-md-4 fw-bold">Login to your account</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- hero end -->

	<!-- introduction section start -->
	<div class="intro-sec-banner">
		<div class="container col-sm-12 px-2">
			<div class="row flex-lg-row-reverse align-items-center g-5 p-5 mb-0">
				<h1 class="display-3 fw-bold lh-0 text-secondary text-center ">Meet your newest<br>web-based banking system!</h1>
				<div class="card-group text-center mb-5">
					<div class="card card-col h-100 me-2">
						<img src="assets/img/easy.png" class="card-img-top mx-auto" alt="...">
						<div class="card-body px-5 py-2">
							<h2 class="card-title fw-bold text-secondary">Easy to use</h2>
							<p class="card-text">Streamlined technology designed to simplify your banking experience and save you time.</p>
						</div>
					</div>
					<div class="card card-col h-100 me-2">
						<img src="assets/img/send.png" class="card-img-top mx-auto" alt="...">
						<div class="card-body px-5 py-2">
							<h2 class="card-title fw-bold text-secondary">Fast Transaction</h2>
							<p class="card-text">Efficient digital banking services that process transactions quickly and securely, empowering you to manage your finances at lightning speed.</p>
						</div>
					</div>
					<div class="card card-col h-100">
						<img src="assets/img/secure.png" class="card-img-top mx-auto" alt="...">
						<div class="card-body px-5 py-2">
							<h2 class="card-title fw-bold text-secondary">Safe and Secure</h2>
							<p class="card-text">Robust security measures to protect your financial information and provide peace of
								mind while managing your accounts online.</p>
						</div>
					</div>
				</div>
				<h5 class="fw-bold lh-0 text-secondary text-center mt-0">and more will come!</h5>
			</div>
		</div>
	</div>
	<!-- introduction section end -->

	<!-- services section start -->
	<div class="container py-5">
		<div class="text-center pt-5 mb-5">
			<h4 class="lh-0 fw-bold text-success mb-0">SERVICES</h4>
			<h1 class="display-2 fw-bold lh-0 text-black">Your Money. Your Way.</h1>
		</div>
		<div class="px-4 py-3 mb-4 rounded-3 intro-sec-banner">
			<div class="container-fluid py-5">
				<h3 class="fw-bold"><span class="badge rounded-pill bg-success">Coming Soon</span></h3>
				<h1 class="display-5 fw-bold">We’ve got everything—and soon dark mode too!</h1>
				<p class="col-md-8 fs-4">Maya now comes with one of the greatest innovations of the 21st century. That’s right, we’ll have dark mode next! We hear it puts less strain on the eyes and saves battery (but we think it’s nice to look at, too!).</p>
			</div>
		</div>
		<div class="row align-items-md-stretch pb-5">
			<div class="col-md-4">
				<div class="h-100 p-5 bg-danger-subtle rounded-3 ">
					<div class="row g-0">
						<div class="col">
							<img src="assets/img/bills-pay.png" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col">
							<div class="card-body">
								<h3 class="card-title fw-bold">Bills Payment</h3>
								<p class="card-text">When you pay your bills with Maya, lines and waiting become a thing of the past.
								</p>
								<a href="includes/bills-payment.php"><button class="btn btn-success text-white fw-bold" type="submit">Read More</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="h-100 p-5 bg-warning-subtle rounded-3">
					<div class="row g-0">
						<div class="col">
							<img src="assets/img/bank-transfer.png" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col">
							<div class="card-body">
								<h3 class="card-title fw-bold">Bank Transfer</h3>
								<p class="card-text pb-5">Transferring Money from your Maya account to a bank</p>
								<a href="includes/bank-transfer.php"><button class="btn btn-success text-white fw-bold" type="submit">Read More</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="h-100 p-5 bg-info-subtle rounded-3">
					<div class="row g-0">
						<div class="col">
							<img src="assets/img/send-money.png" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col">
							<div class="card-body">
								<h3 class="card-title fw-bold">Send Money</h3>
								<p class="card-text">Sending money with Maya is fast, simple, and if we’re being honest, pretty cool!</p>
								<a href="includes/send-money.php"><button class="btn btn-success text-white fw-bold" type="submit">Read More</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- services section end -->

	<!-- feature section start -->
	<div class="bg-success">
		<div class="container py-5">
			<div class="py-5">
				<h4 class="lh-0 fw-bold text-white mb-0">FEATURES</h4>
				<h1 class="display-3 fw-bold lh-0 text-white">What made Maya great.</h1>
			</div>
			<div class="card-group mb-5">
				<div class="card card-col rounded-3 bg-white h-100 me-4 mb-3 p-4" style="max-width: 400px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="assets/img/protected.png" class="img-fluid mx-auto" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title text-secondary fw-bold">Protected Transaction</h5>
								<p class="card-text">We provide the feature of end-to-end encrypted details while the ongoing payment.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card card-col rounded-3 bg-white h-100 me-4 mb-3 p-4" style="max-width: 400px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="assets/img/email-verif.png" class="img-fluid mx-auto" alt="...">
						</div>
						<div class="col-md-8 pb-4">
							<div class="card-body">
								<h5 class="card-title text-secondary fw-bold">Email Verification</h5>
								<p class="card-text">We have enhanced security measures to ensure your safer transactions. Verify your email accounts.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card card-col rounded-3 bg-white h-100 me-4 mb-3 p-4" style="max-width: 400px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="assets/img/dashboard.png" class="img-fluid mx-auto" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title text-secondary fw-bold">Graphical Dashboard</h5>
								<p class="card-text">We provide easy to use and flexible dashboard to our customers with visualize graphs.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- feature section end -->

	<!-- account section start -->
	<div class="container py-5">
		<div class="m-5 p-5 bg-success-subtle rounded-3">
			<div class="row justify-content-around">
				<div class="col">
					<img src="assets/img/maya-app.png" alt="" class="img-fluid" loading="lazy">
				</div>
				<div class="col-5">
					<h1 class="fw-bold">Open an account</h1>
					<p>Access banking features, get a more personalized experience, and bump up your wallet limit by following
						these steps!</p>
					<ul class="list-unstyled">
						<li><i class="bi bi-check-circle"></i> Fill Your Basic Detail.</li>
						<li><i class="bi bi-check-circle"></i> Create Username and Password.</li>
					</ul>
					<a href="includes/user-guide.php"></a><button class="btn btn-success text-white fw-bold" type="submit">Read More</button>
				</div>
			</div>
		</div>
	</div>
	<!-- account section end -->

	<!-- footer start-->
	<footer class="footer mt-auto py-3 bg-secondary">
		<div class="container">
			<div class="row row-cols-3 row-cols-sm-3 row-cols-md-5 py-0 my-5">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-3">
					<a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
						<img src="assets/img/logo-mgreen.png" class="bi me-2 mb-2" height="55px" alt="">
					</a>
					<ul class="list-unstyled d-flex">
						<li class="ms-0">
							<a class="link-body-emphasis h3" href="https://www.facebook.com/mayaiseverything/">
								<i class="bi bi-meta rounded-pill text-white"></i>
							</a>
						</li>
						<li class="ms-3">
							<a class="link-body-emphasis h3" href="https://twitter.com/mayaofficialph">
								<i class="bi bi-twitter rounded-pill text-white"></i>
							</a>
						</li>
						<li class="ms-3">
							<a class="link-body-emphasis h3" href="https://www.instagram.com/mayaiseverything/">
								<i class="bi bi-instagram rounded-pill text-white"></i>
							</a>
						</li>
						<li class="ms-3">
							<a class="link-body-emphasis h3" href="https://t.me/TeamMayaPH">
								<i class="bi bi-telegram rounded-pill text-white"></i>
							</a>
						</li>
						<li class="ms-3">
							<a class="link-body-emphasis h3" href="https://www.linkedin.com/company/mayaph">
								<i class="bi bi-linkedin rounded-pill text-white"></i>
							</a>
						</li>
						<li class="ms-3">
							<a class="link-body-emphasis h3" href="https://www.youtube.com/channel/UCZxaBVA68d8LRb64Qw2ha5g">
								<i class="bi bi-youtube rounded-pill text-white"></i>
							</a>
						</li>
						<li class="ms-3">
							<a class="link-body-emphasis h3" href="https://www.tiktok.com/@mayaiseverything">
								<i class="bi bi-tiktok rounded-pill text-white"></i>
							</a>
						</li>
					</ul>
					<p class="text-white">Maya is powered by the country's only end-to-end digital payments company Maya Philippines, Inc. and Maya Bank, Inc. for digital banking services. Maya Philippines, Inc. and Maya Bank, Inc. are regulated by the Bangko Sentral ng Pilipinas.</p>
				</div>
				<div class="col mb-3"></div>
				<div class="col mb-3 ms-3">
					<h4 class="fw-bold text-primary mt-5"><br>Services</h4>
					<ul class="nav flex-column">
						<li class="nav-item mb-2"><a href="includes/bills-payment.php" class="nav-link p-0 text-white">Bills Payment</a></li>
						<li class="nav-item mb-2"><a href="includes/bank-transfer.php" class="nav-link p-0 text-white">Bank Transfer</a></li>
						<li class="nav-item mb-2"><a href="includes/send-money.php" class="nav-link p-0 text-white">Send Money</a></li>
					</ul>
				</div>
				<div class="col mb-3 ms-3">
					<h4 class="fw-bold text-primary mt-5"><br>Contacts</h4>
					<ul class="nav flex-column">
						<li class="nav-item mb-2">
							<a href="#" class="nav-link p-0 text-white">
								<i class="bi bi-telephone-fill text-primary me-4"></i>(+632) 8845-7788
							</a>
						</li>
						<li class="nav-item mb-2">
							<a href="#" class="nav-link p-0 text-white">
								<i class="bi bi-envelope-fill text-primary me-4"></i>support@maya.ph
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="d-flex flex-column flex-sm-row justify-content-between my-2 text-white">
				<p>© Copyright Maya 2022 All rights reserved.</p>
				<ul class="list-unstyled d-flex justify-content-end">
					<li class="ms-3">Privacy Policy</li>
					<li class="ms-3">Terms & Conditions</li>
				</ul>
			</div>
		</div>
	</footer>
	<!-- footer end -->

	<button id="back-to-top-btn"><i class="bi bi-chevron-up"></i></button>

  <div id="preloader">
		<div id="loader"></div>
	</div>

	<!-- vendor javascript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>

	<!-- main javascript files -->
		<script src="assets/js/index.js"></script>			
</body>

</html>