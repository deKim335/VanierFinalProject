<?php
    session_start();
    include("header.php");
?>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Come On In</span>
                <span class="section-heading-lower">We're Open</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sunday
                  <span class="ml-auto">Closed</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Monday
                  <span class="ml-auto">7:00 AM to 05:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tuesday
                  <span class="ml-auto">7:00 AM to 05:00PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Wednesday
                  <span class="ml-auto">7:00 AM to 05:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Thursday
                  <span class="ml-auto">7:00 AM to 05:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Friday
                  <span class="ml-auto">7:00 AM to 05:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                  <span class="ml-auto">Closed</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>821 Avenue Sainte-Croix, Saint-Laurent</strong>
                  <br>
                  QC H4L 3X9
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Call Anytime</em>
                </small>
                <br>
                (514) 585-5555
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded" >
              <h2 class="section-heading mb-0">
                <span class="section-heading-upper">Healthy Good Meal, Stronger next Generation</span>
                <span class="section-heading-lower">About us</span>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/contactus.jpg" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0">Founded in 2019 our establishment has been serving up health food from the local farmers in various regions of Quebec. We are dedicated finding the best and the most balanced menu for our kids. We guarantee that your child will love it.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <script>
      $('.list-hours li').eq(new Date().getDay()).addClass('today');
    </script>


      <?php
          include("footer.php");
      ?>
