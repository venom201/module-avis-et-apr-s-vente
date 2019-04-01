 <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dine a Hotels and Restaurants Category Bootstrap Responsive website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />  <!-- time-picker-CSS -->
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<!-- banner -->
	<div class="banner jarallax">
		<!-- header -->
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="index.php">Dine</a></h1>
				</div> 
				<div class="menu">
					<a href="#" class="navicon"></a> 
					<div class="toggle"> 
						<ul class="toggle-menu">
							<li><a href="index.php" class="active"> Accueil</a></li>
							<li><a href="about.php"> A propos</a></li> 
							<li><a href="gallery.php"> Menu</a></li> 
							<li><a href="codes.php"> Short Codes</a></li>
							<li><a href="evenement.php"> Evenements</a></li>
							<li><a href="contact.php">Nous contatez</a></li>
						</ul>
					</div> 
				</div>   
				<div class="social-w3licon">
					<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
					<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
					<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //header --> 
		<!-- banner-text -->
		<div class="banner-text"> 
			<div class="container"> 
				<div class="banner-w3lstext"> 
					<h2>Welcome<span>Dine Restaurant</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div> 
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<!-- //banner --> 
	<!-- welcome --> 
	<div class="welcome">
		<div class="container"> 
			<div class="col-md-7 welcome-grid-left">
				<h3>Reserve a table in <span>Restaurant</span></h3>
				<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil 
					molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
					ut labore et dolore magnam.</p>
				<div class="more">
					<a href="#myModal" data-toggle="modal">Read More...</a>
				</div>
			</div>
			<div class="col-md-5 welcome-grid">  
				<div class="agileits_reservation">
					<form action="#" method="post">
						<div class="cuisine"> 
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<input type="text" name="Location" placeholder="Restaurant name, Location, Area, Cuisine.." required="">
						</div>
						<div class="phone_email"> 
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<input type="text" name="Phone" placeholder="Phone" required=""> 
						</div>
						<div class="phone_email1"> 
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<input type="email" name="Email" placeholder="Email" required="">
						</div>
						<div class="clearfix"> </div>
						<div class="agileits_reservation_grid">
							<div  class="span1_of_1 book_date"> 
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								<input class="date" id="datepicker" name="Text" placeholder="Date"  type="text" required="">
							</div>
							<div class="span1_of_1 section_room"> 
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>  
								<input type="text" name="Time" class="timepicker" value=" Time">	 
							</div>
							<div class="span1_of_1 section_room">
								<!-- start_section_room --> 
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								<select id="country1" class="frm-field sect" required>
									<option value="">People</option>
									<option value="1">1 People</option>
									<option value="2">2 People</option>         
									<option value="3">More</option>
								</select> 
							</div>  
							<div class="clearfix"></div>
						</div>
						<div class="date_btn"> 
							<input type="submit" value="Book A Table" /> 
						</div> 
					</form>
				</div>
				<!-- Time select -->
				<script type="text/javascript" src="js/wickedpicker.js"></script>
				<script type="text/javascript">
					$('.timepicker').wickedpicker({twentyFour: false});
				</script>
				<!-- //Time select -->
				<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker" ).datepicker();
						  });
				  </script>
				<!-- //Calendar --> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //welcome -->  
	<!-- wthree-slid -->
	<div class="wthree-slid"> 
		<div class="col-sm-6 col-xs-8 wthree-slid-right"> 
			<h4>Working Hours:</h4>
			<h5><b>Monday – Saturday :</b> 8:00 a.m – 11:00 p.m <br>
				<b>Sunday : </b> 10 a.m – 12 p.m <br>
				<span class="glyphicon glyphicon-earphone"></span> +11 999 8888 7777 
			</h5>
			<!-- Stats --> 
			<div class="stats-info agileits-w3layouts">
				<h3>Nulla ultricies nunc et lorem semper quis accumsan dui aliquam aucibus sagittis placerat quis accumsan</h3>
				<div class="col-sm-4 col-xs-4 stats-grid">  
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='57000' data-delay='.5' data-increment="5">57000</div>
					<h6>Happy Clients</h6>
				</div> 
				<div class="col-sm-4 col-xs-4 stats-grid"> 
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='8000' data-delay='.5' data-increment="5">8000</div>
					<h6>Projects</h6> 
				</div>
				<div class="col-sm-4 col-xs-4 stats-grid">  
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='225' data-delay='8' data-increment="1">225</div>
					<h6>Awards</h6>
				</div>
				<div class="clearfix"></div>
			</div>  
			<!-- //Stats -->  
		</div>
		<div class="col-sm-6 col-xs-4 wthree-slid-left"> 
			<iframe src="https://player.vimeo.com/video/105399806?color=ffffff&title=0&byline=0&portrait=0"></iframe>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- wthree-slid --> 
	<!-- about -->
	<div class="about">
		<div class="container"> 
			<div class="w3ls-title"> 
				<h3 class="agileits-title">About us</h3>
			</div>
			<p class="about-w3text">Ut porttitor ut est eu ornare. In metus dui, suscipit at viverra faucibus, accumsan at odio. Duis finibus sollicitudin libero, sed tempor diam euismod sed. Sed interdum odio a finibus gravida. Aliquam tincidunt nisl nec urna euismod, ullamcorper scelerisque magna vulputate. 
			 Duis finibus sollicitudin libero, sed tempor diam euismod sed. Sed interdum odio a finibus gravida. Aliquam tincidunt nisl nec urna euismodl nec. 
			 Duis finibus sollicitudin libero, sed tempor diam euismod sed. Sed interdum odio a finibus gravida. Aliquam tincidunt nisl nec urna euismod, ullamcorper scelerisque magna vulputate. 
			 Duis finibus sollicitudin libero, sed tempor diam euismod sed. Sed interdum odio a finibus gravida. Aliquam tincidunt nisl nec urna euismodl nec.</p>
			<div class="services-row-agileinfo">
				<div class="col-sm-4 col-xs-4 services-w3grid">
					<span class="glyphicon glyphicon-heart hi-icon" aria-hidden="true"></span>
					<h5>Cum soluta nobis</h5>
					<p>Itaque earum rerum hic a sapiente delectus finibus gravida</p>
				</div>
				<div class="col-sm-4 col-xs-4 services-w3grid">
					<span class="glyphicon glyphicon-list-alt hi-icon" aria-hidden="true"></span>
					<h5>Soluta vum nobis</h5>
					<p>Itaque earum rerum hic a sapiente delectus finibus gravida</p>
				</div>
				<div class="col-sm-4 col-xs-4 services-w3grid">
					<span class="glyphicon glyphicon-leaf hi-icon" aria-hidden="true"></span>
					<h5>Nobis cum soluta</h5>
					<p>Itaque earum rerum hic a sapiente delectus finibus gravida</p>
				</div> 
				<div class="clearfix"> </div>
			</div> 
		 </div>
	</div>
	<!-- //about -->
	<!-- specials -->
	<div class="specials">  
		<!-- Owl-Carousel -->
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g1.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Our Specials</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g2.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Our Specials</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g3.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Our Specials</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g4.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Our Specials</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g1.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Our Specials</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g2.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Our Specials</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g3.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Our Specials</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g4.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Our Specials</h4>
					<span>Neque porro quisquam est qui dolorem </span>
				</div>
			</div> 
		</div>
		<!-- //Owl-Carousel -->  
	</div>
	<!-- //specials --> 
	<!-- menu-form -->
	<div class="menu-form">
		<div class="container"> 
			<div class="w3ls-title"> 
				<h3 class="agileits-title">Menu</h3>
			</div>
			<div class="menu-info"> 
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Starters</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Deserts</a></li>
						<li role="presentation"><a href="#tree" role="tab" id="tree-tab" data-toggle="tab" aria-controls="tree">Main dishes</a></li>
						<li role="presentation"><a href="#four" role="tab" id="four-tab" data-toggle="tab" aria-controls="four">Drinks</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="tab-info">
								<div class="col-md-6 col-xs-6 menu-w3tabs-left">
									<div class="menu-grids agile">
										<div class="menu-right">
											<h5>$18</h5>
										</div>
										<div class="menu-left">
											<h4>Pasta Salad</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div> 
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-grids menu-grids-mdl">
										<div class="menu-right">
											<h5>$12</h5>
										</div>
										<div class="menu-left">
											<h4>Buffalo wings</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-grids">
										<div class="menu-right">
											<h5>$14</h5>
										</div>
										<div class="menu-left">
											<h4>Meatloaf</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-6 col-xs-6 menu-w3tabs-left">
									<div class="menu-grids agile">
										<div class="menu-right">
											<h5>$18</h5>
										</div>
										<div class="menu-left">
											<h4>Sandwich</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div> 
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-grids menu-grids-mdl">
										<div class="menu-right">
											<h5>$12</h5>
										</div>
										<div class="menu-left">
											<h4>Fried rice </h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-grids">
										<div class="menu-right">
											<h5>$14</h5>
										</div>
										<div class="menu-left">
											<h4>Cheese fries</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
							<div class="tab-info">
								<div class="menu-grids">
									<div class="menu-left">
										<h4>Apple crisp</h4>
										<p>Porttitor vestibulum eu nisl dignissimos ducimus qui blanditiis praesentium voluptatum</p>
									</div>
									<div class="menu-right">
										<h5>$20</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="menu-grids menu-grids-mdl">
									<div class="menu-left">
										<h4>Doughnut</h4>
										<p>Vestibulum porttitor eu nisl dignissimos ducimus qui blanditiis praesentium voluptatum</p>
									</div>
									<div class="menu-right">
										<h5>$25</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="menu-grids">
									<div class="menu-left">
										<h4>Brown Betty</h4>
										<p>Dignissimos porttitor vestibulum eu nisl ducimus qui blanditiis praesentium voluptatum</p>
									</div>
									<div class="menu-right">
										<h5>$20</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tree" aria-labelledby="tree-tab">
							<div class="tab-info">
								<div class="col-md-6 col-xs-6 menu-w3tabs-left">
									<div class="menu-grids agile">
										<div class="menu-right">
											<h5>$18</h5>
										</div>
										<div class="menu-left">
											<h4>Glorified rice</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div> 
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-grids menu-grids-mdl">
										<div class="menu-right">
											<h5>$12</h5>
										</div>
										<div class="menu-left">
											<h4>Shrimp Creole</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-grids">
										<div class="menu-right">
											<h5>$14</h5>
										</div>
										<div class="menu-left">
											<h4>Spanish rice</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-6 col-xs-6 menu-w3tabs-left">
									<div class="menu-grids agile">
										<div class="menu-right">
											<h5>$18</h5>
										</div>
										<div class="menu-left">
											<h4>Chicken bog</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div> 
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-grids menu-grids-mdl">
										<div class="menu-right">
											<h5>$12</h5>
										</div>
										<div class="menu-left">
											<h4>Salami</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-grids">
										<div class="menu-right">
											<h5>$14</h5>
										</div>
										<div class="menu-left">
											<h4>Hotdish</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="four" aria-labelledby="four-tab">
							<div class="tab-info">
								<div class="menu-grids">
									<div class="menu-left">
										<h4>Margaritas</h4>
										<p>Porttitor vestibulum eu nisl dignissimos ducimus qui blanditiis praesentium voluptatum</p>
									</div>
									<div class="menu-right">
										<h5>$40</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="menu-grids  menu-grids-mdl">
									<div class="menu-left">
										<h4>Daiquiris</h4>
										<p>Vestibulum porttitor eu nisl dignissimos ducimus qui blanditiis praesentium voluptatum</p>
									</div>
									<div class="menu-right">
										<h5>$25</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="menu-grids">
									<div class="menu-left">
										<h4>Shakes</h4>
										<p>Dignissimos porttitor vestibulum eu nisl ducimus qui blanditiis praesentium voluptatum</p>
									</div>
									<div class="menu-right">
										<h5>$20</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div> 
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>	
	<!-- //menu-form -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-5 col-sm-5 agileinfo_footer_grid">
				<h3 class="agileits-title">About Us</h3>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
					fugiat nulla pariatur. <span>Excepteur sint occaecat cupidatat non proident 
					sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
			</div>
			<div class="col-md-3 col-sm-3 agileinfo_footer_grid mid-w3l nav2">
				<h3 class="agileits-title">Popular</h3>
				<ul>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Proin placerat</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Ipsum et rutrum</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Proin semper utr</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Ligula sit amet</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4 agileinfo_footer_grid">
				<h3 class="agileits-title">Address</h3>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 738 Diamond Road, New York City</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (0123) 0111 111 222</li>
				</ul>
			</div> 
			<div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>© 2017 Dine. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts.</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- modal-about -->
	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<img src="images/g2.jpg" class="img-responsive" alt=""/>
					<div class="modal-w3lstext">
						<h4>Blanditiis deleniti</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in. Fusce lacus purus, pulvinar ut lacinia id, sagittis eumi.</p>
					</div> 
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal-about -->   
	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 3,
				lazyLoad : true,
				autoPlay : true,
				pagination : false,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript --> 
	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function (e) {
		  e.preventDefault();
		  $(this).toggleClass('navicon--active');
		  $('.toggle').toggleClass('toggle--active');
		});
	</script> 
	<!-- //menu-js -->
	<!-- Progressive-Effects-Animation-JavaScript -->  
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- //Progressive-Effects-Animation-JavaScript --> 
	<!-- jarallax -->  
	<script src="js/SmoothScroll.min.js"></script> 
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //jarallax --> 
	<!-- start-smooth-scrolling --> 
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
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
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
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>