<!DOCTYPE html>
<?php include_once "upload_image.php" ?>
<?php include_once "get_images_by_id.php" ?>
<html>
  <head>
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
        
  <title>DecoHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Cache-Control" content="private, no-store" />
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/core.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <script src="../js/assets/jquery.js"></script>
   
  </head>
  <body>
    <div class="body-overlay"></div>
    <?php include"include/menu.php"?>
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
              <div style="background-image: url(../images/office/05.jpg);" class="bg faded parallax"></div>
              <div class="container">
                <!-- Content-->
                <div class="content"><span class="label">Updated</span>
                  <h1 class="lg">Room Recognize and Decorate </h1>
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
                  <h1>Feel Virtual Paint</h1>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <section>
        <div class="container content">
          <div class="row"> 
            <div class="col-md-12">
              <div class="slider">
                <ul class="slides">
                  <!-- Slide-->
                  <li class="slide"><img alt="" src=
                  "<?php if(isset($result->result)){ echo $server . $result->result;} else{ echo '../images/02.jpg'; } ?>" 
                  class="item"></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="container content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <form action="#" method='post' enctype="multipart/form-data">
                
                <div class="image-upload">
                    <label for="file-input">
                        <img src="images/ui/upload.png" data-toggle="tooltip" data-placement="right" title="Upload Your Image">
                        <h4>Upload Image</h4> 
                    </label>
                    <input type="hidden" id="color" name="color" value="rgb(65,72,88)">
                    <input id="file-input" name='file' type="file"/>
                    
                </div>
              
              <button class="btn btn-lg btn-default m-5">Submit</button>           
              <!-- Show Color Pad After Uploading Image -->
        <!-- <div class="container content text-center "> -->
              <?php 
                if(isset($result->id)){ 
                  
                ?>
                <div class="row"> 
                      <h4>Select Wall Color</h4>
                      <div class="color-picker block-center">
                        <ul class="color-list">
                          <?php $color_list = [
                            "rgb(65,72,88)",
                            "rgb(172,180,193)",
                            "rgb(195,196,201)",
                            "rgb(212,212,210)",
                            "rgb(177,170,144)",
                            "rgb(156,141,148)",
                            "rgb(207,187,180)",
                            "rgb(230,204,130)",
                            "rgb(107,20,36)",
                          ]; 
                          
                          foreach($color_list as $color){
                            $route = "/change_color.php?id=" . $result->id . "&color=" . $color;

                            echo '<a href="' . $route . '">';
                            echo '<li class="color" data-color="' . $color . '"></li>';
                            echo '</a>';
                          }
                          
                          
                          ?>
                          
                          <!-- <a href="<?php echo "/change_color.php?id=" . $result->id . "&color=rgb(65,72,88)"; ?>" >
                          <li class="color" data-color="rgb(172,180,193)"></li>
                          </a> -->
                          <!-- <li class="color" data-color="rgb(195,196,201)"></li>
                          <li class="color" data-color="rgb(212,212,210)"></li>
                          <li class="color" data-color="rgb(177,170,144)"></li>
                          <li class="color" data-color="rgb(156,141,148)"></li>
                          <li class="color" data-color="rgb(207,187,180)"></li>
                          <li class="color" data-color="rgb(230,204,130)"></li>
                          <li class="color" data-color="rgb(107,20,36)"></li> -->
                        </ul>
                      </div>  
                </div>
                  <?php
                  } ?>              
              <!-- </div> -->
              </form>
            </div>
          </div>
        </div>
        
        
        <div class="container content">
          <div class="row"> 
            <div class="col-md-3"><img alt="" src=
            "<?php if(isset($result->original)){ echo $server . $result->original;} else{ echo '../images/05.jpg'; } ?>" 
              class="item" data-toggle="tooltip" data-placement="right" title="Original Photo"><h4>Original Photo</h4></div>

            <div class="col-md-3"><img alt="" src=
            "<?php if(isset($result->canny)){ echo $server . $result->canny;} else{ echo '../images/06.jpg'; } ?>" 
            class="item" data-toggle="tooltip" data-placement="right" title="Canny Edge"><h4>Canny Edge</h4></div>

            <div class="col-md-3"><img alt="" src=
            "<?php if(isset($result->dilate)){ echo $server . $result->dilate;} else{ echo '../images/07.jpg'; } ?>" 
            class="item" data-toggle="tooltip" data-placement="right" title="Flood Fill"><h4>Flood Fill</h4></div>

            <div class="col-md-3"><img alt="" src=
            "<?php if(isset($result->result)){ echo $server . $result->result;} else{ echo '../images/08.jpg'; } ?>" 
            class="item" data-toggle="tooltip" data-placement="right" title="Result"><h4>Result</h4></div>

          </div>
        </div>
      </section>
      <!-- Footer-->
      <?php include "include/footer.php"?>
    </div>
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