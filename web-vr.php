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

    <link rel="stylesheet" type="text/css" href="../css/core.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <script src="../js/assets/jquery.js"></script>
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
          <li class="slide">
            <!-- Background-->
            <div class="hero lg vbottom">
              <div style="background-image: url(../images/office/06.jpg);" class="bg faded parallax"></div>
              <div class="container">
                <!-- Content-->
                <div class="content"><span class="label">Updated</span>
                  <h1 class="lg">Web VR Experience </h1>
                </div>
              </div>
            </div>
          </li>
          <!-- Slide-->
          <li class="slide dark">
            <!-- Background-->
            <div class="hero lg vcenter vcenter">
              <div style="background-image: url(../images/office/02.jpg);" class="bg faded parallax"></div>
              <div class="container text-center">
                <!-- Content-->
                <div class="content">
                  <h1>Decoration</h1>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <section>
        <div class="container content">
          <div class="row"> 
            <div class="col-md-12 " id="parent">
              <iframe src="webvr/index.html"> </iframe>
              <button class="btn  btn-outline-dark " id="fullscreen"> Enter Room </button>
            </div>
          </div>
        </div>
        <!-- <div class="container content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              
            </div>
          </div>
        </div> -->
        <div class="container content">
          <div class="row"> 
            <a>
              
              <div class="col-md-4">
              <h4>With VR Device</h4><img alt="" src="../images/05.jpg" class="item"></div>
            </a>
            <a>
              <div class="col-md-4">
              <h4>3D Room </h4><img alt="" src="../images/06.jpg" class="item"></div>
            </a>  
            <a>
              
              <div class="col-md-4">
              <h4>With VR Device</h4><img alt="" src="../images/07.jpg" class="item"></div>
            </a>
          </div>
        </div>
      </section>
      <!-- Footer-->
      <?php include "include/footer.php"?>
    </div>
    <script src="../js/assets/jquery.js"></script>
    <script src="../js/assets/bootstrap.js"></script>
    <script src="../js/assets/imagesloaded.pkgd.min.js"></script>
    <script src="../js/assets/validation.js"></script>
    <script src="../js/assets/masonry.pkgd.min.js"></script>
    <script src="../modules/tera-slider/tera-slider.js"></script>
    <script src="../modules/tera-lightbox/tera-lightbox.js"></script>
    <script src="../js/assets/animsition.js"></script>
    <script src="../js/functions.js"></script>
    <script src="../js/base.js"></script>
  </body>
</html>