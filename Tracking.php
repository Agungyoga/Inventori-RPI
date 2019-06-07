<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Fortune Estates a Mobile App Flat Bootstrap Responsive Website Template | Properties :: W3layouts</title> 
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fortune Estates Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, SmartPhone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
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
			<!-- header -->
			<?php include"header.php" ?>
			<!-- header -->
			<!-- bottom view -->
			<?php include "bottomView.php"?>
			<!-- bottom view -->

			<div class="content">
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-img">  
						<h3>Tracking</h3>   
					</div> 
				</div>
				<!-- //banner -->
				<div class="welcome"> 
					<h3 class="w3ls-title">Tracking Barang</h3> 
					<p class="w3-text">Tracking barang adalah menu untuk memonitori barang yang dipinjam dan siapa yang minjam barang.</p>
				</div>
				<br>
				<a href="addTracking.php"><img src="images/add.png" style="position: relative; left: 250px; width: 30px"></a>
					<!-- properties --> 
				<div class="w3agile properties"> 
					<div class="latest-w3lsrow">

						<div class="latest-grids">
						
							<div class="latest-grids-image">
								<img src="images/<?php echo $perbarang['foto']; ?>" alt="" />
							</div> 
							<div class="latest-grids-text">
								<h5><a href="">Ecat vulputate Don</a></h5>
								<p><b>Jumlah :</b>  </p>
								<p><b>Nama Peminjam :</b>  </p>
								<p><b>Kelas :</b>  </p>
								<p><b>NIM :</b>  </p>
								<p><b>No.HP :</b>  </p>
							</div>
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //properties --> 
				<!-- brands -->
				<!-- //brands -->
				<!-- footer -->
				<?php include 'footer.php' ?>
				<br><br>
			</div>
		</div>
	</div> 
	<!-- menu-js -->
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<!-- //menu-js -->
	<!-- nicescroll-js -->
	<script src="js/jquery.nicescroll.min.js"></script> 
	<script>
		$(document).ready(function() {
	  
			var nice = $("php").niceScroll();  // The document page (body)
		
			$("#div1").php($("#div1").php()+' '+nice.version);
		
			$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV
		});
	</script>
	<!-- //nicescroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>