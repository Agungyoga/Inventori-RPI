<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include'koneksi.php'?>
<!DOCTYPE html>
<html>
<head>
<title>Fortune Estates a Mobile App Flat Bootstrap Responsive Website Template | Main :: W3layouts</title> 
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fortune Estates Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, SmartPhone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	    <script>
			$(document).ready(function() {
				$('.popup-top-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});																							
			}); 
		</script>
<!--//pop-up-box -->
<!-- web-fonts -->  
<link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
</head>
<body class="bg">
	<div class="agile-main"> 
		<div class="menu-wrap" id="style-1"> 
			<?php include 'navbar.php' ?>
			<button class="close-button" id="close-button">C</button>
		</div> 
		<div class="content-wrap">
			<div class="header"> 
				<div class="menu-icon">   
					<button class="menu-button" id="open-button">O</button>
				</div>
				<div class="logo">
					<h2><a href="main.php"><span class="glyphicon glyphicon-home"></span></a></h2>
				</div>
				<div class="login">
					<a href="#small-dialog" class="sign-in popup-top-anim"><span class="glyphicon glyphicon-user"></span></a> 
				</div> 
				<div class="clearfix"> </div>
			</div>
			<div class="content">
				<!-- banner -->
				<div class="banner">
					<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
						<!-- Wrapper-for-Slides -->
						<div class="carousel-inner" role="listbox"> 
							<!-- First-Slide -->
							<div class="item active">
								<div class="banner-img"> 
									<div class="carousel-caption kb_caption">
									</div>
								</div>
							</div> 
							<!-- Second-Slide -->
							<div class="item">
								<div class="banner-img banner-img1"> 
									<div class="carousel-caption kb_caption kb_caption_right">
									</div>
								</div>
							</div> 
							<!-- Third-Slide -->
							<div class="item">
								<div class="banner-img banner-img2"> 
									<div class="carousel-caption kb_caption kb_caption_center">
									</div>
								</div>
							</div> 
						</div> 
						<!-- Left-Button -->
						<a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a> 
						<!-- Right-Button -->
						<a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
							<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a> 
					</div>
					<script src="js/custom.js"></script>
				</div>
				<!-- //banner -->
				<!-- welcome -->
				<div class="welcome"> 
					<h3 class="w3ls-title">Welcome !</h3> 
					<p class="w3title-text">Sed porta magna vitae nisl lacinia orbi malesuada sollic itudin tortor </p>
					<div class="welcome-info">
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							
							<div class="clearfix"> </div>
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
									<div class="tabcontent-grids">
										<form action="#" method="post">
											<input type="search" name="Search" placeholder="Cari Barang..." required="">
											<button type="submit" class="btn btn-default" aria-label="Left Align">
												<span class="glyphicon glyphicon-search"></span>
											</button>
										</form>
									 </div>
								</div>
							</div>  
						</div>  
					</div>  	
				</div> 
				<!-- //welcome -->
				<!-- properties -->
				
				<div class="w3agile gallery"> 
					<h3 class="w3ls-title">Data Barang</h3> 
					<div class="gallery-row"> 
						<?php 
						$ambil = $koneksi->query("SELECT * FROM barang");
						$nama = $koneksi->query("SELECT nama from barang");
						while($perbarang = $ambil->fetch_assoc()){ 
							?>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
										<img src="images/<?php echo $perbarang['foto']; ?>" class="img-responsive zoom-img" alt=""/>
										<h4> <?php echo $perbarang['nama']; ?></h4>
										<h4>Stok : <?php echo $perbarang['stok']; ?></h4>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<?php } ?>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/ab.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g3.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g4.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g5.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g6.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!--  light box js -->
					<script src="js/lightbox-plus-jquery.min.js"> </script> 
					<!-- //light box js-->  
				</div>
				<!-- //properties -->
				<!-- brands -->
				<!-- //brands -->
				<!-- footer -->
				<?php include 'footer.php' ?>
			</div>
		</div>
	</div> 
	<!-- menu-js -->
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<!-- //menu-js -->
	<!-- nice scroll-js -->
	<script src="js/jquery.nicescroll.min.js"></script> 
	<script>
		$(document).ready(function() {
	  
			var nice = $("php").niceScroll();  // The document page (body)
		
			$("#div1").php($("#div1").php()+' '+nice.version);
		
			$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV
		});
	</script>
	<!-- //nice scroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>