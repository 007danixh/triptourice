<?php
include './layouts/app.php';
?>

<?php
include './layouts/header.php';

?>

<?php

include './layouts/message.php';
?>

<div class="hero-wrap js-fullheight customHero" style="background-image: url('images/bg_4.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tour</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Premium Tour Package</h1>
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
                                <div class="hotel-img" style="background-image: url(images/destination-3.jpg);"></div>
                            </div>
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(images/destination-2.jpg);"></div>
                            </div>
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(images/destination-6.jpg);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                        <span>Our Best Destination &amp; Tour</span>
                        <h2>Premium Tour Package</h2>
                        <p class="rate mb-5">
                            <span class="loc"><a href="#"><i class="icon-map"></i> 5 Days 4 Nights</a></span>
                            <span class="star">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                5 Rating</span>
                        </p>
                        <p>Kashmir is the romantic heaven of Earth. Visit during summer to enjoy the green foliage filled natural paradise and in winter, it becomes a white fairytale land. Starting from the romantic Shikara ride to the exciting views of Gulmarg, Kashmir is the place for your entire family.</p>

                        <p>This 4 Nights 5 Days Kashmir itinerary covers destinations like Srinagar, Sonamarg, Pahalgam, and Gulmarg.</p>

                        <h4>Highlights</h4>
                        <p>Shikara Ride On Dal LakeVisit To Mughal GardenExcursion To SonmargGondola Ride At Gulmarg Visit To Aru Valley, Betaab Valley &Chandanwari At PahalgamPrivate Transfers & Sightseeing.</p>
                        <h5>DAY 1</h5>
                        <div class="d-md-flex mt-1 mb-12">

                            <ul>
                                <li>Upon your arrival at Srinagar, you will be picked up by ɴᴇᴠᴇʀꜱʟᴇᴇᴩꜱ ᴛʀᴀᴠᴇʟꜱ representative/ driver and transferred to the hotel / houseboat. After check-in, you will be left to relax for a while. Kashmir’s summer capital is Srinagar, which is located along the Jhelum River bank. The place is famous for wooden mosques, handicrafts, markets, shikaras, and others. The city has the cream of Himalayan beauty and a diverse landscape.</li>
                                <li>Later you can go for the half day tour of world famous Mughal Gardens i.e. Nishat Garden, Shalimar Garden and Chashme Shahi.</li>
                                <li>The royal spring, abode of love, and the garden of pleasure are located inside Mughal Garden. The Nishat Park is the second largest in the valley with 12 spectacular terrace gardens. Chashmi-e-Shahi is an Iranian spring flowing through that garden. The spring has a waterfall, and aqueduct.</li>
                                <li>On the other hand, Dal Lake is the second largest in the state is one of the famous tourist attractions. Taking a houseboat ride on the lake to enjoy sunset amidst the Himalayan backdrop is the top romantic activity.

                                    In the evening, enjoy Shikara ride on the Dal Lake.
                                </li>
                            </ul>

                        </div>
                        <h5>DAY 2</h5>
                        <div class="d-md-flex mt-1 mb-12">

                            <ul>
                                <li>SRINAGAR TO SONAMARG TO SRINAGAR.</li>
                                <li>Post breakfast, you will proceed for an excursion tour to Sonamarg, the meadow of gold. Sonamarg is a beautiful town, which is located 2,800m above mean sea level.</li>
                                <li>Sonamarg is famous for viewpoints showcasing the glaciers and peaks like Machoi Peak, Sirbal Peak, Amarnath Peak and Kaolhoi Glacier. The best of all is the River Azure Nallah Sidh, which runs through this town.</li>
                                <li>The Sindh meanders along here and abounds with trout and mahseer, snow trout can be caught in the main river. You can access the snow which is furnished all over like a white carpet. Ponies can be hired for the trip up to Thajiwas glacier a major attraction during the summer months.</li>
                                <li>In the evening return back to Srinagar. Enjoy your dinner & lovely stay at Srinagar Hotel / Houseboat. The region will be covered in snow, throughout the year. This is a great place to enjoy photography and scenic beauty.

                                    Back to hotel. Overnight stay in the Srinagar.
                                </li>
                            </ul>

                        </div>
                        <h5>DAY 3</h5>
                        <div class="d-md-flex mt-1 mb-12">

                            <ul>
                                <li>SRINAGAR TO PAHALGAM TO SRINAGAR</li>
                                <li>After enjoying your breakfast you will be taken on a road trip to Pahalgam. Pahalgam is a hill station of this valley, which is famous among trekkers and nature-enthusiasts. You can find numerous trekking routes as more than 90% of the land is filled with rich foliage and forests.</li>
                                <li>Enjoy the nature charm of the valley. One can visit Betab Valley, Chandanwari and Aru Valley in Pahalgam (Direct payment basis). After sightseeing return to Srinagar Hotel. Enjoy your dinner & lovely stay at Srinagar hotel.</li>

                            </ul>

                        </div>

                        <h5>DAY 4</h5>
                        <div class="d-md-flex mt-1 mb-12">

                            <ul>
                                <li>SRINAGAR TO GULMARG TO SRINAGAR</li>
                                <li>Post breakfast, taken on a trip to Gulmarg. Gulmarg is the meadow of flowers and the land is literally a meadow filled with vibrant local and wild flowers. This meadow is located 2730m above mean sea level. Gulmarg is the ‘Heartland of Winter Sports in India’. This place is the 7th best destination for skiing in Asia.</li>
                                <li>You will be taken to Khilanmarg via ropeway ride or pony. This gondola (ropeway ride) is Asia’s highest and longest one. This is one of the famous tourist attractions of the land. The ropeway ride is divided into two phases – to and from Kongdoori Mountain. The bird’s eye view from the cable car is a mesmerizing experience.</li>
                                <li>After sightseeing return to Srinagar Hotel. Enjoy your dinner & lovely stay at Srinagar hotel / Houseboat.</li>
                            </ul>

                        </div>


                        <h5>DAY 5</h5>
                        <div class="d-md-flex mt-1 mb-12">

                            <ul>
                                <li>Today on time you get transferred to the Srinagar airport for your onward journey.</li>


                            </ul>

                        </div>
                        <!-- 
                        <h5>Inclusion</h5>
                        <p>Accommodation Breakfast & Dinner All Transfers & Sightseeing by Private vehicle. Day trip to Pahalgam. Day trip to Gulmarg. Sightseeing of Mughal Gardens. Shikara ride on Dal Lake for 01 Hours. Pick up & Drop at Srinagar Airport. Above rates are subject to availability</p>

                        <h5>Exclusion</h5>
                        <p>Air tickets/Train tickets. Pony Ride/ Sledging (it is done by Bargaining) Tips to waiters/drivers/any other person Monument fees at all places and gardens. Thajwas glacier trip at Sonmarg (as this sightseeing is done by Local Taxi stand at Sonmarg only or by ponies and Is on direct payment basis) Non-Veg item in Houseboat. Any other thing which is not mentioned in inclusions Tour Itinerary can be changed depending upon the availability of Hotels/ Houseboat All personal nature like video camera, tip, table drink, etc and any other.</p> -->
                    </div>
                    <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Take A Tour</h4>
                        <div class="block-16">
                            <figure>
                                <img src="images/destination-5.jpg" alt="Image placeholder" class="img-fluid">
                                <a href="https: //www.youtube.com/watch?v=1XkNhbBeSX8
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
