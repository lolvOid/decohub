<!DOCTYPE html>
<html>

<head>
  <title>Decohub Floorplan </title>

  <!-- Primary Meta Tags -->
<title>Design Your Room</title>
<meta name="title" content="Design Your Room">
<meta name="description" content="We remove the stress of expensive home furnishing purchases and hassle of returns, while providing a fun tool for anyone interested in interior design.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://hexcreativemm.co/decohub/floorplan/">
<meta property="og:title" content="Design Your Room">
<meta property="og:description" content="We remove the stress of expensive home furnishing purchases and hassle of returns, while providing a fun tool for anyone interested in interior design.">
<meta property="og:image" content="https://i.ibb.co/nCSGvtN/10.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://hexcreativemm.co/decohub/floorplan/">
<meta property="twitter:title" content="Design Your Room">
<meta property="twitter:description" content="We remove the stress of expensive home furnishing purchases and hassle of returns, while providing a fun tool for anyone interested in interior design.">
<meta property="twitter:image" content="https://i.ibb.co/nCSGvtN/10.png">

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/example.css" rel="stylesheet">
  <link href="../css/base.css" rel="stylesheet">

  <link rel="icon" type="image/png" href="../images/favicon.png">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <!-- <link href="css/style.css"  rel="stylesheet">
    -->
  <script src="js/jquery.js"></script>
</head>

