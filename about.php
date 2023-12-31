<?php
include './layouts/app.php';
?>

<?php
include './layouts/header.php';

?>
<!-- END nav -->

<div class="hero-wrap js-fullheight customHero" style="background-image: url('images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row d-md-flex">
      <div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/about.jpg);">
      </div>
      <div class="col-md-6 ftco-animate p-md-5">
        <div class="row">
          <div class="col-md-12 nav-link-wrap mb-5">
            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a>

              <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

              <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
            </div>
          </div>
          <div class="col-md-12 d-flex align-items-center">

            <div class="tab-content ftco-animate" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                <div>
                  <h2 class="mb-4">Exquisite Tour & Travel</h2>
                  <p>Our tour and travel company specializes in creating customized travel experiences for our clients. From solo travelers to groups, families to honeymooners.</p>
                  <p>we cater to all types of travelers and offer a range of travel services, including transportation, accommodation, tours and activities, and more. Our team of travel experts is dedicated to providing personalized service and creating unforgettable travel memories for our clients.</p>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                <div>
                  <h2 class="mb-4">Best Travel Experience</h2>
                  <p>At our tour and travel company, our mission is to provide our clients with exceptional travel experiences that exceed their expectations. We strive to create customized travel packages that cater to the unique needs and interests of our clients, while offering top-notch service and support throughout the journey.</p>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p> -->
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                <div>
                  <h2 class="mb-4">Clients Satisfaction</h2>
                  <p>Our goal is to become a leading tour and travel company that is known for its exceptional service, expertise, and commitment to customer satisfaction. We aim to continuously improve and innovate our services, while staying true to our core values of integrity, reliability, and personalized attention. Our ultimate goal is to create memorable and meaningful travel experiences for our clients that inspire them to explore the world and create lifelong memories.</p>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-start mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
        <span class="subheading">FAQS</span>
        <h2 class="mb-4"><strong>Frequently</strong> Ask Question</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div id="accordion">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#menuone" aria-expanded="true" aria-controls="menuone">When she reached the first hills? <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                </div>
                <div id="menuone" class="collapse show">
                  <div class="card-body">
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#menutwo" aria-expanded="false" aria-controls="menutwo">Italic Mountains, she had a last <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                </div>
                <div id="menutwo" class="collapse">
                  <div class="card-body">
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#menu3" aria-expanded="false" aria-controls="menu3"> Bookmarksgrove, the headline? <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                </div>
                <div id="menu3" class="collapse">
                  <div class="card-body">
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#menu4" aria-expanded="false" aria-controls="menu4">Alphabet Village and the subline of her own? <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                </div>
                <div id="menu4" class="collapse">
                  <div class="card-body">
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#menu5" aria-expanded="false" aria-controls="menu5">Then she continued her way? <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                </div>
                <div id="menu5" class="collapse">
                  <div class="card-body">
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#menu6" aria-expanded="false" aria-controls="menu6">Skyline of her hometown Bookmarksgrove? <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                </div>
                <div id="menu6" class="collapse">
                  <div class="card-body">
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </div>
                </div>
              </div>
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
