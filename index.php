<?php
include './layouts/app.php';
?>

<?php
include './layouts/header.php';

?>

<?php

include './layouts/message.php';
?>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1ab.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
			<div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
				<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Trip Tourice Holidays <br></strong>Visit, Discover & Explore </h1>


				<!-- <h4  data-scrollax="properties: { translateY: '30%', opacity: 1.6  }"> <b> Kashmir Tour & Travel </b></h4> -->
				<div class="block-17 my-4">
					<?php
					include './layouts/booking-form.php';
					?>
					<!-- <form action="" method="post" class="d-block d-flex">
						<div class="fields d-block d-flex">
							<div class="textfield-search one-third">
								<input type="text" class="form-control" placeholder="Ex: food, service, hotel">
							</div>
							<div class="select-wrap one-third">
								<div class="icon"><span class="ion-ios-arrow-down"></span></div>
								<select name="" id="" class="form-control" placeholder="Keyword search">
									<option value="">Where</option>
									<option value="">San Francisco USA</option>
									<option value="">Berlin Germany</option>
									<option value="">Lodon United Kingdom</option>
									<option value="">Paris Italy</option>
								</select>
							</div>
						</div>
						<input type="submit" class="search-submit btn btn-primary" value="Search">
					</form> -->
				</div>
				<!-- <p>Or browse the highlights</p>
				<p class="browse d-md-flex">
					<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-fork"></i>Restaurant</a></span>
					<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-hotel"></i>Hotel</a></span>
					<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-meeting-point"></i>Places</a></span>
					<span class="d-flex justify-content-md-center align-items-md-	center"><a href="#"><i class="flaticon-shopping-bag"></i>Shopping</a></span>
				</p> -->
			</div>

		</div>

	</div>
</div>

<section class="ftco-section services-section bg-light">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services d-block text-center">
					<div class="d-flex justify-content-center">
						<div class="icon"><span class="flaticon-guarantee"></span></div>
					</div>
					<div class="media-body p-2 mt-2">
						<h3 class="heading mb-3">Best Price Guarantee</h3>
						<p>Find a better deal elsewhere? Let us know and we'll beat it!.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services d-block text-center">
					<div class="d-flex justify-content-center">
						<div class="icon"><span class="flaticon-like"></span></div>
					</div>
					<div class="media-body p-2 mt-2">
						<h3 class="heading mb-3">Travellers Love Us</h3>
						<p>Don't just take our word for it read what our happy customers have to say!.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services d-block text-center">
					<div class="d-flex justify-content-center">
						<div class="icon"><span class="flaticon-detective"></span></div>
					</div>
					<div class="media-body p-2 mt-2">
						<h3 class="heading mb-3">Best Travel Agent</h3>
						<p>Let our expert travel agents take the stress out of planning your dream vacation.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services d-block text-center">
					<div class="d-flex justify-content-center">
						<div class="icon"><span class="flaticon-support"></span></div>
					</div>
					<div class="media-body p-2 mt-2">
						<h3 class="heading mb-3">Our Dedicated Support</h3>
						<p>Our support team is here for you every step of the way – before, during, and after your trip.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-destination">
	<div class="container">
		<div class="row justify-content-start mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate">
				<span class="subheading">Featured</span>
				<h2 class="mb-4"><strong>Featured</strong> Destination</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="destination-slider owl-carousel ftco-animate">
					<div class="item">
						<div class="destination">
							<a href="./tour.php" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="./tour.php">Gulmarg, Kashmir</a></h3>
								<!-- <span class="listing">15 Listing</span> -->
							</div>
						</div>
					</div>
					<div class="item">
						<div class="destination">
							<a href="./tour" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="./tour">Pahalgam, Kashmir</a></h3>
								<!-- <span class="listing">20 Listing</span> -->
							</div>
						</div>
					</div>
					<div class="item">
						<div class="destination">
							<a href="./tour" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="./tour">Sonmarg, Kashmir</a></h3>
								<!-- <span class="listing">10 Listing</span> -->
							</div>
						</div>
					</div>
					<div class="item">
						<div class="destination">
							<a href="./tour" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="./tour">Srinagar, Kashmir</a></h3>
								<!-- <span class="listing">3 Listing</span> -->
							</div>
						</div>
					</div>
					<div class="item">
						<div class="destination">
							<a href="./tour" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="./tour">Dal Lake, Srinagar</a></h3>
								<!-- <span class="listing">3 Listing</span> -->
							</div>
						</div>
					</div>
					<div class="item">
						<div class="destination">
							<a href="./tour" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-6.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="./tour">Waterfall, Kashmir</a></h3>
								<!-- <span class="listing">3 Listing</span> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include './layouts/places.php'

