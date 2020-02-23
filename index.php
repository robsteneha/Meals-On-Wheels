<?php
	session_start();
    require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="css/menu-styles.css">
	<link rel="stylesheet" href="css/footer-style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<title>MEALS ON WHEELS</title>
	
	<div class="main">
		<div class="logo">
			<!--<div><img src="images/food-chef.jpg"></img> <br></div>-->
			<b>MEALS ON WHEELS
		</div>
		<ul>
			<li class="active"><a href="#">HOME</a></li>
			<!--<li><a href="#">RESTRAUNTS</a></li>-->
			<!--<li><a href="#">FOOD MENU</a></li>-->
			<li><a href="admin-login.php">ADMIN LOGIN</a></li>
			<li><a href="login-page.php">USER LOGIN</a></li>
			<li><a href="signup.php">REGISTER</a></li>
			<!--<li><a href="#">My Account</a></li>-->
		</ul>	
	</div>
	
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		.parallaxone1{
			width:100%;
			height: 950px;
			background-size: 100% 100%;
			background-attachment: fixed; 
			background-image: linear-gradient(rgba(0,0,0,0.7),rgba(1,0,0,0.5)), url(images/dinner.jpg);
			text-align: center;
		}

		.parallaxone1 h2{
			position: absolute;
			/*top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);*/
			margin-left:40%;
			top: 500px;
			width: 400px;
			height: 30px;
			padding: 10px;
			background-color: black;
			color: white;
		}

		.parallaxone2{
			width:100%;
			height: 950px;
			background-size: 100% 100%;
			background-attachment: fixed; 
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/indian.jpg);

		}

		.parallaxone2 h2{
			position: relative;
			top: 500px;
			width: 400px;
			height: 30px;
			padding: 10px;
			background-color: black;
			color: white;
			text-align: center;

		}

		.parallaxone3{
			width:100%;
			height: 950px;
			background-size: 100% 100%;
			background-attachment: fixed; 
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,.7)),url(images/taco.jpg);

		}

		.parallaxone3 h2{
			position: relative;
			top: 500px;
			width:400px;
			height: 30px;
			padding: 10px;
			background-color: black;
			color: white;
			text-align: center;

		}

		.para{
			height: 100%;
			width: 94.76%;
			padding: 50px;
			text-align: center;
			background-color: black;
			color: white;
		}

	</style>
</head>
<body>

	<div class="parallaxone1">
			<center><h2> Welcome to Meals On Wheels
			</h2></center>
	</div>
	<!--<div class="para">
		
	</div>-->
	

	<div class="parallaxone2">
			<center><h2>REGISTER NOW TO ORDER
			</h2></center>
	</div>


	<div class="parallaxone3">
			<center><h2> Good Food For Good Life
			</h2></center>
	</div>

	<!--<div class="para">
		<p>
			Welcome Developers, We will see Parallax Website With HTML & CSS in Hindi | Parallax Scrolling Effects Tutorial in Hindi.
			How to create a "parallax" scrolling effect with CSS. Parallax. Parallax scrolling is a website trend where the background content (i.e. an image) is moved at a different speed than the foreground content while scrolling. 
			<div>a</div>
			<div>b</div>
			<div>c</div>

		</p>
	</div>
	 PROCESS -->
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/services.png" class="d-block w-100" alt="services">
    </div>
  </div>
</div>
	<!-- FOOTER -->
	<section class="footer">
		<p>
			
			<br></br>
			<center><h1>CONTACT US</h1></center>
			<br></br>
			<br></br>
		</p>
		<div class="contact-info">
			<div class="card">
				<i class="card-icon fas fa-envelope"></i>
				<p>email@domain</p>
			</div>
			<div class="card">
				<i class="card-icon fas fa-phone"></i>
				<p>+91 1234567890</p>
			</div>
			<div class="card">
				<i class="card-icon fas fa-map-marker-alt"></i>
				<p>Bengaluru, Karnataka</p>
			</div>
		</div>
	</section>
	<div class="footer">
		<p>
			<br></br>
			<br></br>
			<br></br>
		</p>
	</div>
