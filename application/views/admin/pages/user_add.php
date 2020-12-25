        <?php
        if($edit){
          if($user != null){
            $nama_lengkap = $user->nama_lengkap;
            $nick = $user->nick;
            $posisi = $user->posisi;
            $unit = $user->unit;
            $gender = $user->gender;
            $level = $user->level;
          }else{
            redirect('user');
          }
        }else{
          $nama_lengkap = '';
          $nick = '';
          $posisi = '';
          $unit = '';
          $gender = '';
          $level = '';
        }
        ?>
        <!-- page content -->
        <div class="page-wrapper">
          <div class="container-fluid" role="main">

            <div class="row page-titles">
              <h3>User Add</h3>
              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Input <small>User</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form class="form-horizontal form-label-left" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="nmuser">Full Name <span class="required">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" name="fname" required="required" class="form-control col-md-7 col-xs-12" value="<?= $nama_lengkap; ?>" maxlength="100" autofocus>
                        </div><br>
                      </div>
                      <div class="form-group has-feedback div-username">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="username">Username <span class="required">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" id="username" name="username" required="required" value="<?= $nick; ?>" maxlength="50">
                          <span class="glyphicon glyphicon-ok form-control-feedback span-ok" style="display:none;"></span>
                          <span class="glyphicon glyphicon-remove form-control-feedback span-er" style="display:none;"></span>
                        </div><br>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="posisi">Posisi <span class="required">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" id="posisi" name="posisi" required="required" value="<?= $posisi; ?>" maxlength="50">
                          <span class="glyphicon glyphicon-ok form-control-feedback span-ok" style="display:none;"></span>
                          <span class="glyphicon glyphicon-remove form-control-feedback span-er" style="display:none;"></span>
                        </div><br>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="unit">Unit <span class="required">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" id="unit" name="unit" required="required" value="<?= $unit; ?>" maxlength="50">
                          <span class="glyphicon glyphicon-ok form-control-feedback span-ok" style="display:none;"></span>
                          <span class="glyphicon glyphicon-remove form-control-feedback span-er" style="display:none;"></span>
                        </div><br>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="gender">Gender <span class="required">*</span></label>
                        <div class="input-group1 col-md-6 col-sm-6 col-xs-12">
                          <ul class="icheck-list input-group">
                            <li>
                              <input type="radio" class="check" id="flat-radio-7" name="gender" data-radio="iradio_flat-red" value="1" <?php if($gender=='1') {
                                echo "CHECKED";
                              }?>>
                              <label for="flat-radio-7"> Male</label>
                            </li>
                            &nbsp;&nbsp;&nbsp;
                            <li>
                              <input type="radio" class="check" id="flat-radio-8" name="gender" data-radio="iradio_flat-red" value="2"  <?php if($gender=='2') {
                                echo "CHECKED";
                              }?>>
                              <label for="flat-radio-8"> Female</label>
                            </li>
                          </ul>
                        </div><br>
                      </div>
                      <?php if(!$edit){ ?>
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="password">Password <span class="required">*</span></label>
                          <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="password" name="password" required="required" class="form-control col-md-7 col-xs-12" maxlength="255">
                          </div><br>
                        </div>
                      <?php } ?>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="level">Level <span class="required">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="level" id="level" required>
                            <option value="">-select level-</option>
                            <?php
                            $n = 1;
                            $lvl = array('Document Control','User');
                            for ($l=0; $l < sizeof($lvl); $l++) {
                              if($level == $n){
                                echo "<option value='$n' selected>$lvl[$l]</option>";
                              }else{
                                echo "<option value='$n'>$lvl[$l]</option>";
                              }
                              $n++;
                            }
                            ?>
                          </select>
                        </div><br>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="<?= site_url('user'); ?>" name="cancel" class="btn btn-primary" role="button">Cancel</a>
                          <button type="submit" name="save" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <script>
          $(document).ready(function(){
            $("#username").keyup(function(){
              var val = $(this).val();
              $.ajax({
                url: BASE_URL+"user/checkUsername/"+val,
                success: function(ret){
                  if(ret === ""){
                    $(".div-username").removeClass('has-success');
                    $(".div-username").removeClass('has-error');
                    $(".span-ok").hide();
                    $(".span-er").hide();
                  }else if(ret === "available"){
                    //alert(ret);
                    $(".div-username").addClass('has-success');
                    $(".div-username").removeClass('has-error');
                    $(".span-ok").show();
                    $(".span-er").hide();
                  }else{
                    //alert(ret);
                    $(".div-username").removeClass('has-success');
                    $(".div-username").addClass('has-error');
                    $(".span-ok").hide();
                    $(".span-er").show();
                  }
                }
              });
            });
            $("#level").change(function(){
              var value = $(this).val();
              if(value == 2){
                $("#opt-access").fadeIn();
              }else if(value == 3){
                $("#opt-access").fadeIn();
              }
              else{
                $("#opt-access").fadeOut();
              }
            });
          });
        </script>
        <?php
        if($alert == "success"){
          echo "<script>success_sweet('Data is saved.','user_add');</script>";
        }
        if($alert == "exist"){
          echo "<script>failed_sweet('The file is already exist.');</script>";
        }
        if($alert == "success_edit"){
          echo "<script>success_sweet('Data is updated.','user');</script>";
        }
        if($alert == "too large"){
          echo "<script>failed_sweet('The file you are trying to upload is too large.');</script>";
        }
        if($alert == "username_exist"){
          echo "<script>failed_sweet('The username is already exist.');</script>";
        }
        ?>
