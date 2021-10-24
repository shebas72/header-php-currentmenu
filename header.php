<!DOCTYPE html>
<html lang="zxx">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Advanced Directions Company - System Integration</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Advanced Directions Company - System Integration">
		<meta name="author" content="ad-cit.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/linear-icons/css/linear-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>
		<div class="body">

			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120}">
				<div class="header-body">
					<div class="header-top">
						<div class="header-top-container container">
							<div class="header-row">
								<div class="header-column justify-content-start">
								<span class="d-none d-sm-flex align-items-center">
										<i class="fas fa-envelope mr-1"></i>
										info@ad-cit.com
									</span>
									<span class="d-none d-sm-flex align-items-center ml-4">
										<i class="fas fa-phone mr-1"></i>
										<a href="tel:+966920035888">KSA: +966 9200 35 888</a>
									</span>
								</div>
								<div class="header-column justify-content-end">
									<ul class="nav">
											<li class="nav-item">
											<a class="nav-link" href="about">About</a>
										</li>
											<li class="nav-item">
											<a class="nav-link" href="partners">Partners</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="contact">Contact Us</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-menu-toggle py-2" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												English	<i class="fas fa-angle-down fa-sm"></i>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
												<li><a href="#" class="no-skin"> Arabic</a></li>
												
											</ul>
										</li>
									</ul>
									<ul class="header-top-social-icons social-icons social-icons-transparent d-none d-md-block">
										<li class="social-icons-facebook">
											<a href="https://www.facebook.com/Advanced.Directions.Co/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
										</li>
										<li class="social-icons-twitter">
											<a href="https://twitter.com/AD_CIT" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
										</li>
										<li class="social-icons-linkedin">
											<a href="https://www.linkedin.com/company/advanced-directions-co/" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a>
										</li>
										<li class="social-icons-youtube">
											<a href="https://www.youtube.com/channel/UC_DhTHEo-zjerd-0HFXCSiQ" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>
										</li>
										<li class="social-icons-instagram">
											<a href="https://www.instagram.com/adv.directions/?igshid=pfe4rrt5wbrg" target="_blank" title="Instragram"><i class="fab fa-instagram"></i></a>
										</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column justify-content-start">
								<div class="header-logo">
									<a href="index">
										<img alt="EZ" width="250" height="" src="img/adcsilogo.png">
									</a>
								</div>
							</div>
<?php
// function to get the current page name
function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$current_page = PageName();
?>

							<div class="header-column justify-content-end">
								<div class="header-nav">
									<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
										<nav class="collapse">
											<ul class="nav flex-column flex-lg-row" id="mainNav">
												<li class="dropdown dropdown-mega">
													<a class="dropdown-item dropdown-toggle <?php echo $current_page == 'index.php' ? 'active':NULL ?>" href="index">
														Home
													</a>
												
												</li>
												
										
											
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle <?php echo $current_page == 'data-centers.php' ? 'active':NULL ?>" href="#">
														Products
													</a>
													<ul class="dropdown-menu">
														
													
<li class="dropdown-submenu"><a class="dropdown-item" href="data-centers">Data Centers</a>
<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="raised-floor-system">Raised Floor System</a></li>
				<li><a class="dropdown-item" href="cooling-system">Cooling System</a></li>
				<li><a class="dropdown-item" href="monitoring-system">Monitoring System</a></li>
				<li><a class="dropdown-item" href="power-distribution">Power Distributions</a></li>
				<li><a class="dropdown-item" href="generators">Generators</a></li>
	</ul>


</li>
<li><a class="dropdown-item" href="cabinet">Communication Cabinet</a></li>
<li><a class="dropdown-item" href="network-servers">Network Servers</a></li>
<li><a class="dropdown-item" href="burglar-system">Burglar Systems</a></li>
<li><a class="dropdown-item" href="fiber-optic-network">Fiber Optic Network </a></li>
<li><a class="dropdown-item" href="data-cabling">Data Cabling</a></li>
<li><a class="dropdown-item" href="video-intercoms">Video Intercoms</a></li>

<li><a class="dropdown-item" href="access-control-system">Access Control Systems</a></li>
<li><a class="dropdown-item" href="ups">UPS</a></li>
<li><a class="dropdown-item" href="network-switches">Network Switches</a></li>


													
													</ul>
												</li>

<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" href="#">
														Services
													</a>
													<ul class="dropdown-menu">
														
<li><a class="dropdown-item" href="">Site testing & commissioning</a></li>
<li><a class="dropdown-item" href="">Troubleshooting</a></li>
<li><a class="dropdown-item" href="">Design & Engineering Services</a></li>
<li><a class="dropdown-item" href="">IT Services</a></li>
<li><a class="dropdown-item" href="">IT Security Services </a></li>
<li><a class="dropdown-item" href="">Cloud Security</a></li>
<li><a class="dropdown-item" href="">Security Services </a></li>
<li><a class="dropdown-item" href="">Operation & Maintenance</a></li>
<li><a class="dropdown-item" href="">Electrical Power Cable Installation</a></li>
<li><a class="dropdown-item" href="">Automation & Control</a></li>
<li><a class="dropdown-item" href="">Professional Services</a></li>
<li><a class="dropdown-item" href="">Home Automation</a></li>
													
													</ul>
												</li>

<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" href="#">
														Low Current systems
													</a>
													<ul class="dropdown-menu">
														
													
<li><a class="dropdown-item" href="security-systems">Security Systems</a></li>
<li><a class="dropdown-item" href="audio-visual-system">Audiovisual Systems </a></li>

<li><a class="dropdown-item" href="building-automation">Building Automation </a></li>

<li><a class="dropdown-item" href="nurse-call-system">Nurse call system </a></li>


<li><a class="dropdown-item" href="data-fibers-network">Data & Fiber Networks </a></li>
<li><a class="dropdown-item" href="telephone-systems">Telephone systems </a></li>
<li><a class="dropdown-item" href="wireless">Wireless & Wifi System </a></li>


													
													</ul>
												</li>

<li class="dropdown dropdown-mega">
													<a class="dropdown-item dropdown-toggle <?php echo $current_page == 'industries.php' ? 'active':NULL ?>" href="industries">
												Industries
													</a>
												
												</li>

<li class="dropdown dropdown-mega">
													<a class="dropdown-item dropdown-toggle <?php echo $current_page == 'project-development-policies.php' ? 'active':NULL ?>" href="project-development-policies">
													Project Development Policies
													</a>
												
												</li>
											


											</ul>
										</nav>
									</div>
									
									<button class="header-btn-collapse-nav ml-3" data-toggle="collapse" data-target=".header-nav-main nav">
										<span class="hamburguer">
											<span></span>
											<span></span>
											<span></span>
										</span>
										<span class="close">
											<span></span>
											<span></span>
										</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>