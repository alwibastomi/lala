 
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
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
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- User profile -->

    <div class="user-profile" style="background: url('<?= site_url('images/profile-bg.jpg'); ?>') no-repeat;">
      <!-- User profile image -->
      <a href="<?= site_url('user/user_profile/'.$id_petugas); ?>">
        <div class="profile-img" > 
          <?php if($id_petugas !== "guest"){ ?>

            <img src="<?= site_url('images/profile/'.$photo); ?>" alt="..." width="100%">  
          <?php }else{ ?>
           <img src="<?= site_url('images/profile/'.$photo); ?>" alt="...">
         <?php } ?>

       </div></a>
       <!-- User profile text-->
       <div class="profile-text" style="background-color: #35353585; color: #efeaea"> <b><center><?= $nama_lengkap; ?></center></b>
       </div>
     </div>
     <!-- End User profile text-->
     <!-- Sidebar navigation-->
     <nav class="sidebar-nav">
      <ul id="sidebarnav">

        <li> <a class="waves-effect waves-dark lala" href="<?= site_url('admin/home'); ?>" aria-expanded="false"><i class="mdi mdi-home"></i> <span class="hide-menu"> HOME</span> </a></li>

        <li> <a class="waves-effect waves-dark lala" href="<?= site_url('Arsip'); ?>" aria-expanded="false"><i class="mdi mdi-file"></i>  <span class="hide-menu">Arsip</span></a></li>

        <li> <a class="waves-effect waves-dark lala" href="<?= site_url('Arsip/listPeminjaman'); ?>" aria-expanded="false"><i class="mdi mdi-file"></i>  <span class="hide-menu">Daftar Pinjam</span></a></li>

        <li class="nav-devider"></li>

        <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu"> Master</span></a>
          <ul aria-expanded="false" class="collapse">
            <li><a href="<?= site_url('User'); ?>">User</a></li>
            <li><a href="<?= site_url('Unit'); ?>">Unit</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
  <!-- Bottom points-->
  <div class="sidebar-footer" style="background-color: #f2f6f8;">
    <!-- item--><a href="<?= site_url('admin/db_backup'); ?>" class="link" data-toggle="tooltip" title="Backup Data"><i class="fa fa-circle-o-notch fa-spin"></i></a>
    <!-- item--><a href="<?= site_url('admin/home'); ?>" class="link" data-toggle="tooltip" title="Home"><i class="mdi mdi-home"></i></a>
    <!-- item--><a href="<?= site_url('admin/logout'); ?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
    <!-- End Bottom points-->
  </aside>
</body>