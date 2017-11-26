<!DOCTYPE HTML>
<html>
<head>
<title>Services  :: PT. Sakura Dwi Mandiri</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!------ light-box-script ----->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.about-grid a').Chocolat({linkImages:false});
	});
</script>
<!------ light-box-script ----->
</head>
<body>
<div class="header_about"> </div>
  <div class="header-home">
	<div class="fixed-header">
		<?php  include "includes/header.php"; ?> 
				<div class="top-nav">
				    <span class="menu"> </span>
					<?php  include "includes/menu.php"; ?> 
				<!-- script-nav -->
			<script>
			$("span.menu").click(function(){
				$(".top-nav ul").slideToggle(500, function(){
				});
			});
			</script>
			<!-- //script-nav -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
        <!--script-->
		<script>
			$(document).ready(function(){
				$(".top-nav li a").click(function(){
					$(this).parent().addClass("active");
					$(this).parent().siblings().removeClass("active");
				});
			});
		</script>
			<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-home").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-home").addClass("fixed");
				}else{
					$(".header-home").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
	<!--//header-->
   <div class="grid_4">
		<div class="container"> 
		       <div class="about-grids service_box">
						<div class="col-sm-3 about-grid">
							<a href="images/s5.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic12.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">Duis autem</a></h3>
							<p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s6.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic13.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">Duis autem</a></h3>
							<p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s8.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic15.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">Duis autem</a></h3>
							<p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s1.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic8.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">Duis autem</a></h3>
							<p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
				        <div class="clearfix"> </div>
	           </div>
	           <div class="about-grids service_box">
						<div class="col-sm-3 about-grid">
							<a href="images/s7.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic14.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">Duis autem</a></h3>
							<p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s9.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic16.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">Duis autem</a></h3>
							<p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s10.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic17.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">Duis autem</a></h3>
							<p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s11.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic18.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">Duis autem</a></h3>
							<p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
				        <div class="clearfix"> </div>
	           </div>
	           <div class="about-grids">
						<div class="col-sm-3 about-grid">
							<a href="images/s2.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic9.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">Duis autem</a></h3>
							<p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s3.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic10.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">Duis autem</a></h3>
							<p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s4.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic11.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">Duis autem</a></h3>
							<p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s12.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic19.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">Duis autem</a></h3>
							<p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
				        <div class="clearfix"> </div>
	          </div>
	   </div>
	</div>
	
	<?php include "includes/footer.php"; ?> 
	
</body>
</html>		