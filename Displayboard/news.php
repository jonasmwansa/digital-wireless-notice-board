

<html class="no-js">
	<head>
	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/icomoon-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
		<header id="fh5co-header" role="banner">
			<div class="container">
				<div id="fh5co-logo">
					<a href="home.php">
                                            <img src="images/logo.png" alt="Notice Logo" >
					</a>
				</div>
				<!-- Logo -->
				
				<!-- Mobile Toggle Menu Button -->
				<a  class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				
				<!-- Main Nav -->
				<div id="fh5co-main-nav">
					<nav id="fh5co-nav" role="navigation">
						<ul>
							<li class="fh5co-active">
								<a href="home.php">Home</a>
							</li>
                                                        <li >
								<a href="news.php">Notification</a>
							</li>
							<li>
                                                            <a href="bus.php">Bus Details</a>
							</li>
							<li>
                                                            <a href="emagazine.php">E-Magazine</a>
							</li>
						</ul>
                                            
         

        
					</nav>
				</div>
			</div>
		</header>

		<main role="main">
			<!-- Start Intro -->
			<div id="fh5co-intro">
				<div class="container">
                                        <h4>Digital Notice Board --
                                                            Department Of Information Technology</h4>
                                    
						</div>
				</div>
			</div>
                        
                        
                        
                        
                        
			<div id="fh5co-work">
				<div class="container">
					<div class="row">
							 <center> <div  style="width:800px;height:800px;">
								
<?php
require 'dbconnect.php';

$sql = "SELECT * FROM testblob WHERE yearid = 1 ORDER BY dateofadd DESC";
$sth = $conn->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';

?>
                                               </div>	</center>
                                                           
						
												


					</div>


				</div>
			</div>
			
			
		</main>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
						
						<p class="fh5co-copyright">
							<?php
echo "<p><center>Copyright &copy; 1998 - " . date("Y") . " Kamaraj  of College Engineering & Technology</center></p>";?>
</p>
					</div>
			</div>
		</footer>
		
		<!-- Go To Top -->
		<a href="home.php" class="fh5co-gotop"><i class="ti-shift-left"></i></a>
		
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Velocity -->
		<script src="js/velocity.min.js"></script>
		<script src="js/google_map.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>
