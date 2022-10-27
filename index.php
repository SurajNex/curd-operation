<?php include 'function/header.php'; ?>

<!-- banner -->
<section class="banner">
  <div class="container">
    <div class="row banner-grids">
      <div class="col-lg-6 banner-info-w3ls">
        <h2>Enjoy Your Holiday Trip </h2>
        <h3 class="mb-3">Plan Your Holiday Trip Now Exceptional Adventure</h3>
        <p class="mb-4"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. </p>
        <a href="about.html" class="btn">Read More</a>
      </div>
    </div>
  </div>
</section>
<!-- //banner --></div>
<!--/ab --><section class="about py-lg-5 py-md-5 py-5">
  <div class="container">
    <div class="inner-sec-w3pvt py-lg-5 py-3">
      <h3 class="tittle text-center mb-lg-5 mb-3 px-lg-5">Explore The World With Us. </h3>
      <div class="feature-grids row mt-3 mb-lg-5 mb-3 mt-lg-5 text-center">
        <div class="col-lg-4" data-aos="fade-up">
          <div class="bottom-gd px-3">
            <span class="fa fa-bus" aria-hidden="true"></span>
            <h3 class="my-4"> Sit Amet Mattis</h3>
            <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up">
          <div class="bottom-gd2-active px-3">
            <span class="fa fa-car" aria-hidden="true"></span>
            <h3 class="my-4"> Ultricies Velit</h3>
            <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up">
          <div class="bottom-gd px-3">
            <span class="fa fa-rocket" aria-hidden="true"></span>
            <h3 class="my-4">Amet Mattis Quam</h3>
            <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
          </div>
        </div>
      </div>
      <div class="fetured-info pt-lg-5">
        <div class="row fetured-sec mt-lg-5 mt-3">
          <div class="col-lg-6 p-0">
            <div class="img-effect">
              <img src="images/img1.jpg" alt="" class="img-fluid image1">
            </div>
          </div>
          <div class="col-lg-6 serv_bottom feature-grids pl-lg-5">
            <div class="featured-left text-left">
              <div class="bottom-gd px-3">
                <span class="fa fa-plane" aria-hidden="true"></span>
                <h3 class="my-4"> Ultricies Velit</h3>
                <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
              </div>
              <div class="bottom-gd fea active p-4" data-aos="fade-left">
                <span class="fa fa-rocket" aria-hidden="true"></span>
                <h3 class="my-3 ">Mattis Quam</h3>
                <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //services -->
</section>
<!-- //ab -->
<!--/counter-->
<section class="stats py-lg-5">
  <div class="container py-5">
    <div class="row text-center">
      <div class="col-md-3 col-sm-6">
        <div class="counter">
          <span class="fa fa-briefcase"></span>
          <h3 class="timer count-title count-number">12</h3>
          <p class="count-text">Years Of Experience</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="counter">
          <span class="fa fa-user"></span>
          <h3 class="timer count-title count-number">120</h3>
          <p class="count-text">Our Agents</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="counter">
          <span class="fa fa-smile-o"></span>
          <h3 class="timer count-title count-number">1280</h3>
          <p class="count-text">Happy Customers</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="counter">
          <span class="fa fa-users"></span>
          <h3 class="timer count-title count-number">10200</h3>
          <p class="count-text">Clients</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--//counter-->
<!--//team -->
<section class="banner-bottom py-lg-5 py-4">
  <div class="container">
    <div class="inner-sec-w3pvt speak">
      <h3 class="tittle  text-center my-lg-5 my-3">Our Travel Agents</h3>
      <div class="row mt-lg-5 mt-4">
        <?php 
            include './function/config.php';
          $sql = "SELECT * FROM agent limit 6";
          $query = mysqli_query($conn,$sql);
          $data = mysqli_num_rows($query);
          if($data > 0){
              while($row = mysqli_fetch_assoc($query)){
            ?>              
        <div class="col-md-4 team-gd text-center">
          <div class="team-img mb-4">
            <img src="<?php echo "admin/upload/". $row['img'];?>" class="img-fluid" alt="user-image">
          </div>
          <div class="team-info">
            <h3 class="mt-md-4 mt-3">
              <span class="sub-tittle-team">Agent</span> <?php echo $row['name'];?>
            </h3>
            <p><?php echo $row['bio'];?></p>
            <ul class="top-right-info text-center mt-md-4 mt-3">
              <li class="mr-1">
                <a href="<?php echo $row['fburl'];?>">
                  <span class="fa fa-facebook-f"></span>
                </a>
              </li>
              <li>
                <a href="<?php echo $row['twurl'];?>">
                  <span class="fa fa-twitter"></span>
                </a>
              </li>
              <li class="mx-1">
                <a href="<?php echo $row['url'];?>">
                  <span class="fa fa-google-plus"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <?php
        }
      }
    ?>
      </div>
    </div>
  </div>
