<!DOCTYPE HTML>
<html>
<head>
<title>Home :: PT. Sakura Dwi Mandiri</title>
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
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>

</head>
<body>
<div class="header wow fadeInUpBig" data-wow-delay="0.4s">
   <div class="container">
	  <div class="header_top">
		<h1>Welcome</h1>
		<h2>to our Education </h2>
	  </div>
   </div>
 </div>
  <div class="header-home">
	<div class="fixed-header">
		<?php  include "includes/header.php"; ?> 
				<div class="top-nav wow bounce" data-wow-delay="0.4s">
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
    </div>
	<div class="grid_1">
		<div class="container">
		  <div class="box_1  wow fadeInUpBig" data-wow-delay="0.4s">
			<h3>Why Join Learn</h3>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
		  </div>
		  <div class="box_2">
			  <div class="col-md-6">
			  	<div class="feature  wow fadeInRight" data-wow-delay="0.4s">
	                   <i class="fa fa-film"> </i>
	                   <h4>Video Lessons</h4>
	                    <p>
	                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
	                    </p>
	            </div>
			  </div>
			  <div class="col-md-6">
			  	<div class="feature wow fadeInLeft" data-wow-delay="0.4s">
	                   <i class="fa fa-check"> </i>
	                   <h4>Trusted Certifications</h4>
	                    <p>
	                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
	                    </p>
	            </div>
		      </div>
		      <div class="clearfix"> </div>
		  </div>
		   <div class="box_3 wow bounce" data-wow-delay="0.4s">
			  <div class="col-md-6">
			  	<div class="feature">
	                   <i class="fa fa-trophy"> </i>
	                   <h4>Expert teachers</h4>
	                    <p>
	                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
	                    </p>
	            </div>
			  </div>
			  <div class="col-md-6">
			  	<div class="feature">
	                   <i class="fa fa-microphone"> </i>
	                   <h4>Audio Lessons</h4>
	                    <p>
	                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
	                    </p>
	            </div>
		      </div>
		      <div class="clearfix"> </div>
		  </div>
		</div>
	</div>
	<div class="grid_2">
		<div class="container"> 
			<h3 class="head_1 wow rotateInUpLeft" data-wow-delay="0.4s">Latest Courses</h3>
		  <div class="col-md-4 box_6 wow rotateInDownLeft " data-wow-delay="0.4s">
		  	<img src="images/pic1.jpg" class="img-responsive" alt=""/>
		  	<div class="desc">
		  		<h4>Lorem Ipsum</h4>
		  		<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
		  		<div class="more"><a href="#"><img src="images/more.png" alt=""></a></div>
		  	</div>
		  </div>
		   <div class="col-md-4 box_6 wow lightSpeedIn" data-wow-delay="0.4s">
		  	<img src="images/pic2.jpg" class="img-responsive" alt=""/>
		  	<div class="desc">
		  		<h4>Lorem Ipsum</h4>
		  		<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
		  		<div class="more"><a href="#"><img src="images/more.png" alt=""></a></div>
		  	</div>
		  </div>
		  <div class="col-md-4 box_6 wow rotateIn " data-wow-delay="0.4s">
		  	<img src="images/pic3.jpg" class="img-responsive" alt=""/>
		  	<div class="desc">
		  		<h4>Lorem Ipsum</h4>
		  		<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
		  		<div class="more"><a href="#"><img src="images/more.png" alt=""></a></div>
		  	</div>
		  </div>
	   </div>
	</div>
    <div class="team">
		<div class="container">
			<h3 class="head_2 wow rollIn" data-wow-delay="0.4s">Welcome to our team</h3>
			<div class="img-wrapper wow slideInLeft" data-wow-delay="0.4s">
              <a href="#"><img src="images/pic6.jpg" class="img-responsive" alt=""/></a>
              <a href="#"><img src="images/pic7.jpg" class="img-responsive" alt=""/></a>
              <a href="#"><img src="images/pic4.jpg" class="img-responsive" alt=""/></a>
            </div>
            <blockquote class="blockquote1">
              <div class="block_info wow slideInRight" data-wow-delay="0.4s">
                <span class="heading">Lorem ipsum dolor sit amet, consectetuer</span>
                Dignissimos ducimus qui blanditiis praesentium voluptatum corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate nonrofficia deserunt mollitia animi id est.
              </div>
              <span class="author wow bounce" data-wow-delay="0.4s"><a href="#">Dolor Smith, (trainer)</a></span>
            </blockquote>
		</div>
	</div>
	<div class="students wow  zoomInDown" data-wow-delay="0.4s">
		<div class="container">
			<h3>Happy Students</h3>
			<div class="custom_testimonials_wrap_inner">
				<address><img src="images/pic5.jpg" class="img-responsive" alt=""/></address>
				<div class="extra-wrap">
				<i class="fa quote fa-quote-left"></i>
				<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
				<p class="m_2"><a href="#">-&nbsp;&nbsp; Lorem ipsum dolor sit amet</a></p>
				</div>
				<div class="clearfix"></div> 
			</div>
		</div>
	</div>
	
	<?php include "includes/footer.php"; ?> 
	
</body>
</html>		