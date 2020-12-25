<?php 
$unit = $this->m_arsip->getAllUnit();
$tgl = date("d-m-Y");
$id = $arsip->id;
?>
<div class="page-wrapper">
  <div class="container-fluid" role="main">
    <!-- AKU TIBAKE ISO -->
    <div class="row page-titles">
      <div class="col-md-12 col-8 align-self-center">
        <h3 class="text-themecolor">Pinjam Arsip ID <?= $arsip->id ?></h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('Arsip'); ?>">List Arsip</a></li>
          <li class="breadcrumb-item active">Detail <?= $arsip->id; ?></li>
        </ol>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <ul class="nav navbar-right panel_toolbox">
              <a href="<?php if (!empty($coba)){ echo site_url('search'); } else { echo site_url('Arsip'); } ?>" class="btn btn-outline-warning waves-effect waves-light"><span class="btn-label"><i class="fa fa-fw fa-arrow-left" onfocus=></i></span> Back</a>
            </ul>
            <div class="clearfix"></div>
          </div>
          <?php if ($level == "1") { ?>
            <div class="x_content">
              <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                <div class="row"> 
                  <div class="col-md-12">
                    <input type="hidden" name="id" required="required" class="form-control col-md-7 col-xs-12"  maxlength="255" value="<?= $arsip->id ?>" autofocus >
                     <input type="hidden" name="old" required="required" class="form-control col-md-7 col-xs-12"  maxlength="255" value="<?= $arsip->file ?>" autofocus >
                    <div class="form-group">
                      <label class="control-label col-md-1 col-sm-1 col-xs-12" for="title">File <span class="required">*</span></label>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="file" name="file" required="required" class="form-control col-md-7 col-xs-12"  maxlength="255" value="" autofocus >
                      </div><br>
                    </div>   

                  </div>
                </div>
                <br>
                <div class="ln_solid" style="width: 50%"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <a href="<?= site_url('Arsip'); ?>" name="cancel" class="btn btn-primary" role="button">Cancel</a>
                    <button type="submit" name="save" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </form>
            <?php } ?>
            <div class="ln_solid"></div>
            <br>
            <div class="row">
              <div class="x_panel">
                <center><h2>Detail Data ID <?= $arsip->id; ?></h2>
                  <?php if ($level == "1") { ?>
                    <a target="_blank" href="<?= site_url('Arsip/cetak_pdf/'.$id); ?>" class="btn btn-outline-warning waves-effect waves-light"><span class="btn-label"><i class="fa fa-print"></i></span> Print KK</a>
                  <?php } ?>
                  <?php if (file_exists("./files/pdf/".$arsip->file) && $arsip->file != "") { ?>
                    <a target="_blank" href="<?= site_url('Arsip/Arsip_read/'.$arsip->file); ?>" class="btn btn-outline-primary waves-effect waves-light"><span class="btn-label"><i class="fa fa-eye"></i></span> Open</a>
                  <?php } ?>
                  <br></center>
                </div>
                <div class="col-md-6">
                  <table class="table">
                    <tr>
                      <td><strong>ID. Arsip</strong></td>
                      <td style="padding-right: -90px;">:</td>
                      <td style="padding-right: 200px;"><?= $arsip->id; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Dari / Kepada</strong></td>
                      <td>:</td>
                      <td><?= $arsip->darikepada; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Alamat Surat</strong></td>
                      <td>:</td>
                      <td><?= $arsip->alamatsurat; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Kota</strong></td>
                      <td>:</td>
                      <td><?= $arsip->kota; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Nomor Surat</strong></td>
                      <td>:</td>
                      <td><?= $arsip->nomorsurat; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Tanggal Surat</strong></td>
                      <td>:</td>
                      <td><?= $arsip->tanggalsurat; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Diterima</strong></td>
                      <td>:</td>
                      <td><?= $arsip->diterima; ?></td>
                    </tr>
                  </table>
                </div>
                <div class="col-md-6">
                  <table class="table">
                    <tr>
                      <td><strong>Perihal</strong></td>
                      <td>:</td>
                      <td><?= $arsip->perihal; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Isi Ringkas</strong></td>
                      <td>:</td>
                      <td><?= $arsip->isiringkas; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Jenis Surat</strong></td>
                      <td>:</td>
                      <td><?= $arsip->jenissurat; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Unit</strong></td>
                      <td>:</td>
                      <td><?= $arsip->unit; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Kode</strong></td>
                      <td>:</td>
                      <td><?= $arsip->kode; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Nama File</strong></td>
                      <td>:</td>
                      <td><?= $arsip->file; ?></td>
                    </tr>  
                    <tr>
                      <td><strong>Klasifikasi</strong></td>
                      <td>:</td>
                      <td><?= $arsip->klasifikasi; ?></td>
                    </tr> 
                    <tr>
                      <td><strong>Catatan</strong></td>
                      <td>:</td>
                      <td><?= $arsip->catatan; ?></td>
                    </tr>  
                  </table>
                </div>


              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    if($alert == "success"){
     echo "<script>success_data();</script>";
   }
   if($alert == "exist"){
    echo "<script>failed_sweet('The file is already exist.');</script>";
  }
  if($alert == "success_edit"){
    echo "<script>success_sweet('Data is updated.','p01');</script>";
  }
  if($alert == "too large"){
    echo "<script>failed_sweet('The file you are trying to upload is too large.');</script>";
  }
  ?>