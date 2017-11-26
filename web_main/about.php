<!DOCTYPE HTML>
<html>
<head>
<title>About  :: PT. Sakura Dwi Mandiri</title>
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
	<div class="grid_1">
	   <div class="container">
		  <div class="box_1">
			<h3>Who we are</h3>
		  </div>
		  <div class="col-md-12 about_banner"><img src="images/about.jpg" class="img-responsive" alt=""/></div>
		  <div class="box_20">
			  <div class="col-sm-6 box_3">
			  	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue dui</p>
			  </div>
			  <div class="col-sm-6 box_3">
			  	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue dui</p>
			  </div>
		      <div class="clearfix"> </div>
		  </div>
	   </div>
	</div>
	<div class="grid_3">
		<div class="container"> 
			<h3>Our Staff</h3>
		  <div class="about-grids">
						<div class="col-sm-3 about-grid">
							<a href="images/s1.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic8.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h4><a href="#">Duis autem</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s2.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic9.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h4><a href="#">Duis autem</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
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
							<h4><a href="#">Duis autem</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
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
							<h4><a href="#">Duis autem</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
				        <div class="clearfix"> </div>
	      </div>
	   </div>
	</div>
	<div class="advantages"> 
		<div class="container">
			<div class="col-md-6">
				<h3 class="m_3">Advantages</h3>
				<div class="feature about_box1">
	                   <i class="fa fa-globe"> </i>
	                   <h4>Ut wisi enim ad minim</h4>
	                    <p>
	                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
	                    </p>
	            </div>
	            <div class="feature about_box1">
	                   <i class="fa fa-heart"> </i>
	                   <h4>Claritas est etiam processus</h4>
	                    <p>
	                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
	                    </p>
	            </div>
	            <div class="feature">
	                   <i class="fa fa-gears"> </i>
	                   <h4>Mirum est notare quam</h4>
	                    <p>
	                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
	                    </p>
	            </div>
			</div>
			<div class="col-md-6">
				<h3 class="m_3">Testimonials</h3>
				<ul class="about_box span_1">
				  <li class="box_img"><img src="images/pic9.jpg" class="img-responsive" alt=""/></li>
				  <li class="box_desc">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,</li>
				  <h4>Finibus Bonorum <span><a href="#">http://demolink.org</a></span></h4>
				  <div class="clearfix"> </div>
				</ul>
				<ul class="about_box span_1">
				  <li class="box_img"><img src="images/pic9.jpg" class="img-responsive" alt=""/></li>
				  <li class="box_desc">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,</li>
				  <h4>Finibus Bonorum <span><a href="#">http://demolink.org</a></span></h4>
				  <div class="clearfix"> </div>
				</ul>
			</div>
		</div>
	</div>
	<?php include "includes/footer.php"; ?> 
</body>
</html>		