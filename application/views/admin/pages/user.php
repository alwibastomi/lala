<div class="page-wrapper">
  <div class="container-fluid" role="main">

    <div class="row page-titles">
      <h3>User</h3>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>User List</h2>
            <ul class="nav navbar-right panel_toolbox">
              <a href="<?= site_url('user/user_excel'); ?>" class="btn btn-outline-success waves-effect waves-light">Export <i class="fa fa-fw fa-file-excel-o"></i></a>
              <?php if ($level == "1") { ?>
                <a href="<?= site_url('user/user_add'); ?>" class="btn btn-outline-primary waves-effect waves-light">Add <i class="fa fa-fw fa-plus"></i></a>
              <?php } ?>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>
            <div class="table-responsive">
              <table class="table table-striped datatable-ku" data-func="user" data-meth="user_datatable">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Nama Lengkap</th>
                    <th>Kelamin</th>
                    <th>Posisi</th>
                    <th>Foto</th>
                    <?php 
                    if ($level == "1") { ?>

                      <th>Action</th>
                    <?php } ?>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<script>delete_sweet_dtt(".btn-deleteuser", window.location.href);</script>
