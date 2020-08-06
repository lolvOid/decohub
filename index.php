<!DOCTYPE html>
<html>
  <head>
    <title>DecoHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <!-- Primary Meta Tags -->
    <title>Try DecoHub to Design Your Dream Room</title>
    <meta name="title" content="Try DecoHub to Design Your Dream Room">
    <meta name="description" content="3D Visualization website for interior Design featuring Web VR, 3D Floor Plan and Image Processing.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://decohubke.herokuapp.com/">
    <meta property="og:title" content="Try DecoHub to Design Your Dream Room">
    <meta property="og:description" content="3D Visualization website for interior Design featuring Web VR, 3D Floor Plan and Image Processing.">
    <meta property="og:image" content="images/thumbs/image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://decohubke.herokuapp.com/">
    <meta property="twitter:title" content="Try DecoHub to Design Your Dream Room">
    <meta property="twitter:description" content="3D Visualization website for interior Design featuring Web VR, 3D Floor Plan and Image Processing.">
    <meta property="twitter:image" content="images/thumbs/image.jpg">
    
    <link rel="stylesheet" type="text/css" href="css/core.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <script src="js/assets/jquery.js"></script>
  </head>
  <body>
    <div class="body-overlay"></div>
   <?php include "include/menu.php"?>
    <!-- Wrapper-->
    <div id="wrapper" class="container-fluid smooth-transition">
      <!-- Header-->
      <?php include "include/header.php"?>
      <!-- Hero & Tera Slider-->
      <section class="slider">
        <ul class="slides">
          <!-- Slide-->
          <li class="slide dark">
            <!-- Background-->
            <div class="hero fs">
              <div style="background-image: url(images/office/03.jpg);" class="bg parallax"></div>
              <div class="container text-center offset-top">
                <!-- Content-->
                <div class="content">
                  <h1 class="lg">Design Your Room</h1>
                </div>
              </div>
            </div>
          </li>
          <!-- Slide-->
          <li class="slide dark">
            <!-- Background-->
            <div class="hero fs vcenter">
              <div style="background-image: url(images/office/01.jpg);" class="bg faded parallax"></div>
              <div class="container text-center">
                <!-- Content-->
                <div class="content">
                  <h1 class="lg">Make Creative</h1>
                  <h3>We are here to help.</h3>
                </div>
              </div>
            </div>
          </li>
          <!-- Slide-->
          <li class="slide dark">
            <!-- Background-->
            <div class="hero fs vbottom">
              <div style="background-image: url(images/office/02.jpg);" class="bg faded-subtle parallax"></div>
              <div class="container text-center">
                <!-- Content-->
                <div class="content">
                  <h1 class="lg">Look and Feel</h1>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <section>
        <div class="container content">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="title-block">
                <h3>What is DecoHub?</h3>
                <h5>Decorate Your Own Room</h5>
              </div>
              <p>3D Visualization website for interior Design featuring Web VR, 3D Floor Plan and Image Processing.</p>
              <div class="row text-center">
                <h2>Download Presentation</h2>
                <a href="presentation/DECOHUB.pptx" id="download"><i class="fa fa-download"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="top-line">
        <div class="container content text-center">
          <div class="row">
            <div class="col-md-3 service">
              <div class="icon ion-lightbulb item"></div>
              <h4>Concept</h4>
              <p>We bring ideas to live.</p>
            </div>
            <div class="col-md-3 service">
              <div class="icon ion-camera item"></div>
              <h4>Image Processing</h4>
              <p>We bring new design of the room</p>
            </div>
            <div class="col-md-3 service">
              <div class="icon ion-monitor"></div>
              <h4>Design</h4>
              <p>3D Design of your room.</p>
            </div>
            <div class="col-md-3 service">
              <div class="icon ion-code"></div>
              <h4>Technology</h4>
              <p>We use Three-Js, Open CV</p>
            </div>
          </div>
        </div>
      </section>
    
      <section>
        <div class="container">
          <div class="intro">
            <h3>Process</h3>
          </div>
          <!-- Portfolio grid-->
          <div class="grid">
            <!-- Portfolio item-->
            <div class="grid-sizer"></div><a href="#" class="grid-item">
              <div style="background-image: url(images/thumbs/07.png)" class="thumb"></div>
              <div class="caption">
                <div class="type">Upload Room</div>
                <div class="description">
                  <h4>New Room</h4>
                  <p>We bring ideas to live.</p>
                </div>
              </div></a>
            <!-- Portfolio item--><a href="#" class="grid-item">
              <div style="background-image: url(images/thumbs/02.png)" class="thumb"></div>
              <div class="caption">
                <div class="type">Analyse</div>
                <div class="description">
                  <h4>Scanning</h4>
                  <p>We bring ideas to live.</p>
                </div>
              </div></a>

               <!-- Portfolio item--><a href="#" class="grid-item">
                <div style="background-image: url(images/thumbs/01.png)" class="thumb"></div>
                <div class="caption">
                  <div class="type">Design + Art Direction</div>
                  <div class="description">
                    <h4>Paint</h4>
                    <p>We bring ideas to live.</p>
                  </div>
                </div></a>
          
          </div>
        </div>
      </section>
      <!-- Footer-->
     <?php include "include/footer.php"?>
    </div>
    <script src="js/assets/bootstrap.js"></script>
    <script src="js/assets/imagesloaded.pkgd.min.js"></script>
    <script src="js/assets/validation.js"></script>
    <script src="js/assets/masonry.pkgd.min.js"></script>
    <script src="modules/tera-slider/tera-slider.js"></script>
    <script src="modules/tera-lightbox/tera-lightbox.js"></script>
    <script src="js/assets/animsition.js"></script>
    <script src="js/functions.js"></script>
  </body>
</html>