?>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<h2 class="mb-4">Our Clients Response</h2>
				<span class="subheading">More than 10,000 websites visits</span>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="150">0</strong>
								<span>Happy Customers</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="30">0</strong>
								<span>Destination Places</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="300">0</strong>
								<span>Hotels</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="500">0</strong>
								<span>Restaurant</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- <section class="ftco-section">
	<div class="container">
		<div class="row justify-content-start mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate">
				<span class="subheading">Special Offers</span>
				<h2 class="mb-4"><strong>Popular</strong> Hotels &amp; Rooms</h2>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="destination">
					<a href="./package-premium.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/lupin.png);">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="icon-search2"></span>
						</div>
					</a>
					<div class="text p-3">
						<div class="d-flex">
							<div class="one">
								<h3><a href="#">Lupin Gulmarg.</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-o"></i>
									<span>8 Rating</span>
								</p>
							</div>
							<div class="two">
								<span class="price per-price">$40<br><small>/night</small></span>
							</div>
						</div>
						<p>Far far away, behind the word mountains, far from the countries</p>
						<hr>
						<p class="bottom-area d-flex">
							<span><i class="icon-map-o"></i>Gulmarg Kashmir</span>
							<span class="ml-auto"><a href="./package-premium.php">Book Now</a></span>
						</p>
					</div>
				</div>
			</div>


		</div>
	</div>
</section> -->

