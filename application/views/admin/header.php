<!-- LICENSE SPAS
Alwi Bastomi & Alfian Jufri
IG alwi.bastomi & al_alfian77
 -->
<body class="fix-header fix-sidebar card-no-border">
    <header class="topbar">
      <?php
      if($photo == null){
        if($gender == 1){
          $photo = "malepp3781.jpg";
      }else if($gender == 2){
          $photo = "femalepp3781.jpg";
      }else{
          $photo = "defusr.jpg";
      }
  }
  ?>
  <nav class="navbar top-navbar navbar-expand-md navbar-light">
    <!-- ============================================================== -->
    <!-- Logo -->
    <!-- ============================================================== -->
    <div class="navbar-header">
        <a class="navbar-brand" href="<?= site_url('admin'); ?>">
            <!-- Logo icon -->
            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
            <!-- Dark Logo icon -->
            <!-- Light Logo icon -->
            <img src="<?php echo site_url('img/favicons/lili.png'); ?>" alt="homepage" class="light-logo" width="130px" height="40px"/>

            <!--End Logo icon -->
            <!-- Logo text --><span>
               <!-- dark Logo text -->
               <img style="margin-top: 0px;" id="big_logo" src="<?= site_url('images/logo_spas.png'); ?>" alt="homepage" width="120" height="40"/> </a>
            <img src="<?php echo site_url('images/SPAS.png'); ?>" alt="homepage" class="dark-logo" width="100px" height="40px">
           </div>
           <!-- ============================================================== -->
           <!-- End Logo -->
           <!-- ============================================================== -->
           <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                        <!-- ============================================================== 
                            <!-- ============================================================== -->
                            <!-- End Messages -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Profile -->
                            <!-- ============================================================== -->

                            <li class="nav-item dropdown">
                                <?php if($id_petugas !== "guest"){ ?>
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= site_url('images/profile/'.$photo); ?>" alt="user" class="profile-pic"></a>
                            <?php }else{ ?>
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= site_url('images/profile/'.$photo); ?>" alt="user" class="profile-pic"></a>
                            <?php } ?>
                            
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                          <?php if($id_petugas !== "guest"){ ?>
                                            <div class="u-img"><img src="<?= site_url('images/profile/'.$photo); ?>" alt="user"></div>
                                            <div class="u-text">
                                                <h5><?= $nama_lengkap; ?></h5>
                                                <p class="text-muted">@ <?= $nick; ?></p><a href="<?= site_url('user/user_profile/'.$id_petugas); ?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                            <?php }else{ ?>
                                                <div class="u-img"><img src="<?= site_url('images/profile/'.$photo); ?>" alt="user"></div>
                                                <div class="u-text">
                                                    <h5>Guest</h5>
                                                <?php } ?>
                                            </div>
                                        </li>
                                            <li role="separator" class="divider"></li>
                                            <li><h6><a href="<?= site_url('admin/db_backup'); ?>"><i class="mdi mdi-file"></i> Backup Data </a></li></h6>
                                            <li role="separator" class="divider"></li>
                                            <li><h6><a href="<?= site_url('admin/logout'); ?>"><i class="mdi mdi-power"></i> Log Out </a></li></h6>
                                    </ul>
                                </div>
                            </li>


                        </ul>
                    </div>
                </nav>
            </header>