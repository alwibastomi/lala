<div class="page-wrapper">
 <div class="container-fluid" role="main">

   <div class="row page-titles">
     <h3>Unit</h3>
   </div>

   <div class="clearfix"></div>
   <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Unit List</h2>
          <ul class="nav navbar-right panel_toolbox">
            <a href="<?= site_url('Unit/Unit_excel'); ?>" class="btn btn-outline-success waves-effect waves-light">Export <i class="fa fa-fw fa-file-excel-o"></i></a>
            <a href="#" class="btn btn-outline-warning waves-effect waves-light" onclick="ambilData();"><span class="btn-label"><i class="fa fa-fw fa-refresh" onfocus=></i></span>Refresh</a>
            <?php if ($level == 1) { ?>
              
              <a href="#form" data-toggle="modal" class="btn btn-outline-primary waves-effect waves-light" onclick="submit('tambah')"><span class="btn-label"><i class="fa fa-fw fa-plus" onfocus=></i></span>Add</a>
            <?php } ?>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br>
          <div class="table-responsive">
            <table class="table table-striped datatable-ku" data-func="unit" data-meth="unit_datatable">
              <thead>
                <tr>
                  <th>ID Unit</th>
                  <th>Nama Unit</th>
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
            <label for="nama" class="control-label">Nama Unit :</label>
            <input type="text" name="nama" required="required" class="form-control" autofocus maxlength="50">
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

<script type="text/javascript">

  ambilData();

  function ambilData() {
    $.ajax({
      type:'POST',
      url:'<?= site_url("Arsip/arsip_datatable") ?>',
      dataType: 'JSON',
      success: function(){
        $("[name='id']").val('');
        $("[name='nama']").val('');
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

  function addData() {
    var nama = $("[name='nama']").val();

    $.ajax({
      type:'POST',
      data:'nama='+nama,
      url:'<?= site_url('Unit/addUnitajax') ?>',
      dataType:'JSON',
      success: function(hasil){
        $('#pesan').html(hasil.pesan);

        if (hasil.pesan == '') {


          var tanya = prompt('Mau Tambah Data Lagi? Y / N');
          if (tanya == 'y' || tanya == 'Y') {

            ambilData();
            success_data();
            $("[name='id']").val('');
            $("[name='nama']").val('');
          }else{
            ambilData();
            $('#form').modal('hide');
            success_data();
            $("[name='id']").val('');
            $("[name='nama']").val('');
          }
        }
      }
    });
  }

  function submit(x){
    if (x == 'tambah') {
      $('#btn-tambah').show();
      $('#jdl-t').show();
      $('#btn-edit').hide();
      $('#jdl-u').hide();
      $("[name='id']").val('');
      $("[name='nama']").val('');
    }else{
      $('#btn-edit').show();
      $('#jdl-u').show();
      $('#btn-tambah').hide();
      $('#jdl-t').hide();
      $("[name='id']").val('');
      $("[name='nama']").val('');


      $.ajax({
        type:'POST',
        data:'id='+x,
        url:'<?= site_url("Unit/ambil_id") ?>',
        dataType: 'json',
        success: function(hasil) {
          $("[name='id']").val(hasil[0].id);
          $("[name='nama']").val(hasil[0].nama);
        }
      });
    }
  }

  function editData() {
    var id = $("[name='id']").val();
    var nama = $("[name='nama']").val();

    $.ajax({
      type: 'POST',
      data:'id='+id+'&nama='+nama,
      url:'<?= site_url("Unit/edit_unit") ?>',
      dataType:'json',
      success: function(hasil) {
        $('#pesan').html(hasil.pesan);

        if (hasil.pesan == '') {
          $('#form').modal('hide');
          ambilData();
          success_update();
        }
      }
    });
  }
</script>