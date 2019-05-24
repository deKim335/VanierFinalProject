<?php
session_start();
require("config.php");
//require("utils.php");
include("header.php");

?>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Fresh Foods</span>
            <span class="section-heading-lower">EAT FRESH</span>
          </h2>
          <p class="mb-3">Every ingredient of our quality foods starts with locally sourced, hand picked ingredients. Our healthy foods will help your kids stay healthy and happy - we guarantee it!
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="contactus.php">Visit Us Today!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Our Promise</span>
              <span class="section-heading-lower">To You</span>
            </h2>
            <p class="mb-0">Our ethos is simple – to help children and young people to make healthier food choices by making healthy food available in schools. Our hard working team are fully committed to providing food that is tasty and healthy. Our mission is to get junk food out of Irish schools and revolutionise the school food environment.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
    include("footer.php");
?>
