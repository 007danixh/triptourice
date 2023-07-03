<?php
include './layouts/app.php';
?>

<?php
include './layouts/header.php';

?>

<?php

include './layouts/message.php';
?>

<div class="hero-wrap js-fullheight customHero" style="background-image: url('images/bg_3.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tour</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Deluxe Tour Package</h1>
            </div>
        </div>
    </div>
</div>



<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-3 sidebar">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Find City</h3>
        			<form action="#">
        				<div class="fields">
		              <div class="form-group">
		                <input type="text" class="form-control" placeholder="Destination, City">
		              </div>
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control" placeholder="Keyword search">
	                      <option value="">Select Location</option>
	                      <option value="">San Francisco USA</option>
	                      <option value="">Berlin Germany</option>
	                      <option value="">Lodon United Kingdom</option>
	                      <option value="">Paris Italy</option>
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
		              </div>
		              <div class="form-group">
		              	<div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
										  <input value="1000" min="0" max="120000" step="500" type="range"/>
										  <input value="50000" min="0" max="120000" step="500" type="range"/>
										  </svg>
										</div>
		              </div>
		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
        		</div>
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Star Rating</h3>
        			<form method="post" class="star-rating">
							  <div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
									</label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						     </label>
							  </div>
							  <div class="form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							    </label>
							  </div>
							</form>
        		</div>
          </div> -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(images/bg_4.jpg);"></div>
                            </div>
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(images/bg_2.jpg);"></div>
                            </div>
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(images/image_2.jpg);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                        <span>Our Best Destination &amp; Tour</span>
                        <h2>Deluxe Tour Package</h2>
                        <p class="rate mb-5">
                            <span class="loc"><a href="#"><i class="icon-map"></i> 4 Days 3 Nights</a></span>
                            <span class="star">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-o"></i>
                                4 Rating</span>
                        </p>
                        <p>Kashmir valley is the dream destination for everyone to visit in their life time. The serene climate, snow capped mountains and apple trees around make it a visual treat for travellers.</p>

                        <p>The 3 Nights 4 Days Srinagar itinerary allows you to witness the breathtaking and scenic beauty of the place. As part of the package, you will head to Gulmarg and Pahalgam from Srinagar. There are many sporting activities that kids along with elder ones can enjoy.</p>

                        <h4>Highlights</h4>
                        <p>Shikara Ride On Dal LakeVisit To Mughal GardenGondola Ride At Gulmarg Visit To Aru Valley, Betaab Valley &Chandanwari At PahalgamPrivate Transfers & Sightseeing.</p>
                        <h5>DAY 1</h5>
                        <div class="d-md-flex mt-1 mb-12">
                            
                            <ul>
                                <li>Welcome to Srinagar. Our representative / driver will pickup from Srinagar Airport or Railway Station. Check into hotel /houseboat and relax for some time.</li>
                                <li>Later you will head to world famous Mughal Gardens i.e. Nishat Garden, Shalimar Garden and Chashme Shahi. In Evening enjoy Shikara Ride on Dal lake for 01 Hour.</li>
                                <li>Later Back to the hotel/houseboat and have a delicious dinner. overnight stay at Srinagar Houseboat /Hotel.</li>

                            </ul>
                            
                        </div>
                        <h5>DAY 2</h5>
                        <div class="d-md-flex mt-1 mb-12">
                            
                            <ul>
                                <li>SRINAGAR TO PAHALGAM TO SRINAGAR.</li>
                                <li>Once you are done with scrumptious breakfast, then head to Pahalgam Valley. . Pahalgam is 2440 Mtrs above sea level (Valley of Shepherds) on the way visit Saffron fields. Pahalgam is the most famous place for Indian Film Industry. When you visit Pahalgam, you can enjoy all the sporting activities.</li>
                                <li>Enjoy the nature charm of the valley. One can visit Betaab Valley, Chandanwari and Aru Valley in Pahalgam (Direct payment basis).After sightseeing return to Srinagar Hotel. Enjoy your dinner & lovely stay at Srinagar hotel.</li>

                            </ul>
                            
                        </div>
                        <h5>DAY 3</h5>
                        <div class="d-md-flex mt-1 mb-12">
                            
                            <ul>
                                <li>Today morning after having your delicious breakfast you can go for the day trip to Gulmarg.</li>
                                <li>Gulmarg is Approx. 2730 Mtrs above the sea Level) and known as ("Meadow of Flowers").Gulmarg is most beautiful town, a beautiful hill station, a popular skiing destination during winters..</li>
                                <li>Gulmarg is famous because of its "Gulmarg Gondola," one of the highest cable car in the world (Direct Payment Basis). After sightseeing return to Srinagar Hotel. Enjoy your dinner & lovely stay at Srinagar hotel.</li>

                            </ul>
                            
                        </div>

                        <h5>DAY 4</h5>
                        <div class="d-md-flex mt-1 mb-12">
                            
                            <ul>
                                <li>Today on time you get transferred to the Srinagar airport for your onward journey</li>
       

                            </ul>
                            
                        </div>

                        <h5>Inclusion</h5>
                        <p>Accommodation Breakfast & Dinner All Transfers & Sightseeing by Private vehicle. Day trip to Pahalgam. Day trip to Gulmarg. Sightseeing of Mughal Gardens. Shikara ride on Dal Lake for 01 Hours. Pick up & Drop at Srinagar Airport. Above rates are subject to availability</p>
                        
                        <h5>Exclusion</h5>
                        <p>Air tickets/Train tickets. Pony Ride/ Sledging (it is done by Bargaining) Tips to waiters/drivers/any other person Monument fees at all places and gardens. Thajwas glacier trip at Sonmarg (as this sightseeing is done by Local Taxi stand at Sonmarg only or by ponies and Is on direct payment basis) Non-Veg item in Houseboat. Any other thing which is not mentioned in inclusions Tour Itinerary can be changed depending upon the availability of Hotels/ Houseboat All personal nature like video camera, tip, table drink, etc and any other.</p>
                    </div>
                    <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Take A Tour</h4>
          			<div class="block-16">
		              <figure>
		                <img src="images/destination-1.jpg" alt="Image placeholder" class="img-fluid">
		                <a href="https://www.youtube.com/watch?v=EYlyfLOx4D4