<body>



  <!-- Header-->
  <div id="wrapper" class="container-fluid  smooth-transition">
    <div class="row main-row">
      <!-- Left Column -->
      <div class="col-xs-3 col-md-3 col-sm-3  sidebar">
        <!-- Main Navigation -->
        <ul class="nav nav-sidebar">
          <li>

            <div class="container">
              <a class="brand" href="../index.php">
                <img alt="" src="../images/logo-black.png" class="centerimg dark-brand">
              </a>
            </div>
          </li>
          <li id="floorplan_tab"><a href="#">
              Edit Floorplan
              <span class="glyphicon glyphicon-chevron-right pull-right"></span>
            </a></li>
          <li id="design_tab"><a href="#">
              Design
              <span class="glyphicon glyphicon-chevron-right pull-right"></span>
            </a></li>
          <li id="items_tab"><a href="#">
              Add Items
              <span class="glyphicon glyphicon-chevron-right pull-right"></span>
            </a></li>
        </ul>
        <hr />

        <!-- Context Menu -->



        <div id="context-menu">
          <div style="margin: 0 20px">
            <span id="context-menu-name" class="lead"></span>
            <br /><br />
            <button class="btn btn-block btn-danger" id="context-menu-delete">
              <span class="glyphicon glyphicon-trash"></span>
              Delete Item
            </button>
            <br />
            <div class="panel panel-default">
              <div class="panel-heading">Adjust Size</div>
              <div class="panel-body" style="color: #333333">

                <div class="form form-horizontal" class="lead">
                  <div class="form-group">
                    <label class="col-sm-5 control-label">
                      Width
                    </label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="item-width">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-5 control-label">
                      Depth
                    </label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="item-depth">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-5 control-label">
                      Height
                    </label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="item-height">
                    </div>
                  </div>
                </div>
                <small><span class="text-muted">Measurements in inches.</span></small>
              </div>
            </div>

            <label><input type="checkbox" id="fixed" /> Lock in place</label>
            <br /><br />
          </div>
        </div>

        <!-- Floor textures -->
        <div id="floorTexturesDiv" style="display:none; padding: 0 20px">
          <div class="panel panel-default">
            <div class="panel-heading">Adjust Floor</div>
            <div class="panel-body" style="color: #333333">

              <div class="col-sm-6" style="padding: 3px">
                <a href="#" class="thumbnail texture-select-thumbnail" texture-url="rooms/textures/light_fine_wood.jpg"
                  texture-stretch="false" texture-scale="300">
                  <img alt="Thumbnail light fine wood" src="rooms/thumbnails/thumbnail_light_fine_wood.jpg" />
                </a>

              </div>
              <div class="col-sm-6" style="padding: 3px">
                <a href="#" class="thumbnail texture-select-thumbnail" texture-url="rooms/textures/Marble_tiles.jpg"
                  texture-stretch="false" texture-scale="300">
                  <img alt="Thumbnail light fine wood" src="rooms/thumbnails/Marble_tiles.jpg" />
                </a>

              </div>
              <div class="col-sm-6" style="padding: 3px">
                <a href="#" class="thumbnail texture-select-thumbnail" texture-url="rooms/textures/Terrazzo_tiles.jpg"
                  texture-stretch="false" texture-scale="300">
                  <img alt="Thumbnail light fine wood" src="rooms/thumbnails/Terrazzo_tiles.jpg" />
                </a>

              </div>
            </div>
          </div>
        </div>

        <!-- Wall Textures -->
        <div id="wallTextures" style="display:none; padding: 0 20px">
          <div class="panel panel-default">
            <div class="panel-heading">Adjust Wall</div>
            <div class="panel-body" style="color: #333333">
              <div class="col-sm-6" style="padding: 3px">
                <a href="#" class="thumbnail texture-select-thumbnail" texture-url="rooms/textures/marbletiles.jpg"
                  texture-stretch="false" texture-scale="300">
                  <img alt="Thumbnail marbletiles" src="rooms/thumbnails/thumbnail_marbletiles.jpg" />
                </a>
              </div>
              <div class="col-sm-6" style="padding: 3px">
                <a href="#" class="thumbnail texture-select-thumbnail" texture-url="rooms/textures/wallmap_yellow.png"
                  texture-stretch="true" texture-scale="">
                  <img alt="Thumbnail wallmap yellow" src="rooms/thumbnails/thumbnail_wallmap_yellow.png" />
                </a>
              </div>
              <div class="col-sm-6" style="padding: 3px">
                <a href="#" class="thumbnail texture-select-thumbnail" texture-url="rooms/textures/light_brick.jpg"
                  texture-stretch="false" texture-scale="100">
                  <img alt="Thumbnail light brick" src="rooms/thumbnails/thumbnail_light_brick.jpg" />
                </a>
              </div>
              <div class="col-sm-6" style="padding: 3px">
                <a href="#" class="thumbnail texture-select-thumbnail" texture-url="rooms/textures/Wood_planks.jpg"
                  texture-stretch="false" texture-scale="100">
                  <img alt="Thumbnail light brick" src="rooms/thumbnails/Wood_planks.jpg" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-xs-9 col-sm-9 col-md-9 main">

        <!-- 3D Viewer -->
        <div id="viewer">

          <div id="main-controls">
            <div class="container btnfont">
              <a href="#" class="btn  btn-default btn-sm" id="new">
                New Plan
              </a>
              <a href="#" class="btn btn-default btn-sm" id="saveFile">
                Save Plan
              </a>
              <a class="btn  btn-sm btn-default btn-file">
                <input type="file" class="hidden-input" id="loadFile">
                Load Plan
              </a>
            </div>
          </div>

          <div id="camera-controls" class="btnfont">
            <a href="#" class="btn btn-default bottom" id="zoom-out">
              <span class="glyphicon glyphicon-zoom-out"></span>
            </a>
            <a href="#" class="btn btn-default bottom" id="reset-view">
              <span class="glyphicon glyphicon glyphicon-home"></span>
            </a>
            <a href="#" class="btn btn-default bottom" id="zoom-in">
              <span class="glyphicon glyphicon-zoom-in"></span>
            </a>

            <span>&nbsp;</span>

            <a class="btn btn-default bottom" href="#" id="move-left">
              <span class="glyphicon glyphicon-arrow-left"></span>
            </a>
            <span class="btn-group-vertical">
              <a class="btn btn-default" href="#" id="move-up">
                <span class="glyphicon glyphicon-arrow-up"></span>
              </a>
              <a class="btn btn-default" href="#" id="move-down">
                <span class="glyphicon glyphicon-arrow-down"></span>
              </a>
            </span>
            <a class="btn btn-default bottom" href="#" id="move-right">
              <span class="glyphicon glyphicon-arrow-right"></span>
            </a>
          </div>

          <div id="loading-modal">
            <h1>Loading...</h1>
          </div>
        </div>

        <!-- 2D Floorplanner -->
        <div id="floorplanner" class="btnfont">
          <canvas id="floorplanner-canvas"></canvas>
          <div id="floorplanner-controls">

            <button id="move" class="btn btn-sm btn-default">
              <span class="glyphicon glyphicon-move"></span>
              Move Walls
            </button>
            <button id="draw" class="btn btn-sm btn-default">
              <span class="glyphicon glyphicon-pencil"></span>
              Draw Walls
            </button>
            <button id="delete" class="btn btn-sm btn-default">
              <span class="glyphicon glyphicon-remove"></span>
              Delete Walls
            </button>
            <span class="pull-right">
              <button class="btn btn-primary btn-sm" id="update-floorplan">Done &raquo;</button>
            </span>

          </div>
          <div id="draw-walls-hint">
            Press the "Esc" key to stop drawing walls
          </div>
        </div>

        <!-- Add Items -->
        <div id="add-items">
          <div class="row" id="items-wrapper">

            <!-- Items added here by items.js -->
          </div>
        </div>

      </div>
      <!-- End Right Column -->
    </div>
  </div>

  <script src="js/three.min.js"></script>
  <script src="js/floorplan.js"></script>


  <script src="js/bootstrap.js"></script>
  <script src="js/items.js"></script>
  <script src="js/example.js"></script>
  <script src="../js/assets/masonry.pkgd.min.js"></script>
  <script src="../js/assets/animsition.js"></script>
  <script src="../js/functions.js"></script>
</body>

</html>
