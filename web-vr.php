<!DOCTYPE html>
<html>

<head>
  <title>DecoHub</title>
<!-- Primary Meta Tags -->
<title>DecoHub by HEX Creative</title>
<meta name="title" content="DecoHub by HEX Creative">
<meta name="description" content="WebXR Experience">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://hexcreativemm.co/decohub/web-vr">
<meta property="og:title" content="DecoHub by HEX Creative">
<meta property="og:description" content="WebXR Experience">
<meta property="og:image" content="https://i.ibb.co/VxkPbS0/07.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://hexcreativemm.co/decohub/web-vr">
<meta property="twitter:title" content="DecoHub by HEX Creative">
<meta property="twitter:description" content="WebXR Experience">
<meta property="twitter:image" content="https://i.ibb.co/VxkPbS0/07.jpg">

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
          <div class="hero lg vbottom">
            <div style="background-image: url(images/office/vr.jpg);" class="bg faded parallax"></div>
            <div class="container text-right">
              <!-- Content-->
              <div class="content">
                <h1 style="color:white;" class="lg">WebXR Experience </h1>
              </div>
            </div>
          </div>
        </li>
        <!-- Slide-->
        <li class="slide dark">
          <!-- Background-->
          <div class="hero lg vcenter vcenter">
            <div style="background-image: url(images/office/02.jpg);" class="bg faded parallax"></div>
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
          <div class="col-md-8 col-md-offset-2">
            <div class="title-block">
              <h3>WebXR</h3>

            </div>
            <p>An XR device is a physical unit of hardware that can present imagery to the user. On desktop clients,
              this is usually a headset peripheral. On mobile clients, it may represent the mobile device itself in
              conjunction with a viewer harness. It may also represent devices without stereo-presentation capabilities
              but with more advanced tracking. </p>
          </div>
        </div>
      </div>

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
      <div class="container content">
        <div class="row">
          <a>

            <div class="col-md-4">
              <h4>With XR Device</h4><img alt="" src="images/05.jpg" class="item">
            </div>
          </a>
          <a>
            <div class="col-md-4">
              <h4>3D Room </h4><img alt="" src="images/06.jpg" class="item">
            </div>
          </a>
          <a>

            <div class="col-md-4">
              <h4>With XR Device</h4><img alt="" src="images/07.jpg" class="item">
            </div>
          </a>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <?php include "include/footer.php"?>
  </div>
  <script src="js/assets/jquery.js"></script>
  <script src="js/assets/bootstrap.js"></script>
  <script src="js/assets/imagesloaded.pkgd.min.js"></script>
  <script src="js/assets/validation.js"></script>
  <script src="js/assets/masonry.pkgd.min.js"></script>
  <script src="modules/tera-slider/tera-slider.js"></script>
  <script src="modules/tera-lightbox/tera-lightbox.js"></script>
  <script src="js/assets/animsition.js"></script>
  <script src="js/functions.js"></script>
  <script src="js/base.js"></script>
</body>

</html>
