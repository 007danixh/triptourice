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
  
<?php
include './layouts/contact-form.php'
?>
</section>


<?php
include './layouts/footer.php';
?>