" class="play-button popup-vimeo"><span class="icon-play"></span></a>
		              </figure>
		            </div>
          		</div>
                    <!-- <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Our Rooms</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="destination">
                                    <a href="hotel-single.html" class="img img-2" style="background-image: url(images/room-4.jpg);"></a>
                                    <div class="text p-3">
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
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
                                            <span><i class="icon-map-o"></i> Miami, Fl</span>
                                            <span class="ml-auto"><a href="#">Book Now</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="destination">
                                    <a href="hotel-single.html" class="img img-2" style="background-image: url(images/room-5.jpg);"></a>
                                    <div class="text p-3">
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
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
                                            <span><i class="icon-map-o"></i> Miami, Fl</span>
                                            <span class="ml-auto"><a href="#">Book Now</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="destination">
                                    <a href="hotel-single.html" class="img img-2" style="background-image: url(images/room-6.jpg);"></a>
                                    <div class="text p-3">
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
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
                                            <span><i class="icon-map-o"></i> Miami, Fl</span>
                                            <span class="ml-auto"><a href="#">Book Now</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <section class="ftco-section contact-section ftco-degree-bg">
                            <div class="container">
                                <div class="row d-flex mb-5 contact-info">
                                    <div class="col-md-12 mb-4">
                                        <h2 class="h4">Book Now</h2>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-md-3">
                                        <p><span>Address:</span> Kralyar Jogi Lankar Rainawari, Srinagar Kashmir, 190003</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p><span>Phone:</span> <a href="tel://1234567920">+91 9797 973 325</a></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@neversleepskashmir.com</a></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p><span>Website</span> <a href="#">neversleepskashmir.com</a></p>
                                    </div>
                                </div>

                                <div class="row block-9">

                                    <?php
                                    include './layouts/contact-form.php'
                                    ?>
                                    <div class="col-md-6" id="map"></div>
                                </div>

                            </div>
                        </section>
                    </div>



                </div>
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->

<?php
include './layouts/footer.php';
?>
