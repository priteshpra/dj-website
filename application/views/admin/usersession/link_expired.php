<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 2.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Page Expired | PettsClub</title>

  <!-- Favicons-->
  <link rel="icon" href="<?php echo $this->config->item('admin_assets'); ?>images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?php echo $this->config->item('admin_assets'); ?>images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="<?php echo $this->config->item('admin_assets'); ?>images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="<?php echo $this->config->item('admin_assets'); ?>css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo $this->config->item('admin_assets'); ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?php echo $this->config->item('admin_assets'); ?>css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- CSS for full screen (Layout-2)-->    
  <link href="<?php echo $this->config->item('admin_assets'); ?>css/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo $this->config->item('admin_assets'); ?>css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo $this->config->item('admin_assets'); ?>css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo $this->config->item('admin_assets'); ?>js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="error-page">

    <div class="row">
      <div class="col s12">
        <div class="browser-window">
          <div class="top-bar">
            <div class="circles">
              <div id="close-circle" class="circle"></div>
              <div id="minimize-circle" class="circle"></div>
              <div id="maximize-circle" class="circle"></div>
            </div>
          </div>
          <div class="content">
            <div class="row">
              <div id="site-layout-example-right" class="col s12 m12 l12">
                <div class="row center">
                    <br><br>
                  <h3 class="text-long-shadow col s12">Page Expired</h3>
                </div>
                <div class="row center">
                    <br>
                  <p class="center white-text col s12">It seems that this page is no more accessible.</p>
                  
                  <a class="btn waves-effect waves-light login_button" onclick="goBack()">Back</a>
                    <p>
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?php echo $this->config->item('admin_assets'); ?>js/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?php echo $this->config->item('admin_assets'); ?>js/materialize.js"></script>
  <!--prism-->
  <script type="text/javascript" src="<?php echo $this->config->item('admin_assets'); ?>js/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?php echo $this->config->item('admin_assets'); ?>js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="<?php echo $this->config->item('admin_assets'); ?>js/plugins.js"></script>
  
  <script type="text/javascript">
    function goBack() {
      window.history.back();
    }
  </script>
</body>

</html>