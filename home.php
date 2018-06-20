<?php
session_start();
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>OUR PAWS</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pets House Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Rambla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<script type="text/javascript" src="js/modernizr.custom.js"></script> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<!--banner strat here-->
<div class="banner">
	<div class="container">
		<div class="banner-main">
			<div class="banner-text">
				<a href="index.html"><div class="logo">
					<h1>OUR PAWS</h1>
					<p>The Best Home for Your Cats</p>
				</div></a>			 
			</div>
			<h3>On the other hand, we denounce with righteous indignation and dislike and trouble that are bound to ensue blame.</h3>
		</div>
	</div>
</div>
<!--baner end here-->
<!--header start here-->
<div class="header-bottom">
  <div class="fixed-header">	
	<div class="container">
		<div class="header-main">
			<div class="header-left">
				<h2><a href="index.html">OUR PAWS</a></h2>
			</div>
			<div class="header-right">					
				  <div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<ul class="nav1">
						<li><a href="index.html" class="active">Home</a></li>
						<li><a class="scroll" href="#about">About</a></li>
						<li><a class="scroll" href="#services">Services</a></li>
						<li><a class="scroll" href="#gallery">Gallery</a></li>
						<li><a class="scroll" href="#contact" >Contact</a></li>
						<?php
          					if(isset($_SESSION['member'])){
            					echo '<li><a href="../pets/keluar.php">Log Out</a></li>';
          					}
        				?>
					</ul>	
					<!-- script-for-menu -->
					 <script>
					   $( "span.menu" ).click(function() {
						 $( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						  });
						 });
					</script>
					<!-- /script-for-menu -->
					<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-bottom").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-bottom").addClass("fixed");
				}else{
					$(".header-bottom").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
				</div>
			 </div>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--About strat here-->
<div class="about" id="about">
	<div class="container">
		<div class="about-main">
			          <h3>About</h3>
			<div class="col-md-6 about-left">
				<img src="images/human.jpg" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 about-right">
				<h4>About Our Paws</h4>
				<h5>Layanan Kebutuhan Kucing</h5>
				<p>Our Paws adalah layanan jasa penitipan dan pelayanan kebutuhan kucing. Di Our Paws ini memberikan pelayanan kepada pencinta kucing yang menginginkan kucing peliharaan anda terjaga kesehatan dan terpenuhi kebutuhannya.</p>			
			    <ul>
			    	<li><a > <span class="fts"> </span>Foots </a></li>
			    	<li><a > <span class="brh"> </span>Brush</a></li>
			    	<li><a > <span class="feed"> </span>Feed </a></li>
			    </ul>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--About text end here-->
<!--pets show strat here-->
<div class="pets-show">
	<div class="container">
		<section class="slider">
		 <div class="flexslider">
			<ul class="slides">
			  <li>
			  	<div class="pets-show-main">
					<div class="col-md-6 pets-show-left">
						<h3>Fakta Unik tentang Kucing</h3>
						<h4>Hewan yang sangat bersih</h4>
						<p>kucing adalah hewan yang dapat membersihkan tubuh nya sendiri yaitu dengan menjilat bulu-bulu nya. air liur pada kucing terbukti mengandung pembersih yang sangat kuat. sehingga selain membersihkan bulu-bulu nya, kucing juga sering menjilati bagian tubuh nya yang terluka agar proses penyembuhan semakin cepat.</p>
					</div>
					<div class="col-md-6 pets-show-right">
						<img src="images/1.jpg" alt="" class="img-responsive">
					</div>
				 <div class="clearfix"> </div>
				</div>
			  </li>
			  <li>
			 	<div class="pets-show-main">
					<div class="col-md-6 pets-show-left">
						<h3>Fakta Unik tentang Kucing</h3>
						<h4>Hewan Pemalas</h4>
						<p>Kucing dapat menyimpan energi dengan cara tidur lebih sering ketimbang hewan lain. Lama tidur kucing bervariasi antara 12 – 16 jam per hari, dengan angka rata-rata 13 – 14 jam. Tapi tidak jarang dijumpai kucing yang tidur selama 20 jam dalam satu hari.</p>
					</div>
					<div class="col-md-6 pets-show-right">
						<img src="images/2.jpg" alt="" class="img-responsive">
					</div>
				  <div class="clearfix"> </div>
				</div>
			  </li>
			  <li>
			 	<div class="pets-show-main">
					<div class="col-md-6 pets-show-left">
						<h3>Fakta Unik tentang Kucing</h3>
						<h4>Hewan yang lentur</h4>
						<p>Kelenturan tubuh kucing sangat menakjubkan, kaki depannya dapat diputar ke segala arah dan setengah bagian tubuhnya dapat bergerak ke arah yang berlawanan</p>
					</div>
					<div class="col-md-6 pets-show-right">
						<img src="images/3.png" alt="" class="img-responsive">
					</div>
				 <div class="clearfix"> </div>
				</div>
			  </li>

		    </ul>
		 </div>
		 <div class="services-call-right">
				<!-- <a href="single.html">Read More</a> -->
			</div>
	  </section>
	</div>
</div>
<!--pets show end here-->
<!-- FlexSlider -->
				  <script defer src="js/jquery.flexslider.js"></script>
				  <script type="text/javascript">
					$(function(){
					 
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
			<!-- FlexSlider -->

<!--services start here-->
<div class="services" id="services">
	<div class="container">
		<div class="services-main">
			<div class="ser-top">
				<h3>Our Services</h3>
			</div>
			<div class="ser-bottom">
				<div class="col-md-4 ser-grid">
					 <div class="view view-first">
	                    <img src="images/grooming.png" />
	                    <div class="mask">
	                        <h2>Our Paws</h2>	                                              
	                    </div>
                    </div>
					<?php
          				if(isset($_SESSION['member'])){
            				echo '<h4><a href="../pets/GROOMING/grooming.php">Grooming</a></h4>';
          				} else {
          					echo '<h4><a href="../pets/Login/login.php">Grooming</a></h4>';
          				}
        			?>
					<p>Treat your precious here like king or queen</p>
					<!-- <div class="ser-btn">
						<a href="single.html">Learn More</a>
					</div> -->
				</div>
				
				<div class="col-md-4 ser-grid">
					<div class="view view-first">
	                    <img src="images/sleepover.png" />
	                    <div class="mask">
	                        <h2>Our Paws</h2>	                                              
	                    </div>
                    </div>
					<?php
						if(isset($_SESSION['member'])){
          					echo '<h4><a href="../pets/SLEEPOVER/sleep.php">Sleepover</a></h4>';
          				}
          				else{
       						echo '<h4><a href="../pets/Login/login.php">Sleepover</a></h4>'; 
       					} 
       				?>
					<p>Let's get the party started</p>
					<!-- <div class="ser-btn">
						<a href="single.html">Learn More</a>
					</div> -->
				</div>
				<div class="col-md-4 ser-grid">
					<div class="view view-first">
	                    <img src="images/storage.png" />
	                    <div class="mask">
	                        <h2>Our Paws</h2>	                                              
	                    </div>
                    </div>
                    <h4><a href="storage.php">Storage</a></h4>
					
					<p>Things that can bring up your day!</p>
					<!-- <div class="ser-btn">
						<a href="single.html">Learn More</a>
					</div> -->
				</div>
				<!-- <div class="col-md-4 ser-grid">
					<div class="view view-first">
	                    <img src="images/s4.png" />
	                    <div class="mask">
	                        <h2>Pets</h2>	                                              
	                    </div>
                    </div>
					<h4>Lorem ipsum</h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
					<div class="ser-btn">
						<a href="single.html">Learn More</a>
					</div>
				</div>
				<div class="col-md-4 ser-grid">
					<div class="view view-first">
	                    <img src="images/s5.png" />
	                    <div class="mask">
	                        <h2>Pets</h2>	                                              
	                    </div>
                    </div>
					<h4>Lorem ipsum</h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
					<div class="ser-btn">
						<a href="single.html">Learn More</a>
					</div>
				</div>
				<div class="col-md-4 ser-grid">
					<div class="view view-first">
	                    <img src="images/s6.png" />
	                    <div class="mask">
	                        <h2>Pets</h2>	                                              
	                    </div>
                    </div>
					<h4>Lorem ipsum</h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
					<div class="ser-btn">
						<a href="single.html">Learn More</a>
					</div> -->
				</div>
			 <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--services end here-->
<!--service call strat here-->
<!-- <div class="service-call">
	<div class="container">
		<div class="service-call-main">
			<div class="services-call-left">
				<h4>Nor again is there anyone who loves</h4>
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
			</div>
			<div class="services-call-right">
				<a href="single.html">Read More</a>
			</div>
		  <div class="clearfix"> </div>
		</div>	
	</div>
</div> -->
<!--service call end here-->
<!---gallery strat here-->
<div id="gallery" class="gallery">
	<div class="container">
		<h3 class="tittle need_col">Gallery</h3>
		<div class="gallery-grids">
				<div class="gallery-grid">
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal1"  data-toggle="modal">		
								<img src="images/g1.jpg" alt="img25" class="img-responsive"/>										
									</a>													
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal2"  data-toggle="modal">		
								<img src="images/foto.jpg" alt="img25" class="img-responsive"/>										
									</a>															
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal3"  data-toggle="modal">		
								<img src="images/foto1.jpg" alt="img25" class="img-responsive"/>										
									</a>															
							</figure>
					</div>
				</div>
				<div class="gallery-grid">
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal4"  data-toggle="modal">		
								<img src="images/foto2.jpg" alt="img25" class="img-responsive"/>										
									</a>						
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal5"  data-toggle="modal">		
								<img src="images/foto3.jpg" alt="img25" class="img-responsive"/>										
									</a>						
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal6"  data-toggle="modal">		
								<img src="images/foto6.jpg" alt="img25" class="img-responsive"/>										
									</a>						
							</figure>
					</div>
				</div>
				<div class="gallery-grid">
					 <div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal7"  data-toggle="modal">		
								<img src="images/g7.jpg" alt="img25" class="img-responsive"/>										
									</a>						
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal8"  data-toggle="modal">		
								<img src="images/foto5.jpg" alt="img25" class="img-responsive"/>										
									</a>						
						</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal9"  data-toggle="modal">		
								<img src="images/foto4.jpg" alt="img25" class="img-responsive"/>										
									</a>					
							</figure>
					</div>
				</div>
				<div class="clearfix"> </div>
		</div>		
	</div>
</div>
<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
		
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- <h3>Lorem ipsum</h3>						 -->
                        <img src="images/g1.jpg" class="img-responsive" alt="">
<!--                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
 -->                    </div>
                </div>
           
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
         
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- <h3>Dummy text</h3> -->
                      
                        <img src="images/foto.jpg" class="img-responsive" alt="">
<!--                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
 -->                    </div>
                </div>
           
        </div>
    </div>
    </div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
           
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- <h3>Popular belief</h3> -->
                     
                        <img src="images/foto1.jpg" class="img-responsive" alt="">
<!-- 						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
 -->                    </div>
                </div>
            </div>
       
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- <h3>Lorem ipsum</h3> -->
                       
                        <img src="images/foto2.jpg" class="img-responsive" alt="">
<!--                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
 -->                    </div>
                </div>
            
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- <h3>Dummy text</h3> -->
                       
                        <img src="images/foto3.jpg" class="img-responsive" alt="">
<!--                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
 -->                    </div>
                </div>
           
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
           
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- <h3>Popular belief</h3> -->
                       
                        <img src="images/foto6.jpg" class="img-responsive" alt="">
<!--                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
 -->                    </div>
                </div>
            </div>
        
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- <h3>Lorem ipsum</h3> -->
                     
                        <img src="images/g7.jpg" class="img-responsive" alt="">
<!--                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
 -->                    </div>
                </div>
         
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- <h3>Lorem ipsum</h3> -->
                     
                        <img src="images/foto5.jpg" class="img-responsive" alt="">
<!--                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
 -->                    </div>
                </div>
         
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- <h3>Lorem ipsum</h3> -->
                     
                        <img src="images/foto4.jpg" class="img-responsive" alt="">
<!--                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
 -->                    </div>
                </div>
         
        </div>
    </div>
</div>
<!-- /Portfolio Modals -->
<!-- //gallery -->
<!--contact strat-->
<div class="contact" id="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h3>Contact Us</h3>
			</div>
			<!-- <div class="contact-bottom">
				<div class="col-md-6 contact-left">
					<form>
						<p>Your Name</p>
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<p>Your Email</p>
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<p>Your Message</p>
						<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">  </textarea>
						<input type="submit" value="Submit">
					</form>
				</div> -->
				<div class="col-md-6 contact-right">
					<h4>Contact Info</h4>
					<p></p>
				    <ul>
				    	<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"> </span>Our Paws</li>
				    	<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+6285270563414</li>
				    	<li><a href="mailto:our.paws@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span>our.paws@gmail.com</a></li>
				    </ul>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--contact end here-->
<!--map star here-->
<!-- <div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6996661.466346653!2d-104.56992876029658!3d31.10031956865545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C+USA!5e0!3m2!1sen!2sin!4v1454415604648"></iframe>
</div> -->
<!--map end here-->
<!--footer strat here-->
<div class="footer">
		<div class="container">
			<div class="footer-main">
				<!-- <div class="col-md-3 footer-left">
					<h4>Useful Links</h4>
					<ul>
						<li><a href="#"><span class="pt-foot"> </span>Mirum est notare quam</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Nunc malesuada rhoncus</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Suspendisse purus orci</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Proin malesuada orci puru</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Quisque ullamcorper ut</a></li>
					</ul>
				</div> -->
				<div class="col-md-3 footer-left">
					<h4>Information</h4>
					<ul>
						<li><a class="scroll" href="index.html"><span class="pt-foot"> </span>Home</a></li>
						<li><a class="scroll" href="#about"><span class="pt-foot"> </span>About</a></li>
						<li><a class="scroll" href="#services"><span class="pt-foot"> </span>Services</a></li>
						<li><a class="scroll" href="#gallery"><span class="pt-foot"> </span>Gallery</a></li>
						<li><a class="scroll" href="#contact"><span class="pt-foot"> </span>Contact</a></li>
					</ul>
				</div>
				<!-- <div class="col-md-3 footer-left">
					<h4>New Solutions</h4>
					<ul>
						<li><a href="#"><span class="pt-foot"> </span>Notare quam littera</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Malesuada rhoncus congue</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Suspendisse finibus purus</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Malesuada orci purus</a></li>
						<li><a href="#"><span class="pt-foot"> </span>Quisque ullamcorper tellus</a></li>
					</ul>
				</div> -->
				<!-- <div class="col-md-3 footer-left">
					<h4>Flickr Posts</h4>
					<div class="flickr">
						<div class="f-one">
							<div class="f-left">
								<a href="single.html"><img src="images/f3.jpg" alt="" /></a>
							</div>
							<div class="f-left">
								<a href="single.html"><img src="images/f4.jpg" alt="" /></a>
							</div>
							<div class="f-left">
								<a href="single.html"><img src="images/f5.jpg" alt="" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="f-one">
							<div class="f-left">
								<a href="single.html"><img src="images/f2.jpg" alt="" /></a>
							</div>
							<div class="f-left">
								<a href="single.html"><img src="images/f1.jpg" alt="" /></a>
							</div>
							<div class="f-left">
								<a href="single.html"><img src="images/f6.jpg" alt="" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div> -->
				<div class="clearfix"> </div>
			</div>
			<div class="footer-text">			
				<div class="ft-right">
					<p>© 2018 Our Paws</a> </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<script type="text/javascript">
										$(document).ready(function() {
											/*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear' 
									 		};
											*/
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											
										});
									</script>
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</div>
</body>
</html>

		