<!--	
	<section class="section section--steps -align-center">
		<div class="section__head -align-center">
            <div class="container container--fixed">
                 <h2>How It Works</h2>
            </div>
        </div>
        <div class="section__body">
            <div class="container container--fixed">
                <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="media media--info">
                                <figure class="media__icon">
									<img alt="1. Search" src="images/icons/search.png" title="1. Search">
								</figure>
                                <span class="media__title">1. Search</span>
                                <div class="media__desc">
                                    <p>Find your restaurant using advanced location based search filter.</p>
                                </div>
                            </div>
                        </div> 
                            <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="media media--info">
                                <figure class="media__icon">
									<img alt="2. Choose" src="images/icons/select.png" title="2. Choose">
								</figure>
                                <span class="media__title">2. Choose</span>
                                <div class="media__desc">
                                    <p>Select a best fit and appropriate restaurant which fulfills your binge and taste buds.</p>
                                </div>
                            </div>
                        </div> 
                            <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="media media--info">
                                <figure class="media__icon">
									<img alt="3. Pay" src="images/icons/pay.png" title="3. Pay">
								</figure>
                                <span class="media__title">3. Pay</span>
                                <div class="media__desc">
                                    <p>Make payment using instant and secured online process or cash on delivery.</p>
                                </div>
                            </div>
                        </div> 
                            <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="media media--info">
                                <figure class="media__icon">
									<img alt="4. Enjoy" src="images/icons/enjoy.png" title="4. Enjoy">
								</figure>
                                <span class="media__title">4. Enjoy</span>
                                <div class="media__desc">
                                    <p>Celebrate and have a good time enjoying your chosen delicacy.</p>
                                </div>
                            </div>
                        </div> 
                                    </div>
            </div>
        </div>
    </section>-->
<!--    <footer id="footer" class="footer">
        <section class="section section--footer">
        <div class="container container--fixed">
            <div class="section--footer-upper">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <h6 class="toggle toggle--trigger toggle--trigger-js">Information</h6>
                        <div class="toggle__target toggle__target-js">
                            <ul class="links--vertical">
                                <div class="gridcontent"><ul class="footerlinks"><li><a href="/cms/view/about-us/1" target="">About us</a></li><li><a href="/cms/view/team/27" target="">Our Team</a></li><li><a href="/cms/view/privacy-policy/21" target="">Privacy Policy</a></li><li><a href="/affiliate" target="">Affiliate</a></li><li><a href="/cms/advertise" target="">Advertise</a></li><li><a href="/cms/contact-us" target="">Contact Us</a></li></ul></div> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <h6 class="toggle toggle--trigger toggle--trigger-js">My Acccount</h6>
                        <div class="toggle__target toggle__target-js">
                            <ul class="links--vertical">
                                <li><a href="/member/orders">My Orders</a>
                                </li>
									<li><a href="/member/reviews">My Reviews</a>
					</li>
												
                                <li><a href="/member/account">My Account</a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h6 class="toggle toggle--trigger toggle--trigger-js">Popular Cities</h6>
                        <div class="toggle__target toggle__target-js">
                            <ul class="links--vertical links--vertical-half">
                                                                    <li><a href="/restaurants/city/california">California</a>
                                    </li>
                                                                        <li><a href="/restaurants/city/florida">Florida</a>
                                    </li>
                                                                        <li><a href="/restaurants/city/new%20jersey">New Jersey</a>
                                    </li>
                                                                        <li><a href="/restaurants/city/kentucky">Kentucky</a>
                                    </li>
                                                                        <li><a href="/restaurants/city/ohio">Ohio</a>
                                    </li>
                                                                        <li><a href="/restaurants/city/new%20york">New York</a>
                                    </li>
                                                                        <li><a href="/restaurants/city/connecticut">Connecticut</a>
                                    </li>
                                     
                            </ul>
                        </div>
                    </div>
                    					
						<div class="col-lg-6 col-md-6 hide--desktop">
							<h6 class="toggle toggle--trigger toggle--trigger-js"><span class="current-lang">English</span></h6>
							<div class="toggle__target toggle__target-js">
									<ul class="links--vertical">
																					<li class="active">
												<a href="/info/lang/1">English</a>
											</li>
																					<li>
												<a href="/info/lang/2">Arabic</a>
											</li>
																					<li>
												<a href="/info/lang/3">Spanish</a>
											</li>
										 
									</ul>
							</div>
						</div>
					                </div>
            </div>
            <div class="section--footer-lower">
                <div class="row">
									
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 -align-right -float-right hide--mobile">
							<div class="dropdown">
								<a href="javascript:void(0)" class="btn btn--large btn--black btn--dropdown dropdown__link-js">
									<span class="current-lang">English</span>
								</a>
								<div class="dropdown__target dropdown__target-js" style="display:none;">
									<ul class="links--vertical">
										 
										 
																				<li>
											
											<a href="/info/lang/2">Arabic</a>
										</li>
									 
																				<li>
											
											<a href="/info/lang/3">Spanish</a>
										</li>
									 
									</ul>
								</div>
							</div>
						</div>
					                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <ul class="links--socials">
                                                        <li class="fb">
                                <a href="https://www.facebook.com/yoyumm/" target="_blank">
                                    <svg viewBox="0 0 7 17" height="17" width="7" xmlns="http://www.w3.org/2000/svg">
                                    <path transform="translate(-1179 -5715)" d="M1185.74,5723.5h-2.12v8.49h-3.13v-8.49H1179v-3h1.49v-1.95c0-1.38.59-3.56,3.16-3.56l2.32,0.01v2.91h-1.68a0.687,0.687,0,0,0-.67.82v1.77h2.39Z" fill="#fff"></path>
                                    </svg>
                                </a>
                            </li>
                                                                                    <li class="tw">
                                <a href="https://twitter.com/yo_yumm" target="_blank">
                                    <svg viewBox="0 0 17 14" height="14" width="17" xmlns="http://www.w3.org/2000/svg">
                                    <path transform="translate(-1317 -5724)" d="M1332.26,5727.47c0.01,0.16.01,0.31,0.01,0.46a9.933,9.933,0,0,1-9.93,10.06,9.83,9.83,0,0,1-5.35-1.59,5.919,5.919,0,0,0,.84.05,6.942,6.942,0,0,0,4.33-1.51,3.492,3.492,0,0,1-3.26-2.46,2.842,2.842,0,0,0,.66.07,3.585,3.585,0,0,0,.92-0.13,3.517,3.517,0,0,1-2.8-3.47v-0.04a3.254,3.254,0,0,0,1.58.44,3.52,3.52,0,0,1-1.55-2.94,3.582,3.582,0,0,1,.47-1.78,9.869,9.869,0,0,0,7.19,3.7,3.591,3.591,0,0,1-.09-0.81,3.488,3.488,0,0,1,6.04-2.42,6.831,6.831,0,0,0,2.21-.86,3.533,3.533,0,0,1-1.53,1.96,6.467,6.467,0,0,0,2-.56A6.892,6.892,0,0,1,1332.26,5727.47Z" fill="#fff"></path>
                                    </svg>
                                </a>
                            </li>
                                                                                    <li class="gl">
                                <a href="https://plus.google.com/u/0/109841022361598213699" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 491.858 491.858" style="enable-background:new 0 0 491.858 491.858;" xml:space="preserve" width="512px" height="512px">
