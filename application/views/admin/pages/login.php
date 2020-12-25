
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/x-icon" href="<?php echo site_url('img/favicons/lili.png'); ?>"/>
    <title>SPAS</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url('assets2/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- ALERT -->
    <link href="<?php echo site_url('assets/vendors/sweetalert/dist/sweetalert.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets2/css/style.css')?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo site_url('assets2/css/colors/blue.css') ?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

  <?php
      if($alert == "failed"){
        echo "<script>failed_sweet('make sure the nick and password is correct.');</script>";
      }
    ?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar"  style="background-image:url(Login1.jpg);">
  <div id="login" class="login-box card">
    <div class="card-body">
      <form class="floating-labels m-t-40" method="post">
        <a class="text-center db"><img src="<?php echo site_url('images/SPAS.png'); ?>" alt="logo" width="150" height="60" /><br/><img src="<?= site_url('images/logo_cs_spas.png'); ?>" alt="logo" width="180" height="57"  /></a>  <br>
        
        <div class="form-group m-b-40">
          <div class="col-xs-12">
            <input class="form-control" type="text" name="nick" required="" id="input1">
            <span class="bar"></span>
            <label for="input1">Nick</label>
          </div>
        </div>
        <div class="form-group m-b-40">
          <div class="col-xs-12">
            <input class="form-control" type="password" name="password" required="" id="input2">
            <span class="bar"></span>
            <label for="input2">Password</label>
          </div>
        </div>
        <div class="form-group">
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="login" type="submit">Log In</button>
          </div>
        </div>
        <center><p style="margin-top: 250px; text-align: center;">©2018 All Rights Reserved. Dinos!</p></center>
      </form>
    </div>
  </div>
</section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo site_url('assets2/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo site_url('assets2/plugins/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo site_url('assets/vendors/sweetalert/dist/sweetalert.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/custom_alert.js'); ?>"></script>
    
    <script src="<?php echo site_url('assets2/js/jquery.slimscroll.js') ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo site_url('assets2/js/waves.js') ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo site_url('assets2/js/sidebarmenu.js') ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo site_url('assets2/plugins/sticky-kit-master/dist/sticky-kit.min.js') ?>"></script>
    <script src="<?php echo site_url('assets2/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo site_url('assets2/js/custom.min.js') ?>"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo site_url('assets2/plugins/styleswitcher/jQuery.style.switcher.js') ?>"></script>

</body>

</html>