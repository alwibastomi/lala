<!-- LICENSE SPAS
Alwi Bastomi & Alfian Jufri
IG alwi.bastomi & al_alfian77
 -->
<?php
$arsip = $this->m_arsip->getAllUnit();
$dateregister = date("Y-m-d");
?>
<style>
	.ui-autocomplete{
		z-index: 5000;
	}
</style>
<div class="page-wrapper">
	<div class="container-fluid" role="main">

		<div class="row page-titles">
			<h3>Arsip</h3>
		</div>

		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Arsip List</h2>
						<ul class="nav navbar-right panel_toolbox">
							<a href="<?= site_url('Arsip/arsip_excel'); ?>" class="btn btn-outline-success waves-effect waves-light">Export <i class="fa fa-fw fa-file-excel-o"></i></a>
							<!-- <a href="<?= site_url('arsip/arsip_add'); ?>" class="btn btn-outline-primary waves-effect waves-light">Add <i class="fa fa-fw fa-plus"></i></a> -->
							<a href="#" class="btn btn-outline-warning waves-effect waves-light" onclick="ambilData();"><span class="btn-label"><i class="fa fa-fw fa-refresh" onfocus=></i></span>Refresh</a>
							<?php if ($level == "1") { ?>
								<a target="_blank" href="<?= site_url('Arsip/cetak_dp'); ?>" class="btn btn-outline-success waves-effect waves-light">Lembar Disposisi <i class="fa fa-fw fa-file"></i></a>
								<a href="#form" data-toggle="modal" class="btn btn-outline-primary waves-effect waves-light" onclick="submit('tambah')"><span class="btn-label"><i class="fa fa-fw fa-plus" onfocus=></i></span>Add</a>
							<?php } ?>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br>
						<div class="table-responsive">
							<table class="table table-striped datatable-ku" data-func="arsip" data-meth="arsip_datatable">
								<thead>
									<tr>
										<th>Dari/kepada</th>
										<th>Nomor Arsip</th>
										<th>Perihal</th>
										<th>Dipinjam</th>
										<th>Aktif</th>
										<th>Action</th>
										<?php if ($level == "1") { ?>
											<th>Peminjaman/Pengembalian</th>
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
				<h4 class="modal-title" id='jdl-t'>Add Data Barang</h4>
				<h4 class="modal-title" id='jdl-u'>Update Data Barang</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" id="formUpload">
					<div class="form-group">
						<input type="hidden" name="id" required="required" class="form-control" maxlength="50" readonly>
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="dari">Dari/Kepada <span class="required">*</span></label>
						<div class="col-md-5 col-sm-5 col-xs-12">
							<input type="text" name="dari" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255" autofocus>
						</div>
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="diterima">Diterima <span class="required">*</span></label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" name="diterima" id="datenow" required="required" class="form-control col-md-7 col-xs-12" value="<?= $dateregister ?>" maxlength="255" readonly>
						</div><br>
					</div>
					<br>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="indeks">Indeks <span class="required">*</span></label>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<input type="text" name="indeks" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255">
						</div><br><br>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="alamatsurat">Alamat Surat <span class="required">*</span></label>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<input type="text" name="alamatsurat" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255">
						</div><br>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="kota">Kota <span class="required">*</span></label>
						<div class="col-md-5 col-sm-5 col-xs-12">
							<input type="text" name="kota" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255">
						</div> 
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Nomor Surat <span class="required">*</span></label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" name="nomorsurat" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255">
						</div><br>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tanggal Surat <span class="required">*</span></label>
						<div class="col-md-5 col-sm-5 col-xs-12">
							<input type="date" name="tglsurat" required="required" class="form-control col-md-7 col-xs-12" value="" maxlength="255">
						</div>    
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Jenis Surat <span class="required">*</span></label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<select class="form-control" name="jenissurat" id="jenissurat" required="required" >
								<option value="Masuk"> Masuk</option>
								<option value="Keluar">Keluar</option>
							</select>
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
									<input type="radio" class="check" id="flat-radio-7" name="aktif" data-radio="iradio_flat-red" value="ya" onclick="aktifiya()">
									<label for="flat-radio-7"> Ya</label>
								</li>
								&nbsp;&nbsp;&nbsp;
								<li>
									<input type="radio" class="check" id="flat-radio-8" name="aktif" data-radio="iradio_flat-red" value="tidak" onclick="aktiftdk()">
									<label for="flat-radio-8"> Tidak</label>
								</li>
							</ul>
							<input type="hidden" id="hasilpil" name='hasilpil'>
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
						</div><br><br><br><br>
					</div>
					<center><div class="alert alert-warning" id="pesan"><i class="ti-user"> Info </i>
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

<div id="form2" class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id='jdl-t'>Add File Arsip</h4>
				<!-- <h4 class="modal-title" id='jdl-u'>Update File Arsip</h4> -->
			</div>
			<div class="modal-body">
				<form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
					<div class="form-group">
						<input type="hidden" name="id" required="required" class="form-control" autofocus maxlength="50" readonly="">
						<label for="nama" class="control-label">File :</label>
						<input type="file" id="file" name="file" accept="application/pdf" class="form-control">
					</div>
					<center><div class="alert alert-warning" id="pesan"><i class="ti-user"> <?= $nama_lengkap; ?></i>
					</div></center>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="btn-tambahfile" onclick="addFile()" class="btn btn-primary">Save</button>
				<!-- <button type="button" id="btn-edit" onclick="editData()" class="btn btn-primary">Update</button> -->
				<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
			</div>

		</div>
	</div>
</div>
<!-- /page content -->
<script>delete_sweet_dtt(".btn-deletearsip", window.location.href);</script>
<script src="<?php echo site_url('assets2/plugins/jqueryui/jquery-ui.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">

	ambilData();

	function HapusForm(){
		$("[name='indeks']").val('');
		$("[name='dari']").val('');
		$("[name='alamatsurat']").val('');
		$("[name='kota']").val('');
		$("[name='nomorsurat']").val('');
		$("[name='tglsurat']").val('');
		$("[name='perihal']").val('');
		$("[name='isiringkas']").val('');
		$("[name='jenissurat']").val('');
		$("[name='diterima']").val('*Otomatis');
		$("[name='unit']").val('');
		$("[name='sistem']").val('');
		$("[name='kode']").val('');
		$("[name='file']").val('');
		$("[name='catatan']").val('');
		$("[name='klasifikasi']").val('');
		$("[name='aktif']").val('');
		$("[name='lampiran']").val('');
	}

	function ambilData() {
		$.ajax({
			type:'POST',
			url:'<?= site_url("Arsip/arsip_datatable") ?>',
			dataType: 'JSON',
			success: function(){
				HapusForm();
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

		var indeks = $("[name='indeks']").val();
		var dari = $("[name='dari']").val();
		var alamatsurat = $("[name='alamatsurat']").val();
		var kota = $("[name='kota']").val();
		var nomorsurat = $("[name='nomorsurat']").val();
		var tglsurat = $("[name='tglsurat']").val();
		var perihal = $("[name='perihal']").val();
		var isiringkas = $("[name='isiringkas']").val();
		var jenissurat = $("[name='jenissurat']").val();
		var diterima = $("[name='diterima']").val();
		var unit = $("[name='unit']").val();
		var sistem = $("[name='sistem']").val();
		var kode = $("[name='kode']").val();
		var file = $("[name='file']").val();
		var catatan = $("[name='catatan']").val();
		var klasifikasi = $("[name='klasifikasi']").val();
		var arsiparis = $("[name='arsiparis']").val();
		var aktif = $("[name='hasilpil']").val();
		var lampiran = $("[name='lampiran']").val();

		var formData = new FormData();
		formData.append('file', $('#file')[0].files[0]);

		$.ajax({
			type:'POST',
			enctype: 'multipart/form-data',
			url:'<?= site_url('Arsip/addArsipajax') ?>',
			data:'indeks='+indeks+'&dari='+dari+'&alamatsurat='+alamatsurat+'&kota='+kota+'&nomorsurat='+nomorsurat+'&tglsurat='+tglsurat+'&perihal='+perihal+'&isiringkas='+isiringkas+'&jenissurat='+jenissurat+'&diterima='+diterima+'&unit='+unit+'&sistem='+sistem+'&kode='+kode+'&file='+file+'&catatan='+catatan+'&klasifikasi='+klasifikasi+'&arsiparis='+arsiparis+'&aktif='+aktif+'&lampiran='+lampiran,
			processData: false,
			contentsType: false,
			cache: false,
			timeout: 600000,
			dataType:'JSON',
			success: function(hasil){
				$('#pesan').html(hasil.pesan);

				if (hasil.pesan == '') {


					var tanya = prompt('Mau Tambah Data Lagi? Y / N');
					if (tanya == 'y' || tanya == 'Y') {

						ambilData();
						success_data();
						HapusForm();

					}else{

						ambilData();
						$('#form').modal('hide');
						success_data();
						HapusForm();
					}
				}
			}
		});
	}

	function file(x){
		$('#btn-updt').show();
		$('#jdl-o').show();
		$.ajax({
			type:'POST',
			data:'id='+x,
			url:'<?= site_url("Arsip/ambil_id") ?>',
			dataType: 'JSON',
			success: function(hasil) {
				HapusForm();
				$("[name='id']").val(hasil[0].id);
			}
		});
	}

  // function addFile() {
  //   // var fd = new FormData();
  //   // var files = $('#file')[0].files[0];
  //   // fd.append('file', files)

  //   // var formData = new FormData($('#form2')[0]);

  //   var formData = new FormData();
  //   formData.append('file', $('#file')[0].files[0]);
  //   // alert(formData);

  //   $.ajax({
  //     // beforeSend: function (xhr) {
  //     //   xhr.setRequestHeader("Chache-Control", "no-cache");
  //     //   xhr.setRequestHeader("X-File-Name", file.fileName);
  //     //   xhr.setRequestHeader("X-File-Size", file.fileSize);
  //     //   xhr.setRequestHeader("Content-Type", "multipart/form-data");
  //     // },
  //     type:'POST',
  //     url: '<?= site_url('Arsip/addFile') ?>',
  //     data: formData,
  //     dataType:'JSON',
  //     processData: false,
  //     contentType: false,
  //     success: function(hasil) {
  //       $('#pesan').html(hasil.pesan);



  //         var tanya = prompt(hasil.pesan);
  //         if (tanya == 'y' || tanya == 'Y') {

  //           $('#form2').modal('hide');
  //           ambilData();
  //           success_update();
  //           HapusForm();
  //         }else{
  //           tanya('hidden');
  //           HapusForm();
  //         }
  //     }
  //   });
  // }

  function edtData() {
  	var id = $("[name='id1']").val();
  	var tanggal_kembali = $("[name='tanggal_kembali']").val();
  	var kondisi_kembali = $("[name='kondisi_kembali']").val();

  	$.ajax({
  		data:'id='+id+'&tanggal_kembali='+tanggal_kembali+'&kondisi_kembali='+kondisi_kembali,
  		url:'<?= site_url("Arsip/pengembalian_pinjaman1") ?>',
  		type: 'POST',
  		dataType:'JSON',
  		success: function(hasil) {
  			$('#pesan').html(hasil.pesan);

  			if (hasil.pesan == '') {
  				$('#lala').modal('hide');
  				ambilData();
  				success_data();
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
  		HapusForm();
  	}else{
  		$('#btn-edit').show();
  		$('#jdl-u').show();
  		$('#btn-tambah').hide();
  		$('#jdl-t').hide();
  		HapusForm();

  		$.ajax({
  			type:'POST',
  			data:'id='+x,
  			url:'<?= site_url("Arsip/ambil_id") ?>',
  			dataType: 'JSON',
  			success: function(hasil) {
  				HapusForm();
  				$("[name='id']").val(hasil[0].id);
  				$("[name='indeks']").val(hasil[0].indeks);
  				$("[name='dari']").val(hasil[0].darikepada);
  				$("[name='alamatsurat']").val(hasil[0].alamatsurat);
  				$("[name='kota']").val(hasil[0].kota);
  				$("[name='nomorsurat']").val(hasil[0].nomorsurat);
  				$("[name='tglsurat']").val(hasil[0].tanggalsurat);
  				$("[name='perihal']").val(hasil[0].perihal);
  				$("[name='isiringkas']").val(hasil[0].isiringkas);
  				$("[name='jenissurat']").val(hasil[0].jenissurat);
  				$("[name='diterima']").val(hasil[0].diterima);
  				$("[name='unit']").val(hasil[0].unit);
  				$("[name='sistem']").val(hasil[0].sistem);
  				$("[name='kode']").val(hasil[0].kode);
  				$("[name='file']").val(hasil[0].file);
  				$("[name='catatan']").val(hasil[0].catatan);
  				if (hasil[0].aktif == 'iya') {
  					$('input:radio[name=aktif]')[0].checked = true;
  				}else{
  					$('input:radio[name=aktif]')[1].checked = true;
  				}
  				$("[name='klasifikasi']").val(hasil[0].klasifikasi);
  				$("[name='arsiparis']").val(hasil[0].arsiparis);
  				$("[name='lampiran']").val(hasil[0].lampiran);
  			}
  		});
  	}
  }

  function editData() {
  	var id = $("[name='id']").val();
  	var indeks = $("[name='indeks']").val();
  	var dari = $("[name='dari']").val();
  	var alamatsurat = $("[name='alamatsurat']").val();
  	var kota = $("[name='kota']").val();
  	var nomorsurat = $("[name='nomorsurat']").val();
  	var tglsurat = $("[name='tglsurat']").val();
  	var perihal = $("[name='perihal']").val();
  	var isiringkas = $("[name='isiringkas']").val();
  	var jenissurat = $("[name='jenissurat']").val();
  	var diterima = $("[name='diterima']").val();
  	var unit = $("[name='unit']").val();
  	var sistem = $("[name='sistem']").val();
  	var kode = $("[name='kode']").val();
  	var file = $("[name='file']").val();;
  	var catatan = $("[name='catatan']").val();
  	var klasifikasi = $("[name='klasifikasi']").val();
  	var arsiparis = $("[name='arsiparis']").val();
    // var aktif = document.querySelector('input[name="aktif"]:checked').value;
    // var aktif = document.getElementById('aktif').value;
    var aktif = $('[name="hasilpil"]').val();
    
    var lampiran = $("[name='lampiran']").val();

    $.ajax({
    	url:'<?= site_url("Arsip/editArsipajax") ?>',
    	data:'id='+id+'&indeks='+indeks+'&dari='+dari+'&alamatsurat='+alamatsurat+'&kota='+kota+'&nomorsurat='+nomorsurat+'&tglsurat='+tglsurat+'&perihal='+perihal+'&isiringkas='+isiringkas+'&jenissurat='+jenissurat+'&diterima='+diterima+'&unit='+unit+'&sistem='+sistem+'&kode='+kode+'&file='+file+'&catatan='+catatan+'&klasifikasi='+klasifikasi+'&arsiparis='+arsiparis+'&aktif='+aktif+'&lampiran='+lampiran,
    	type:'POST',
    	dataType:'JSON',
    	success: function(hasil) {
    		$('#pesan').html(hasil.pesan);

    		if (hasil.pesan == '') {

    			var tanya = prompt('Yakin Ubah Data? Y / N');
    			if (tanya == 'y' || tanya == 'Y') {

    				$('#form').modal('hide');
    				ambilData();
    				success_update();
    				HapusForm();
    			}else{
    				tanya('hidden');
    				HapusForm();
    			}
    		}
    	}
    });
}

function aktifiya(){
	document.getElementById('hasilpil').value = 'iya';
}

function aktiftdk(){
	document.getElementById('hasilpil').value = 'tidak';
}

</script>