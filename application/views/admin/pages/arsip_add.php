
<?php 

$arsip = $this->m_arsip->getAllUnit();
$dateregister = date("d-m-Y");

?>
<!-- page content -->
<div class="page-wrapper">
  <div class="container-fluid" role="main">
    <!-- AKU TIBAKE ISO -->
    <div class="row page-titles">
      <div class="col-md-12 col-8 align-self-center">
        <h3 class="text-themecolor"></h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('category_filter/manage'); ?>"></a></li> 
        </ol>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2> </h2>
            <input type="hidden" id="luffy" required="required" class="" value="">
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>
            <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
              <div class="form-group">
               <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Dari/Kepada <span class="required">*</span></label>
               <div class="col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="dari" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255" autofocus>
              </div>
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Diterima <span class="required">*</span></label>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <input type="text" name="diterima" required="required" class="form-control col-md-7 col-xs-12" value="<?= $dateregister ?>" maxlength="255" readonly autofocus>
              </div><br>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Indeks <span class="required">*</span></label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="text" name="indeks" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255" autofocus>
              </div><br><br>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Alamat Surat <span class="required">*</span></label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="text" name="alamatsurat" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255" autofocus>
              </div><br>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Kota <span class="required">*</span></label>
              <div class="col-md-5 col-sm-5 col-xs-12">
                <input type="text" name="kota" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255" autofocus>
              </div> 
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Nomor Surat <span class="required">*</span></label>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <input type="text" name="nomorsurat" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255" autofocus>
              </div><br>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tanggal Surat <span class="required">*</span></label>
              <div class="col-md-5 col-sm-5 col-xs-12">
                <input type="date" name="tglsurat" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255" autofocus>
              </div>    
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Jenis Surat <span class="required">*</span></label>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <input type="text" name="jenissurat" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255" autofocus>
              </div><br>
            </div>
            <div class="form-group">

            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Perihal <span class="required">*</span></label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <input type="text" name="perihal" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255" autofocus>
              </div><br>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Isi Ringkas <span class="required">*</span></label>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <textarea type="text" name="isiringkas" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255" autofocus>
                </textarea>
              </div><br><br>  <br>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Unit <span class="required">*</span></label>
              <div class="col-md-2 col-sm-2 col-xs-12">
               <select class="form-control" name="unit" id="unit" required="required" >
                <?php foreach ($arsip as $key) { ?>
                  <option value="<?= $key->nama ?>"> <?= $key->nama ?></option>

                <?php } ?>
              </select>
            </div>               
            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="title">Sistem <span class="required">*</span></label>
            <div class="col-md-2 col-sm-2 col-xs-12">
             <select class="form-control" name="sistem" id="sistem" required="required" >
              <option value="abjad"> Abjad</option>
              <option value="tanggalsurat">Tanggal Surat</option>
              <option value="wilayah">Wilayah</option>
              <option value="terminaldigit">Terminal Digit</option>
              <option value="desimal">Desimal</option>
              <option value="pokoksoal">Pokok Soal</option>
            </select>
          </div>
          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Klasifikasi <span class="required">*</span></label>
          <div class="col-md-2 col-sm-2 col-xs-12">
           <select class="form-control" name="klasifikasi" id="klasifikasi" required="required" >
            <option value="biasa"> Biasa</option>
            <option value="rahasia">Rahasia</option>
            <option value="sangatrahasia">Sangat Rahasia</option>
          </select>
        </div><br><br>
      </div>

      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">File <span class="required">*</span></label>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <input type="file" id="file" name="file" accept="application/pdf" class="form-control">
        </div><br><br>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Kode <span class="required">*</span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <input type="text" name="kode" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255">
        </div><br><br><br>
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Arsiparis <span class="required">*</span></label>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <input type="text" name="arsiparis" required="required" class="form-control col-md-7 col-xs-12" value="<?= $nama_lengkap; ?>" maxlength="255" readonly>
          </div><br>
        </div>
      </div><br>
      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Aktif <span class="required">*</span></label>
        <div class="input-group1 col-md-6 col-sm-6 col-xs-12">
          <ul class="icheck-list input-group">
            <li>
              <input type="radio" class="check" id="flat-radio-7" name="aktif" data-radio="iradio_flat-red" value="ya" >
              <label for="flat-radio-7"> Ya</label>
            </li>
            &nbsp;&nbsp;&nbsp;
            <li>
              <input type="radio" class="check" id="flat-radio-8" name="aktif" data-radio="iradio_flat-red" value="tidak"  >
              <label for="flat-radio-8"> Tidak</label>
            </li>
          </ul>
        </div><br><br>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Lampiran <span class="required">*</span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <input type="text" name="lampiran" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255">
        </div><br>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Catatan <span class="required">*</span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <textarea  type="text" name="catatan" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255" autofocus></textarea>
        </div><br>
      </div>
      <br>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <a href="<?= site_url('user'); ?>" name="cancel" class="btn btn-primary" role="button">Cancel</a>
          <button type="submit" name="save" class="btn btn-success">Submit</button>
        </div>
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
<?php
if($alert == "success"){
  echo "<script>success_sweet('Data is saved.','arsip_add');</script>";
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
<script type="text/javascript">
  function myFUNCTION() {
    z = document.getElementById("haha").value
    lil = document.getElementById("luffy").value

    if (isNaN(lil)){
      lol=lil.substr(1,lil.length-2)
      document.getElementById("sjk").innerHTML ="Last Store (" + lol + " Sejak Off)";
    }else{
      lol = lil;
    }

    var a = document.getElementById("alala").value
    var l = document.getElementById("haha").value

    tot = parseInt(lol) + parseInt(a);
    ma = 1;
    if (l == "Jan") {
      var s = "Mar";
      var tot1 = tot;
    }
    else if (l == "Feb"){
      var s = "Mar";
      var tot1 = tot;
    }
    else if (l == "Mar") {
      var s = "Sep";
      var tot1 = tot;
    }
    else if (l == "Apr"){
      var s = "Sep";
      var tot1 = tot;
    }
    else if (l == "May") {
      var s = "Sep";
      var tot1 = tot;
    }
    else if (l == "Jun"){
      var s = "Sep";
      var tot1 = tot;
    }
    else if (l == "Jul") {
      var s = "Sep";
      var tot1 = tot;
    }
    else if (l == "Aug"){
      var s = "Sep";
      var tot1 = tot;
    }
    else if (l == "Sep") {
      var s = "Mar";
      tot1 = parseInt(tot) + parseInt(ma);
    }
    else if (l == "Oct"){
      var s = "Mar";
      tot1 = parseInt(tot) + parseInt(ma);
    }
    else if (l == "Nov") {
      var s = "Mar";
      tot1 = parseInt(tot) + parseInt(ma);
    }
    else{
      var s = "Mar";
      tot1 = parseInt(tot) + parseInt(ma);
    }

    document.getElementById("bul").value =  l;
    document.getElementById("demo").value = tot;
    document.getElementById("sempol").value = s;

    document.getElementById("asa").value = tot1;





  }
</script>