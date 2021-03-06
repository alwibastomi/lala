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
          <div class="x_content">

      <div class="ln_solid"></div>
      <br>
      <div class="row">
        <div class="x_panel">
          <center><h2>Detail Data ID <?= $arsip->id; ?></h2>

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