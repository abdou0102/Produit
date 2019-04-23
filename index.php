<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 
	
	echo '<a href="./logout.php">Cliquer pour se déconnecter</a>';

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="./auth.html">Cliquer pour se connecter</a>';

}  
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Coeur De Marie Beauty Lounge & Spa | Home :: w3layouts</title>
<link href="css1/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="css1/style4.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script src="js1/jquery.min.js"></script>
<!--- start-rate---->
<script src="js1/jstarbox.js"></script>
	<link rel="stylesheet" href="css1/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<!--header-->
<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="index.html"><img src="images1/logo.png" alt=""></a>	
			</div>
		</div>
	</div>
	
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="index.html">Accueil</a></li>
            
    		<li><a class="color" href="afficherProduitfront.php">Catalogue</a></li>
			<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Hommes<span class="caret"></span></a>
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">

									<ul>
										<ul>
											<li><a href="product.html">Accessories</a></li>
											<li><a href="product.html">Cheveux</a></li>
											<li><a href="product.html">Visage</a></li>
											<li><a href="product.html">Corps</a></li>

										</ul>

									</ul>
							</div>
						</div>

						<div class="col1 col5">
						<img src="images1/me1.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</li>

			<li><a class="color4" href="404.html">About</a></li>

            <li ><a class="color6" href="contact.html">Contact</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				<li>
				<a href="wishlist.html" >
				<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
				</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images1/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="css1/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="js1/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login-search">
						<input type="submit" value="">
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
					</div>
					<p>Shopin</p>
				</div>				
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
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
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
<!--banner-->
<div class="banner">
<div class="container">
<section class="rw-wrapper">
				<h1 class="rw-sentence">
					<span>Coeur De Marie</span>
					<div class="rw-words rw-words-1">
						<span>Accessoires </span>
						<span>Produits pour visage </span>
						<span> Produits pour cheveux</span>
						<span>Produits pour corps</span>

					</div>
					<div class="rw-words rw-words-2">
						<span>We denounce with right</span>
						<span>But in certain circum</span>
						<span>Sed ut perspiciatis unde</span>
						<span>There are many variation</span>
						<span>The generated Lorem Ipsum</span>
						<span>Excepteur sint occaecat</span>
					</div>
				</h1>
			</section>
			</div>
</div>
	<!--content-->
		<div class="content">
			<div class="container">
				<div class="content-top">
					<div class="col-md-6 col-md">
						<div class="col-1">
						 <a href="single.html" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images1/pi.jpg" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><p class="b-animate b-from-right    b-delay03 ">Lorem ipsum</p><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">Trendy</h3></div></a>

							<!---<a href="single.html"><img src="images/pi.jpg" class="img-responsive" alt=""></a>-->
						</div>
						<div class="col-2">
							<span>Hot Deal</span>
							<h2><a href="single.html">Luxurious &amp; Trendy</a></h2>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years</p>
							<a href="single.html" class="buy-now">Buy Now</a>
						</div>
					</div>
					<div class="col-md-6 col-md1">
						<div class="col-3">
							<a href="single.html"><img src="images1/pi1.jpg" class="img-responsive" alt="">
							<div class="col-pic">
								<p>Lorem Ipsum</p>
								<label></label>
								<h5>For Men</h5>
							</div></a>
						</div>
						<div class="col-3">
							<a href="single.html"><img src="images1/pi2.jpg" class="img-responsive" alt="">
							<div class="col-pic">
								<p>Lorem Ipsum</p>
								<label></label>
								<h5>For Kids</h5>
							</div></a>
						</div>
						<div class="col-3">
							<a href="single.html"><img src="images1/pi3.jpg" class="img-responsive" alt="">
							<div class="col-pic">
								<p>Lorem Ipsum</p>
								<label></label>
								<h5>For Women</h5>
							</div></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<!--products-->			<!--//products-->
			<!--brand-->
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="images/ic.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic3.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			<!--//brand-->
			</div>
			
		</div>
	<!--//content-->
	<!--//footer-->
	<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="col-md-3 footer-middle-in">
						<a href="index.html"><img src="images/log.png" alt=""></a>
						<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
					</div>
					
					<div class="col-md-3 footer-middle-in">
						<h6>Information</h6>
						<ul class=" in">
							<li><a href="404.html">About</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="contact.html">Site Map</a></li>
						</ul>
						<ul class="in in1">
							<li><a href="#">Order History</a></li>
							<li><a href="wishlist.html">Wish List</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Tags</h6>
						<ul class="tag-in">
							<li><a href="#">Lorem</a></li>
							<li><a href="#">Sed</a></li>
							<li><a href="#">Ipsum</a></li>
							<li><a href="#">Contrary</a></li>
							<li><a href="#">Chunk</a></li>
							<li><a href="#">Amet</a></li>
							<li><a href="#">Omnis</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Newsletter</h6>
						<span>Sign up for News Letter</span>
							<form>
								<input type="text" value="Enter your E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
								<input type="submit" value="Subscribe">	
							</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<ul class="footer-bottom-top">
						<li><a href="#"><img src="images/f1.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="images/f2.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="images/f3.png" class="img-responsive" alt=""></a></li>
					</ul>
					<p class="footer-class">&copy; 2016 Shopin. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--//footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js1/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js1/bootstrap.min.js"></script>
<!--light-box-files -->
		<script src="js1/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css1/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>


</body>
</html>