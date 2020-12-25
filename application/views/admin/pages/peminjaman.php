<div class="page-wrapper">
 <div class="container-fluid" role="main">

   <div class="row page-titles">
     <h3>Daftar Pinjam</h3>
   </div>

   <div class="clearfix"></div>
   <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Daftar Pinjam List</h2>
          <ul class="nav navbar-right panel_toolbox">
            <a href="<?= site_url('arsip/peminjaman_excel'); ?>" class="btn btn-outline-success waves-effect waves-light">Export <i class="fa fa-fw fa-file-excel-o"></i></a>
            <a href="#" class="btn btn-outline-warning waves-effect waves-light" onclick="ambilData();"><span class="btn-label"><i class="fa fa-fw fa-refresh" onfocus=></i></span>Refresh</a>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br>
          <div class="table-responsive">
            <table class="table table-striped datatable-ku" data-func="arsip" data-meth="peminjaman_datatable">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Arsip</th>
                  <th>Nama Peminjam</th>
                  <th>Unit</th>
                  <th>Kondisi_Pinjam</th>
                  <th>Tgl Pinjam</th>
                  <th>Batas waktu</th>
                  <th>Tgl Kembali</th>
                  <th>Kondisi Kembali</th>
                  <th>Petugas</th>
                  <th>Catatan</th>
                              <?php if ($level == 1) { ?>
                  <th>Action</th>
                <?php } ?>
                </tr>
              </thead>
              <tbody id="target">

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div id="form" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id='jdl-t'>Add Data Unit</h4>
        <h4 class="modal-title" id='jdl-u'>Update Data Unit</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="hidden" name="id" required="required" class="form-control" autofocus maxlength="50" readonly="">
            <label for="nama" class="control-label">Tanggal Kembali :</label>
            <input type="date" name="tgl_kembali" required="required" class="form-control" autofocus maxlength="50">
          </div>
          <div class="form-group">
            <input type="hidden" name="id" required="required" class="form-control" autofocus maxlength="50" readonly="">
            <label for="nama" class="control-label">Kondisi Kembali :</label>
            <select class="form-control" name="kondisi_kembali" id="klasifikasi" required="required" >
              <option value="bagus"> Bagus</option>
              <option value="sedang">Sedang</option>
              <option value="kurang">Kurang</option>
            </select> 
          </div>
          <center><div class="alert alert-warning" id="pesan"><i class="ti-user"> <?= $nama_lengkap; ?></i>
          </div></center>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btn-tambah" onclick="addData()" class="btn btn-primary">Save</button>
        <button type="button" id="btn-edit" onclick="editData()" class="btn btn-primary">Update</button>
        <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
      </div>

    </div>
  </div>
</div>
<!-- /page content -->
<script>delete_sweet_dtt(".btn-deleteunit", window.location.href);</script>
<script src="<?php echo site_url('assets2/plugins/jqueryui/jquery-ui.js'); ?>" type="text/javascript"></script>

<script type="text/javascript">

  ambilData();

  function ambilData() {
    $.ajax({
      type:'POST',
      url:'<?= site_url("Arsip/pinjam_datatable") ?>',
      dataType: 'JSON',
      success: function(){
        $("[name='id']").val('');
        $("[name='tgl_kembali']").val('');
        $("[name='kondisi_kembali']").val('');
        if($('.datatable-ku').length>0){
          var func = $('.datatable-ku').attr('data-func');
          var meth = $('.datatable-ku').attr('data-meth');
          var dataTbl = $('.datatable-ku').dataTable({
            "bRetrieve": true,
            "aLengthMenu": [[5, 10, 15, 20, 25], [5, 10, 15, 20, 25]],
            "pageLength": 10,
            "processing" : true,
            'serverSide' : true,
            'aaSorting'  :[],
            'ajax' : {
              'url' : BASE_URL+func+"/"+meth,
              'type': 'POST'
            }
          });
          dataTbl.fnDraw();
        }
      }
    });
  }


  function submit(x){
    $('#btn-edit').show();
    $('#jdl-u').show();
    $('#btn-tambah').hide();
    $('#jdl-t').hide();
    $("[name='id']").val(x);
    $("[name='tgl_kembali']").val('');
    $("[name='kondisi_kembali']").val('');
  }
  


  function editData() {
    var id = $("[name='id']").val();
    var tgl_kembali = $("[name='tgl_kembali']").val();
    var kondisi_kembali = $("[name='kondisi_kembali']").val();

    $.ajax({
      type: 'POST',
      data:'id='+id+'&tgl_kembali='+tgl_kembali+'&kondisi_kembali='+kondisi_kembali,
      url:'<?= site_url("Arsip/pengembalian_pinjaman") ?>',
      dataType:'json',
      success: function(hasil) {
        $('#pesan').html(hasil.pesan);

        if (hasil.pesan == '') {
          $('#form').modal('hide');
          ambilData();
          success_data();
        }
      }
    });
  }
</script>