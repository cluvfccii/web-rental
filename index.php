<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>rental mobil</title>

  <!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

<!-- Feather icons -->
<script src="https://unpkg.com/feather-icons"></script>

<!-- my style -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>
   <!-- Navbar start -->
   <nav class="navbar">
    <a href="#" class="navbar-logo">rental mobil<span>_Cici</span>.</a>
    
          <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#menu">Our Time</a>
      <a href="datamobil.html">Data mobil</a></a>
      <a href="datakostumer.html">Data kostumer</a>
      <a href="#contact">Contact</a>
      <?php
      
      if (isset($_SESSION['username'])) {
         
          echo '<a href="logout.php"><i data-feather="log-out"></i> Logout</a>';
      } else {
          
          echo '<a href="login.php"><i data-feather="log-in"></i> Login</a>';
      }
      ?>
    </div>
    
    <div class="navbar-extra">
<a href="#" id="search"><i data-feather="search"></i></a>
<a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
<a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
  </div>
  
      </nav>
  <!-- Navbar end -->
  
  <!-- Hero section start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>Welcome to rental<span>mobil</span>
      </h1>
      <p>lorem ipsum dolor sit amet consectetur adipisicing elit.Accusantium, enim.</p>
      <a href="#" class="cta">sewa Sekarang</a>
    </main>
  </section>
      <!-- Hero section end -->

       <!-- about section start -->
       <section id="about" class="about">
        <h2><span>about</span> us</h2>
        <div class="row">
        <div class="about-img">
        <img src="./img/a4.jpg" width=300 height=400>
        </div>
        <div class="content">
          <h3>Mengapa memilih kami?</h3>
          <p>lorem ipsum dolor sit amet consectetur adipisicing elit.Accusantium, enim.</p>
          <p>lorem ipsum dolor sit amet consectetur adipisicing elit.Accusantium, enim.</p>
        </div>
      </section>
      <!-- about section end -->
       
      <!-- menu section star -->
      <section id="menu" class="menu">
        <h2><span>Our</span> time</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium fugiat ex necessitatibus.</p>
        <br>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="img/d2.jpg" alt="Bmw M4" style="width:100%">
            <div class="container">
              <h2>Jane Doe</h2>
              <p class="title">CEO & Founder</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>jane@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="img/a1.jpg" alt="Mike" style="width:100%">
            <div class="container">
              <h2>Mike Ross</h2>
              <p class="title">Art Director</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>mike@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="img/a2.jpg" alt="John" style="width:100%">
            <div class="container">
              <h2>John Doe</h2>
              <p class="title">Designer</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>john@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      </div>
      <!-- menu section end -->

      <!-- contact us start -->
      <section id="contact" class="contact">
        <h2><span>contact</span> us</h2>
          <tr>
            <div class="contact_us_6">
              <div class="responsive-container-block container">
                <form class="form-box">
                  <div class="container-block form-wrapper">
                    <div class="mob-text">
                      <p class="text-blk contactus-head">
                        Get in Touch
                      </p>
                      <p class="text-blk contactus-subhead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis diam lectus sapien.
                      </p>
                    </div>
                    <div class="responsive-container-block" id="i2cbk">
                      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
                        <p class="text-blk input-title">
                          FIRST NAME
                        </p>
                        <input class="input" id="ijowk-3" name="FirstName" placeholder="Please enter first name...">
                      </div>
                      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
                        <p class="text-blk input-title">
                          EMAIL
                        </p>
                        <input class="input" id="ipmgh-3" name="Email" placeholder="Please enter email...">
                      </div>
                      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ih9wi">
                        <p class="text-blk input-title">
                          PHONE NUMBER
                        </p>
                        <input class="input" id="imgis-3" name="PhoneNumber" placeholder="Please enter phone number...">
                      </div>
                      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
                        <p class="text-blk input-title">
                          WHAT DO YOU HAVE IN MIND ?
                        </p>
                        <textarea class="textinput" id="i5vyy-3" placeholder="Please enter query..."></textarea>
                      </div>
                    </div>
                    <button class="submit-btn" id="w-c-s-bgc_p-1-dm-id-2">
                      Submit
                    </button>
                  </div>
                </form>
                <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
                  <div class="map-part">
                    <p class="text-blk map-contactus-head" id="w-c-s-fc_p-1-dm-id">
                      Reach us at
                    </p>
                    <p class="text-blk map-contactus-subhead">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis diam lectus sapien.
                    </p>
                    <div class="social-media-links mob">
                      <a class="social-icon-link" href="#" id="ix94i-2-2">
                        <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-twitter.png">
                      </a>
                      <a class="social-icon-link" href="#" id="itixd">
                        <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-facebook.png">
                      </a>
                      <a class="social-icon-link" href="#" id="izxvt">
                        <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-google.png">
                      </a>
                      <a class="social-icon-link" href="#" id="izldf-2-2">
                        <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-instagram.png">
                      </a>
                    </div>
                    <div class="map-box container-block">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </tr>
        </section>
        <!-- contact us end -->
</body>
</html>