</section>
<!--//team -->
<!-- portfolio -->
<section class="portfolio-flyer py-5" id="gallery">
  <div class="container pt-lg-3 pb-md-5">
    <h3 class="tittle  text-center my-lg-5 my-3">Our Recent Tours</h3>
    <div class="row news-grids pb-lg-5 mt-3 mt-lg-5">
      <?php  
        include 'function/config.php';
        $sql = "SELECT * FROM tours limit 6";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_num_rows($query);
        if($data > 0){
            while($row = mysqli_fetch_assoc($query)){
        ?>      
      <div class="col-lg-4 gal-img">
        <div class="gal-info">
          <a href="#gal1">
          <img src="<?php echo "admin/upload/". $row['img'];?>" class="img-fluid" alt="user-image">
          </a>
          <div class="property-info-list">
            <div class="detail">
              <h4 class="title">
                <a href="about.php"><?php echo $row['place']; ?></a>
              </h4>
              <div class="location mt-2">
                <a href="about.html">
                  <span class="fa fa-map-marker"></span><?php echo $row['location'];?></a>
              </div>
              <ul class="facilities-list clearfix">
                <li>
                  <span class="fa fa-clock-o"></span> <?php echo $row['day'];?>
                </li>
                <li>
                  <span class="fa fa-clock-o"></span> <?php echo $row['night'];?>
                </li>
              </ul>
            </div>
            <div class="footer-properties">
              <a class="admin" href="#">
                <span class="fa fa-user"></span> <?php echo $row['des'];?> </a>
              <span class="year text-right">
                <span class="fa fa-calendar"></span> <?php echo $row['month'];?> </span>
            </div>
          </div>
        </div>
      </div>
      <?php 
          }
        }
      ?>
    </div>
  </div>
</section>
<!-- //portfolio -->
<!-- popup-->
<div id="gal1" class="pop-overlay animate">
  <div class="popup">
    <img src="images/1.jpg" alt="Popup Image" class="img-fluid" />
    <a class="close" href="#gallery">&times;</a>
  </div>
</div>
<!-- //popup -->
<!-- popup-->
<div id="gal2" class="pop-overlay animate">
  <div class="popup">
    <img src="images/2.jpg" alt="Popup Image" class="img-fluid" />
    <a class="close" href="#gallery">&times;</a>
  </div>
</div>
<!-- //popup -->
<!-- popup-->
<div id="gal3" class="pop-overlay animate">
  <div class="popup">
    <img src="images/3.jpg" alt="Popup Image" class="img-fluid" />
    <a class="close" href="#gallery">&times;</a>
  </div>
</div>
<!-- //popup3 -->
<!-- popup-->
<div id="gal4" class="pop-overlay animate">
  <div class="popup">
    <img src="images/4.jpg" alt="Popup Image" class="img-fluid" />
    <a class="close" href="#gallery">&times;</a>
  </div>
</div>
<!-- //popup -->
<!-- popup-->
<div id="gal5" class="pop-overlay animate">
  <div class="popup">
    <img src="images/5.jpg" alt="Popup Image" class="img-fluid" />
    <a class="close" href="#gallery">&times;</a>
  </div>
</div>
<!-- //popup -->
<!-- popup-->
<div id="gal6" class="pop-overlay animate">
  <div class="popup">
    <img src="images/6.jpg" alt="Popup Image" class="img-fluid" />
    <a class="close" href="#gallery">&times;</a>
  </div>
</div>
<!-- //popup -->
<!--//portfolio-->
<!-- /hand-crafted -->
<section class="hand-crafted py-5">
  <div class="container py-lg-5">
    <div class="row accord-info">
      <div class="col-lg-6 pl-md-5">
        <h3 class="mb-md-5 tittle">Plan Your Holiday Trip Now Exceptional Adventure</h3>
        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis.Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
        <p class="mt-3">Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.
        <p>
      </div>
      <div class="col-lg-6 banner-image">
        <div class="img-effect">
          <img src="images/img3.jpg" alt="" class="img-fluid image1">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //hand-crafted -->
<!-- testimonials -->
<div class="testimonials py-md-5 py-5">
  <div class="container py-xl-5 py-lg-3">
    <h3 class="tittle  text-center mb-lg-5 mb-3">Our Clients Say</h3>
    <div class="testimonials_grid_w3ls mt-lg-0 mt-4">
      <div class="p-md-5 p-4">
        <p class="sub-test">
          <span class="fa fa-quote-left" aria-hidden="true"></span> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.Integer sit amet mattis quam, sit amet ultricies velit.
        </p>
        <div class="row mt-4">
          <div class="col-3 testi-img-res">
            <img src="images/te2.jpg" alt="" class="img-fluid" />
          </div>
          <div class="col-9 testi_grid mt-xl-3 mt-lg-2 mt-md-4 mt-2">
            <h5 class="mb-2">Soluta Nobis</h5>
            <p>Libero Tempore</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- //testimonials -->
<?php include 'function/footer.php'; ?>