<g>
    <g>
        <path d="M377.472,224.957H201.319v58.718H308.79c-16.032,51.048-63.714,88.077-120.055,88.077     c-69.492,0-125.823-56.335-125.823-125.824c0-69.492,56.333-125.823,125.823-125.823c34.994,0,66.645,14.289,89.452,37.346     l42.622-46.328c-34.04-33.355-80.65-53.929-132.074-53.929C84.5,57.193,0,141.693,0,245.928s84.5,188.737,188.736,188.737     c91.307,0,171.248-64.844,188.737-150.989v-58.718L377.472,224.957L377.472,224.957z" fill="#FFFFFF"></path>
        <polygon points="491.858,224.857 455.827,224.857 455.827,188.826 424.941,188.826 424.941,224.857 388.91,224.857      388.91,255.74 424.941,255.74 424.941,291.772 455.827,291.772 455.827,255.74 491.858,255.74    " fill="#FFFFFF"></polygon>
    </g>
</g>
</svg>
                                </a>
                            </li>
                                                                                    <li class="yt">
                                <a href="https://in.pinterest.com/yoyumm/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="38" viewBox="0 0 30 38">
  <path d="M26.157,3.895A14.673,14.673,0,0,0,15.919,0C9.847,0,6.113,2.478,4.049,4.557a13.437,13.437,0,0,0-4,9.333c0,4.231,1.777,7.478,4.753,8.686a1.58,1.58,0,0,0,.6.123,1.329,1.329,0,0,0,1.3-1.065c0.1-.376.333-1.305,0.434-1.708A1.6,1.6,0,0,0,6.7,18.192a5.509,5.509,0,0,1-1.262-3.774,9.521,9.521,0,0,1,9.892-9.563c5.1,0,8.265,2.885,8.265,7.53a15.591,15.591,0,0,1-1.786,7.643c-0.8,1.388-2.207,3.043-4.367,3.043a2.9,2.9,0,0,1-2.3-1.048,2.628,2.628,0,0,1-.464-2.291c0.227-.958.537-1.957,0.837-2.923a18.021,18.021,0,0,0,1.064-4.76c0-2.274-1.4-3.8-3.493-3.8-2.655,0-4.735,2.685-4.735,6.113A9.058,9.058,0,0,0,9,17.782c-0.334,1.411-2.322,9.8-2.7,11.383-0.218.924-1.531,8.218,0.643,8.8,2.443,0.654,4.626-6.451,4.848-7.253,0.18-.653.81-3.122,1.2-4.639a7.4,7.4,0,0,0,4.925,1.9,11,11,0,0,0,8.819-4.394,17.586,17.586,0,0,0,3.316-10.785A12.411,12.411,0,0,0,26.157,3.895Z" fill="#FFFFFF"></path>
</svg>
                                </a>
                            </li>
                             							
                        </ul>
                    </div>
                </div>
                <div class="row row--last">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <span class="txt--light txt--nos hide--desktop">+91-9555596666</span>
                        <p>Copyright © 2019 Yo!Yumm.com Developed by <a href="https://www.fatbit.com/online-food-ordering-software.html" target="_blank">FATbit Technologies</a></p>
                    </div>
                    <div class="col-lg-6 col-md-6 "><img class="-float-right" src="/images/cards.png" alt=""></div>
                </div>    
            </div> 
        </div>
    </section>	
</footer>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>