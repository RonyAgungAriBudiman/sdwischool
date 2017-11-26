<!DOCTYPE HTML>
<html>
<head>
<title>Single :: PT. Sakura Dwi Mandiri</title>
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
<!------ light-box-script ----->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.about-grid a').Chocolat({linkImages:false});
	});
</script>
<!------ light-box-script ----->
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
		   
		    <div class="blog_grid">
		      <div class="blog_box">
		        <a href="single.html" class="mask"><img src="images/b5.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
		     	<h3><a href="single.html">Ut wisi enim ad minim veniam, quis nostrud exerc</a></h3>
		     	<div class="links">
		  		    <ul>
		  				<li><i class="fa blog-icon fa-calendar"> </i><span>june 14, 2013</span></li>
		  				<li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
		  				<li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
		  		    </ul>
		  		</div>
		     	<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,nibh euismod tincidunt</p>
		     </div>  
		   </div>
		   <div class="comment">
		  		        	<h2>Comments</h2>
		  		        	<ul class="comment-list">
		  		        	  <li><img src="images/pic12.jpg" alt="">
		  		        		 <div class="desc1">
		  		        			<h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
		  		        			<div class="extra">
					                  <time pubdate="" datetime="2014-03-30T14:47:59">
						                 Submitted by admin on January 30, 2014 - 14:47					</time>
					                </div>
			                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent</p>
			                        <div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
		  		        		   </div>
		  		        		   <div class="clearfix"></div>
		  		        		</li>
		  		        	</ul>
		  </div>
		  <div class="comments-area">
		  		        	<h3>Add New Comment</h3>
							<form>
								<p>
									<label>Name</label>
									<span>*</span>
									<input type="text" value="">
								</p>
								<p>
									<label>Email</label>
									<span>*</span>
									<input type="text" value="">
								</p>
								<p>
									<label>Website</label>
									<input type="text" value="">
								</p>
								<p>
									<label>Subject</label>
									<span>*</span>
									<textarea></textarea>
								</p>
								<p>
									<label class="btn1 btn2 btn-8 btn-8c"><input type="submit" value="Submit Comment"></label>
								</p>
							</form>
		    </div>
		</div>
	</div>
	<?php include "includes/footer.php"; ?> 
</body>
</html>		