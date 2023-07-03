<?php
include './layouts/app.php';
?>

<?php
include './layouts/header.php';

?>

<div class="hero-wrap js-fullheight customHero" style="background-image: url('images/bg_3.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
				<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tour</span></p>
				<h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Destination</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-start mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate">
				<span class="subheading">Special Offers</span>
				<h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="destination">
					<a href="./package-deluxe" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-p1.jpg);">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="icon-search2"></span>
						</div>
					</a>
					<div class="text p-3">
						<div class="d-flex">
							<div class="one">
								<h3><a href="./package-deluxe">Deluxe Tour Package</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-o"></i>
									<span>4 Rating</span>
								</p>
								<span class="price font-weight-bold">Starting from INR 15,000/Person</span>
							</div>
							<div class="two">
								<!-- <span class="price">$200</span> -->
							</div>
						</div>
						<p>Escape to a world of indulgence and sophistication with our deluxe tour packages</p>
						<p class="days"><span>4 days 3 nights</span></p>
						<hr>
						<p class="bottom-area d-flex">
							<span><i class="icon-map-o"></i> Kashmir</span>
							<span class="ml-auto"><a href="./package-deluxe">Discover</a></span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="destination">
					<a href="./package-premium" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-p2.jpg);">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="icon-search2"></span>
						</div>
					</a>
					<div class="text p-3">
						<div class="d-flex">
							<div class="one">
								<h3><a href="./package-premium">Premium Tour Package</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-"></i>
									<span>5 Rating</span>
								</p>
								<span class="price font-weight-bold">Starting from INR 25,000/Person</span>
							</div>
							<div class="two">
								<!-- <span class="price">$200</span> -->
							</div>
						</div>
						<p>Take your travel experience to the next level with our premium tour packages.</p>
						<p class="days"><span>5 days 4 nights</span></p>
						<hr>
						<p class="bottom-area d-flex">
							<span><i class="icon-map-o"></i> Kashmir</span>
							<span class="ml-auto"><a href="./package-premium">Discover</a></span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="destination">
					<a href="./package-honeymoon" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-p3.jpg);">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="icon-search2"></span>
						</div>
					</a>
					<div class="text p-3">
						<div class="d-flex">
							<div class="one">
								<h3><a href="./package-honeymoon">Honeymoon Tour Package</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<span>5 Rating</span>
								</p>
								<span class="price font-weight-bold">Starting from INR 20,000/Person</span>
							</div>
							<div class="two">
								<!-- <span class="price">$200</span> -->
							</div>
						</div>
						<p>Embark on a romantic journey with our exclusive honeymoon packages</p>
						<p class="days"><span>7 days 6 nights</span></p>
						<hr>
						<p class="bottom-area d-flex">
							<span><i class="icon-map-o"></i> Kashmir</span>
							<span class="ml-auto"><a href="./package-honeymoon">Discover</a></span>
						</p>
					</div>
				</div>
			</div>
			<!-- <div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="destination">
					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="icon-search2"></span>
						</div>
					</a>
					<div class="text p-3">
						<div class="d-flex">
							<div class="one">
								<h3><a href="#">Paris, Italy</a></h3>
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
								<span class="price">$200</span>
							</div>
						</div>
						<p>Far far away, behind the word mountains, far from the countries</p>
						<p class="days"><span>2 days 3 nights</span></p>
						<hr>
						<p class="bottom-area d-flex">
							<span><i class="icon-map-o"></i> San Franciso, CA</span>
							<span class="ml-auto"><a href="#">Discover</a></span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="destination">
					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="icon-search2"></span>
						</div>
					</a>
					<div class="text p-3">
						<div class="d-flex">
							<div class="one">
								<h3><a href="#">Paris, Italy</a></h3>
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
								<span class="price">$200</span>
							</div>
						</div>
						<p>Far far away, behind the word mountains, far from the countries</p>
						<p class="days"><span>2 days 3 nights</span></p>
						<hr>
						<p class="bottom-area d-flex">
							<span><i class="icon-map-o"></i> San Franciso, CA</span>
							<span class="ml-auto"><a href="#">Discover</a></span>
						</p>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>

<?php
include './layouts/footer.php';
?>
