<!DOCTYPE HTML>
<html>
<head>
<title>Blog  :: PT. Sakura Dwi Mandiri</title>
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
			<h1 class="blog_head">Blog</h1>
		   <div class="blog_grid span2">
		     <div class="col-md-6 blog_box">
		        <a href="single.html" class="mask"><img src="images/b1.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
		     	<h3><a href="single.html">Ut wisi enim ad minim veniam, quis nostrud exerc</a></h3>
		     	<div class="links">
		  		    <ul>
		  				<li><i class="fa blog-icon fa-calendar"> </i><span>june 14, 2013</span></li>
		  				<li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
		  				<li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
		  		    </ul>
		  		</div>
		     	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,nibh euismod tincidunt</p>
		        <a href="#" class="btn1 btn-8 btn-8c">Read More</a>
		     </div>  
		     <div class="col-md-6 blog_box">
		        <a href="single.html" class="mask"><img src="images/b2.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
		     	<h3><a href="single.html">Ut wisi enim ad minim veniam, quis nostrud exerc</a></h3>
		     	<div class="links">
		  		    <ul>
		  				<li><i class="fa blog-icon fa-calendar"> </i><span>june 14, 2013</span></li>
		  				<li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
		  				<li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
		  		    </ul>
		  		</div>
		     	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,nibh euismod tincidunt</p>
		        <a href="#" class="btn1 btn-8 btn-8c">Read More</a>
		     </div>  
		     <div class="clearfix"> </div>
		   </div>
		    <div class="blog_grid">
		     <div class="col-md-6 blog_box">
		        <a href="single.html" class="mask"><img src="images/b3.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
		     	<h3><a href="single.html">Ut wisi enim ad minim veniam, quis nostrud exerc</a></h3>
		     	<div class="links">
		  		    <ul>
		  				<li><i class="fa blog-icon fa-calendar"> </i><span>june 14, 2013</span></li>
		  				<li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
		  				<li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
		  		    </ul>
		  		</div>
		     	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,nibh euismod tincidunt</p>
		        <a href="#" class="btn1 btn-8 btn-8c">Read More</a>
		     </div>  
		     <div class="col-md-6 blog_box">
		        <a href="single.html" class="mask"><img src="images/b4.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
		     	<h3><a href="single.html">Ut wisi enim ad minim veniam, quis nostrud exerc</a></h3>
		     	<div class="links">
		  		    <ul>
		  				<li><i class="fa blog-icon fa-calendar"> </i><span>june 14, 2013</span></li>
		  				<li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
		  				<li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
		  		    </ul>
		  		</div>
		     	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,nibh euismod tincidunt</p>
		        <a href="#" class="btn1 btn-8 btn-8c">Read More</a>
		     </div>  
		   </div>
		   <div class="pagination">
		    <ul><li class="pagination-start firstItem"><span class="pagenav">Start</span></li>
		    	<li class="pagination-prev"><span class="pagenav">Prev</span></li><li>
		    	<span class="pagenav">1</span></li><li><a href="#" class="pagenav">2</a></li>
		    	<li class="pagination-next"><a title="" href="#" class="border pagenav" data-original-title="Next">Next</a></li>
		    	<li class="pagination-end lastItem"><a title="" href="#" class="border pagenav" data-original-title="End">End</a></li>
		    </ul>	
		  </div>
	   </div>
	</div>
	
	<?php include "includes/footer.php"; ?> 
	
</body>
</html>		