<section class="ftco-section testimony-section bg-light">
	<div class="container">
		<div class="row justify-content-start">
			<div class="col-md-5 heading-section ftco-animate">
				<span class="subheading">About Us</span>
				<h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
				<p>Experience the beauty of Kashmir like never before with our exclusive tour packages. From majestic snow-capped mountains to pristine lakes and charming local villages, our customized itineraries offer something for everyone. </p>
				<p>With our expert planning and top-notch services, you can sit back, relax, and enjoy a hassle-free travel experience. Come and discover the magic of Kashmir with us!.</p>
				<p><a href="./about.php" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-6 heading-section ftco-animate">
				<span class="subheading">Testimony</span>
				<h2 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h2>
				<div class="row ftco-animate">
					<div class="col-md-12">
						<div class="carousel-testimony owl-carousel">
							<div class="item">
								<div class="testimony-wrap d-flex">
									<div class="user-img mb-5" style="background-image: url(images/defaultperson.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text ml-md-4">
										<p class="mb-5">This was the first time we travelled with Trip Tourice holidays. It was the most memorable and beautiful family trip to kashmir. I would like to thank Ms. Midhat for arranging everything very smoothly and specially for her guidance throughout the trip. Trip was well planned and organized. The hotels, food and Houseboat was very good. Our Cab was on time to pickup at airport. It was a wonderful experience.</p>
										<p class="name">Faiz Khan</p>
										<span class="position">Guest from hydrabad</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap d-flex">
									<div class="user-img mb-5" style="background-image: url(images/defaultperson.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text ml-md-4">
										<p class="mb-5">Has a great trip, some ups and down. But our problems were swiftly and promptly handled by Midhat ( trip tourice holiday)Good choice of hotels provided by them.</p>
										<p class="name">Rahul Kapoor</p>
										<span class="position">Guest from Delhi</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap d-flex">
									<div class="user-img mb-5" style="background-image: url(images/defaultperson.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
									</div>
									<div class="text ml-md-4">
										<p class="mb-5">Thanks Trip Tourice for arranging my holiday package for Jammu and Kashmir. Me and my family enjoyed our vacations. Next whenever we'll plan our holidays we be in touch with you so that we can comfortably enjoy our vacations.</p>
										<p class="name">Sajida Sultana </p>
										<span class="position">Guest from mumbai</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="ftco-section">
	<div class="container">
		<div class="row justify-content-start mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate">
				<span class="subheading">Special Offers</span>
				<h2 class="mb-4"><strong>Popular</strong> Restaurants</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="destination">
					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-1.jpg);">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="icon-search2"></span>
						</div>
					</a>
					<div class="text p-3">
						<h3><a href="#">Luxury Restaurant</a></h3>
						<p class="rate">
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star-o"></i>
							<span>8 Rating</span>
						</p>
						<p>Far far away, behind the word mountains, far from the countries</p>
						<hr>
						<p class="bottom-area d-flex">
							<span><i class="icon-map-o"></i> San Franciso, CA</span>
							<span class="ml-auto"><a href="#">Discover</a></span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="destination">
					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-2.jpg);">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="icon-search2"></span>
						</div>
					</a>
					<div class="text p-3">
						<h3><a href="#">Luxury Restaurant</a></h3>
						<p class="rate">
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star-o"></i>
							<span>8 Rating</span>
						</p>
						<p>Far far away, behind the word mountains, far from the countries</p>
						<hr>
						<p class="bottom-area d-flex">
							<span><i class="icon-map-o"></i> San Franciso, CA</span>
							<span class="ml-auto"><a href="#">Book Now</a></span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="destination">
					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-3.jpg);">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="icon-search2"></span>
						</div>
					</a>
					<div class="text p-3">
						<h3><a href="#">Luxury Restaurant</a></h3>
						<p class="rate">
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star-o"></i>
							<span>8 Rating</span>
						</p>
						<p>Far far away, behind the word mountains, far from the countries</p>
						<hr>
						<p class="bottom-area d-flex">
							<span><i class="icon-map-o"></i> San Franciso, CA</span>
							<span class="ml-auto"><a href="#">Book Now</a></span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="destination">
					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-4.jpg);">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="icon-search2"></span>
						</div>
					</a>
					<div class="text p-3">
						<h3><a href="#">Luxury Restaurant</a></h3>
						<p class="rate">
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star-o"></i>
							<span>8 Rating</span>
						</p>
						<p>Far far away, behind the word mountains, far from the countries</p>
						<hr>
						<p class="bottom-area d-flex">
							<span><i class="icon-map-o"></i> San Franciso, CA</span>
							<span class="ml-auto"><a href="#">Book Now</a></span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- <section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-start mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate">
				<span class="subheading">Recent Blog</span>
				<h2><strong>Tips</strong> &amp; Articles</h2>
			</div>
		</div>
		<div class="row d-flex">
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
					</a>
					<div class="text p-4 d-block">
						<span class="tag">Tips, Travel</span>
						<h3 class="heading mt-3"><a href="#">8 Best homestay in Philippines that you don't miss out</a></h3>
						<div class="meta mb-3">
							<div><a href="#">August 12, 2018</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
					</a>
					<div class="text p-4">
						<span class="tag">Culture</span>
						<h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						<div class="meta mb-3">
							<div><a href="#">August 12, 2018</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
					</a>
					<div class="text p-4">
						<span class="tag">Tips, Travel</span>
						<h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						<div class="meta mb-3">
							<div><a href="#">August 12, 2018</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
					</a>
					<div class="text p-4">
						<span class="tag">Tips, Travel</span>
						<h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						<div class="meta mb-3">
							<div><a href="#">August 12, 2018</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section-parallax">
	<div class="parallax-img d-flex align-items-center">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<h2>Subcribe to our Newsletter</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
					<div class="row d-flex justify-content-center mt-5">
						<div class="col-md-8">
							<form action="#" class="subscribe-form">
								<div class="form-group d-flex">
									<input type="text" class="form-control" placeholder="Enter email address">
									<input type="submit" value="Subscribe" class="submit px-3">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<?php
include './layouts/footer.php';
?>
