<?php
include './layouts/app.php';
?>

<?php
include './layouts/header.php';

?>
<!-- END nav -->

<?php

include './layouts/message.php';
?>

<div class="hero-wrap js-fullheight customHero" style="background-image: url('images/bg_4.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section ftco-degree-bg">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h4">Contact Information</h2>
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
        <p><span>Website:</span> <a href="#">neversleepskashmir.com</a></p>
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

<?php
include './layouts/footer.php';
?>

