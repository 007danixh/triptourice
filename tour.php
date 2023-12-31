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

<?php
include './layouts/places.php'

?>

<?php
include './layouts/footer.php';
?>
