<!DOCTYPE html>
<html>

<head>
  <title>DecoHub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/core.css">
  <link rel="stylesheet" type="text/css" href="../css/base.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link rel="icon" type="image/png" href="../favicon.png?v=2">
  <script src="../js/assets/jquery.js"></script>
</head>

<body class="dark-hero">
  <div class="body-overlay"></div>
  <?php include "include/menu.php" ?>
  <!-- Wrapper-->
  <div id="wrapper" class="container-fluid smooth-transition">
    <!-- Header-->
    <?php include "include/header.php" ?>
    <section class="hero lg vcenter dark">
      <!-- Background-->
      <div style="background-image: url(../images/office/about1.jpg);" class="bg parallax faded-subtle"></div>
      <div class="container text-center">
        <!-- Content-->
        <h1 class="lg">About Us</h1>
      </div>
    </section>
    <section>
      <div class="container content">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h1>We breathe Design</h1>
            <p>We love design, so much we breathe it. We make things for the better. Our team is specialized in both
              visual design and webdevelopment.</p>
          </div>
        </div>
      </div>
      <div data-visible="4" auto-slide class="slider carousel">
        <ul class="slides">
          <li class="slide text-center item vcenter"><img alt="" src="../images/shop/02.jpg" class="thumb"></li>
          <li class="slide text-center item vcenter"><img alt="" src="../images/shop/07.jpg" class="thumb"></li>
          <li class="slide text-center item vcenter"><img alt="" src="../images/shop/04.jpg" class="thumb"></li>
          <li class="slide text-center item vcenter"><img alt="" src="../images/shop/05.jpg" class="thumb"></li>
          <li class="slide text-center item vcenter"><img alt="" src="../images/shop/08.jpg" class="thumb"></li>
          <li class="slide text-center item vcenter"><img alt="" src="../images/shop/09.jpg" class="thumb"></li>
          <li class="slide text-center item vcenter"><img alt="" src="../images/shop/10.jpg" class="thumb"></li>
        </ul>
      </div>

    </section>

    <!-- Footer-->

    <?php include "include/footer.php" ?>
  </div>
  <script src="../js/assets/bootstrap.js"></script>
  <script src="../js/assets/imagesloaded.pkgd.min.js"></script>
  <script src="../js/assets/validation.js"></script>
  <script src="../js/assets/masonry.pkgd.min.js"></script>
  <script src="../modules/tera-slider/tera-slider.js"></script>
  <script src="../modules/tera-lightbox/tera-lightbox.js"></script>
  <script src="../js/assets/animsition.js"></script>
  <script src="../js/functions.js"></script>
</body>

</html>