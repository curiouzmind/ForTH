@extends('master')
	@section('slide')
	<div class="slider slider-home"><!-- Slider Section -->
		<div class="flexslider slider-loading falsenav">
			<ul class="slides">
				<li>
					<div class="slider-textbox clearfix">
						<div class="container">
							<div class="row">
                    			<div class="slider-bar pull-left">WELCOME TO FORTH FOUNDATION</div>
                    			<div class="slider-triangle pull-left"></div>
							</div>
						</div>
						<div class="container">
							<div class="row">
                    			<div class="slider-bar-under pull-left">We think for you</div>
                    			<div class="slider-triangle-under pull-left"></div>
							</div>
						</div>
					</div>
					<img alt="Slider 1" class="img-responsive" src="temp/the_thinker.jpg" />
				</li>
				<li>
					<div class="slider-textbox clearfix">
						<div class="container">
							<div class="row">
                    			<div class="slider-bar pull-left">WELCOME TO FORTH FOUNDATION</div>
                    			<div class="slider-triangle pull-left"></div>
							</div>
						</div>
						<div class="container">
							<div class="row">
                    			<div class="slider-bar-under pull-left">Thinkers are one step ahead</div>
                    			<div class="slider-triangle-under pull-left"></div>
							</div>
						</div>
					</div>
					<img alt="Slider 1" class="img-responsive" src="img/past-leaders.jpg" />
				</li>
			</ul>
		</div>
		<div class="bottom-book-slider">
			<div class="container">
				<div class="row pos-center">
					<ul>
						<li><i class="fa fa-globe"></i> Community Service</li>
						<li><i class="fa fa-camera"></i> Videos</li>
						<li><i class="fa fa-building"></i> Events</li>
						<li><i class="fa fa-building"></i> Projects</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	@endsection
	@section('content')
				<div class="row">
					<div class="about-title pos-center">
						<h2>WELCOME TO Forward Thinkers Foundation</h2>
						<div class="title-shape"><img alt="Shape" src="img/shape.png"></div>
						<p>“This is a <span class="active-color">social political</span> think-tank for Nigeria where alternative policies will be suggested, discussed and eventually adopted in a convention, to be held at a later date, by members of this forum. These policies, when adopted, will become the platform and ideology of members of this movement to implement in their areas of influence. “
						</p>
						
					</div>
					<div class="otel-info margint60">
						<div class="col-lg-4 col-sm-12">
							<div class="title-style-1 marginb40">
								<h5>GALLERY</h5>
								<hr>
							</div>
							<div class="flexslider">
								<ul class="slides">
									<li><img alt="Slider 1" class="img-responsive" src="img/council-of-state.jpg" /></li>
									<li><img alt="Slider 1" class="img-responsive" src="img/nigerian-leaders.gif" /></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="title-style-1 marginb40">
								<h5>ABOUT US</h5>
								<hr>
							</div>
							<p>This movement is focused on building Nigeria through constructive criticism by challenging the current system and providing alternative policies across all sectors.</p>
							<p> We recognize this would take persistence and tireless efforts of all members of this group. That’s why we would work together to advance issues like job creation, power, energy independence, transportation and infrastructure, and national security.</p>
							<div class="button-style-1">
										<a href="#" class="button-style-1">Read More</a>
									</div>
							
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="title-style-1 marginb40">
								<h5>Latest News</h5>
								<hr>
							</div>
							<div class="home-news">
								<div class="news-box clearfix">
									<div class="news-time pull-left">
										<div class="news-date pos-center"><div class="date-day">20<hr /></div>October</div>
									</div>
									<div class="news-content pull-left">
										<h6><a href="#">FORTH EMERGES</a></h6>
										<p class="margint10">Forth Foundation is buzzling with great ideas to
										change the political ecosystem of Nigeria<a class="active-color" href="#">[...]</a></p>
									</div>
								</div>
								<div class="news-box clearfix">
									<div class="news-time pull-left">
										<div class="news-date pos-center"><div class="date-day">18<hr /></div>September</div>
									</div>
									<div class="news-content pull-left">
										<h6><a href="#">FORTH set to Lauch</a></h6>
										<p class="margint10">Forth Foundation is set to lauch <a class="active-color" href="#">[...]</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endsection

		@section('publications')
		<div class="explore-rooms margint30 clearfix"><!-- Explore Rooms Section -->
			<div class="container">
				<div class="row">	
					<div class="title-style-2 marginb40 pos-center">
						<h3>PUBLICATIONS</h3>
						<hr>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								<img alt="Room Images" class="img-responsive" src="temp/room-image-1.jpg">
								<div class="home-room-details">
									<h5><a href="#">Nigeria,A Failed State?</a></h5>
									<div class="pull-left">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<div class="pull-right room-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star inactive"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
								<p>In this article, we take a look at this very important questions[...]</p>
							</div>
							<div class="room-bottom">
								<div class="pull-left">
									<div class="button-style-1">
										<a href="#">READ</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								<img alt="Room Images" class="img-responsive" src="temp/room-image-6.jpg">
								<div class="home-room-details">
									<h5><a href="#">The Way forward</a></h5>
									<div class="pull-left">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<div class="pull-right room-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star inactive"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
								<p>We take a critical look at our current economic woes and present some tips to the government on how to move the country forward </p>
							</div>
							<div class="room-bottom">
								<div class="pull-left">
									<div class="button-style-1">
										<a href="#">READ</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								<div class="room-features">FEATURED</div>
								<img alt="Room Images" class="img-responsive" src="temp/room-image-3.jpg">
								<div class="home-room-details">
									<h5><a href="#">Our Past Mistakes</a></h5>
									<div class="pull-left">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<div class="pull-right room-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star inactive"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
								<p>The mistakes of our past is an article that focuses on some of the problems we have encountered in the past that has lead us here,,,</p>
							</div>
							<div class="room-bottom">
								<div class="pull-left">
									<div class="button-style-1">
										<a href="#">READ</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection

		@section('support')
		<div id="parallax123" class="parallax parallax-one clearfix margint60"><!-- Parallax Section -->
			<div class="support-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-phone"></i></div>
										<h4>CALL US</h4>
										<p class="margint20">If you wanna speak to us, please call</p>
										<p> +234-8XXXXXXXXXX</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-phone"></i></div>
										<h4>PHONE NUMBER</h4>
										<p class="margint20">+234-8XXXXXXXXXX</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-envelope"></i></div>
										<h4>SEND US E-MAIL</h4>
										<p class="margint20">We will be happy to hear from you, please Send Us an email</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-envelope"></i></div>
										<h4>E-MAIL ADDRESS</h4>
										<p class="margint20">info@forthfoundation.com</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-home"></i></div>
										<h4>VISIT US</h4>
										<p class="margint20">You can visit our centre and have a chat with our representatives</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-home"></i></div>
										<h4>COMPANY ADDRESS</h4>
										<p class="margint20"><br />xxxxx.Lagos</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection

		@section('newsletter')
		<div class="newsletter-section"><!-- Newsletter Section -->
			<div class="container">
				<div class="row">
					<div class="newsletter-top pos-center margint30">
						<img alt="Shape Image" src="img/shape.png" >
					</div>
					<div class="newsletter-form margint40 pos-center">
						<div class="newsletter-wrapper">
							<div class="pull-left">
								<h2>Sign up newsletter</h2>
							</div>
							<div class="pull-left">
								<form action="#" method="post" id="ajax-contact-form">
									<input type="text" placeholder="Enter a e-mail address">
									<input type="submit" value="SUBSCRIBE" >
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection
	
		@section('footer')
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-sm-2 footer-logo">
							<img alt="Logo" src="img/forth.jpg" class="img-responsive" >
						</div>
						<div class="col-lg-10 col-sm-10">
							<div class="col-lg-3 col-sm-3">
								<h6>CONNECT WITH US</h6>
								<ul class="footer-links">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google +</a></li>
								
								</ul>
							</div>
							<div class="col-lg-3 col-sm-3">
								<h6>ABOUT FORTH</h6>
								<ul class="footer-links">
									<li><a href="#">Home</a></li>
									<li><a href="#">Nigerpedia</a></li>
									<li><a href="#">videos</a></li>
									<li><a href="#">Forum</a></li>
									<li><a href="#">Get Involved</a></li>
									<li><a href="#">News</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-sm-3">
								<h6>PAGES</h6>
								<ul class="footer-links">
									<li><a href="contact.html">Contact</a></li>
									<li><a href="gallery.html">Gallery</a></li>
									<li><a href="index-full-screen.html">Donate</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-sm-3">
								<h6>CONTACT</h6>
								<ul class="footer-links">
									<li><p><i class="fa fa-map-marker"></i> xxxxxxxxx.Lagos </p></li>
									<li><p><i class="fa fa-phone"></i> +234 0 xxxx xxxx </p></li>
									<li><p><i class="fa fa-envelope"></i> <a href="mailto:info@xxxxx.com">info@xxxx.com</a></p></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				@endsection
			