<?php
include"dbconfig.php";

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Tender BRD</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Tender Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
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
</head>
<body>
<!--top nav start here-->
<div class="mother-grid">
	<div class="container">
	  <div class="temp-padd">
		<div class="top-strip">
			<div class="address">
				<ul>
					<li><a href="https://BipinRajashriDnyaneshwar.com/"><span class="link"> </span>www.BipinRajashriDnyaneshwar.com</a></li>
					<li><a href="mailto:example@email.com"><span class="mes"> </span>BipinRajashriDnyaneshwar@gmail.com</a></li>
					<li><span class="ph"> </span>9373986141</li>
				</ul>
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="https://www.facebook.com/BipinRajashriDnyaneshwar/"> <span class="w-f"> </span></a></li>
                   <li><a href="https://twitter.com/BipinRajashriDnyaneshwar1"> <span class="w-tw"> </span></a></li>
                   <li><a href="https://www.linkedin.com/in/BipinRajashriDnyaneshwar1/"> <span class="w-in"> </span></a></li>
				</ul>
			</div>
		  <div class="clearfix"> </div>
   </div>
<!--top nav end here-->	
<!--title start here-->
<div class="title-main">
			<a href="index.php"><h1>Tender</h1></a>
		
</div>
<!--title end here-->
<!--header start here-->
<div class="header">
			<div class="navg">
				<span class="menu" > </span>
				<?php include"nav.php";?>
				
				<script>
                  $( "span.menu").click(function() {
                    $(  "ul.res" ).slideToggle("slow", function() {
                     // Animation complete.
                     });
                     });
		       </script>
			</div>
			<form method="post" action="search.php">
		
			<div class="search">
				<input type="text"  name="tender" placeholder="Tender search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Site search';}"/>
			<input type="submit" name="search" value=""/>
			
      	</div></form>
			<div class="clearfix"> </div>
  </div>
<!--header end here-->
<!--banner start here-->
 <div class="banner"  >
		<img src="images/banner.jpg" width="1070px" alt=""/>
		<img src="images/logo.png" alt=""/>
		<h3>Corem ipsum</h3>
		<h2>SIT AMET VIVAMUS</h2>
		<div class="banner-button">
			<a href="#"></a>
		</div>
</div>
<!--banner end here-->
<!--nunc dig start here-->
  
<!--nunc dig end here-->
<!--molli start here-->
<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
<!----//End-slider-script---->
<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			    <div class="molli">
			    	<div class="molli-top">
			    		<span class="line-x"> </span>
			    		<span class="line-y"> </span>
	                     <h3>Tender's</h3>
	                       </div>
			      <ul  id="slider4">
			        <li>
			          <div class="molli-grids" style="height:200px">
						<img src="images/img/1.png" style="height:200px" alt=""/>
						<div class="molli-text">
							<h4></h4>
						</div>
					  </div>
					  <div class="molli-grids" style="height:200px">
						<img src="images/img/2.jpg" style="height:200px" alt=""/>
						<div class="molli-text">
							<h4></h4>
						</div>
					</div>
					<div class="molli-grids" style="height:200px">
						<img src="images/img/3.jpg" style="height:200px" alt=""/>
						<div class="molli-text">
							<h4></h4>
						</div>
					</div>
					<div class="molli-grids" style="height:200px" >
						<img src="images/img/4.jpg" style="height:200px" alt=""/>
						<div class="molli-text">
							<h4></h4>
						</div>
					</div>
			        </li>
			        <li>
					  <div class="molli-grids" style="height:200px">
						<img src="images/img/5.jpg" style="height:200px" alt=""/>
						<div class="molli-text">
							<h4></h4>
						</div>
					</div>
					<div class="molli-grids" style="height:200px">
						<img src="images/img/6.jpg" style="height:200px"  alt=""/>
						<div class="molli-text">
							<h4></h4>
						</div>
					</div>
					<div class="molli-grids" style="height:200px" >
						<img src="images/img/7.jpg" style="height:200px" alt=""/>
						<div class="molli-text">
							<h4></h4>
						</div>
					</div>
					 <div class="molli-grids" style="height:200px"> 
						<img src="images/img/8.jpg" style="height:200px" alt=""/>
						<div class="molli-text">
							<h4></h4>
						</div>
					  </div>
			        </li>
			        <li>
					<div class="molli-grids" style="height:200px">
						<img src="images/img/1.png" style="height:200px" alt=""/>
						<div class="molli-text">
							<h4></h4>
						</div>
					</div>
					<div class="molli-grids" style="height:200px">
						<img src="images/img/2.jpg" style="height:200px" alt=""/>
						<div class="molli-text">
							<h4></h4>
						</div>
					</div>
					 <div class="molli-grids" style="height:200px">
						<img src="images/img/3.jpg" style="height:200px" alt=""/>
						<div class="molli-text">
							<h4></h4>
						</div>
					  </div>
					  <div class="molli-grids" style="height:20px"> 
						<img src="images/img/4.jpg"  alt=""/>
						<div class="molli-text">
							<h4></h4>
						</div>
					</div>
			        </li>
			      </ul>
			  </div>
			    <div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
<!--molli end here-->
<!--information-grid start here-->
 
</div>
<!--information grid end here-->
<!--footer start here-->
 <div class="footer">
		<div class="footer-main">
			<div class="footer-top">
				<div class="col-md-4 footer-grid">
					<a href="https://www.facebook.com/BipinRajashriDnyaneshwar/"><img src="images/ftr-fa.png" alt=""/></a>
				</div>
				<div class="col-md-4 footer-grid">
					<a href="https://twitter.com/BipinRajashriDnyaneshwar1"><img src="images/tw.png" alt=""/></a>
					
				</div>
				<div class="col-md-4 footer-grid">
					<a href="http://BipinRajashriDnyaneshwar.com/"><img src="images/drib.png" alt=""/></a>
					
				</div>
			  <div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<p>Developed By  <a href="http://BipinRajashriDnyaneshwar.com/">BipinRajashriDnyaneshwar </a></p>
			</div>
		</div>
	   </div>
	</div>
  </div>
<!--footer end here-->
</body>
</html>

