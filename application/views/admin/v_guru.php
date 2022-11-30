<!--Counter Inbox-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMKN 1 Garut</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() ?>tampilan/img/favicon.png">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>"/>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<?php
	$this->load->view('admin/v_header');
	?>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<?php
			$this->load->view('admin/v_menu');
			?>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Data Guru
				<small></small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Guru</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">

						<div class="box">

							<?php
							if ($this->session->userdata('akses') == '1') {
								?>
								<div class="box-header">
									<a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span
												class="fa fa-plus"></span> Add Guru</a>
								</div>
								<?php } ?>

							<!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-striped" style="font-size:13px;">
									<thead>
									<tr>
										<th>Photo</th>
										<th>NIP</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Tempat Lahir</th>
										<th>Tanggal Lahir</th>
										<th>Pendidikan Guru</th>
										<th>Mata Pelajaran</th>
										
										<th style="text-align:right;">Aksi</th>
									</tr>
									</thead>
								<tbody>

									<?php foreach ($data->result_array() as $i):
										$guru_id = $i['guru_id'];
										$guru_nip = $i['guru_nip'];
										$guru_nama= $i['guru_nama'];
										$guru_jenkel= $i['guru_jenkel'];
										$guru_tmpt_lahir= $i['guru_tmp_lahir'];
										$guru_tgl_lahir= $i['guru_tgl_lahir'];
										$pendidikan_guru= $i['pendidikan_guru'];
										$guru_mapel= $i['guru_mapel'];
										$guru_photo = $i['guru_photo'];
										?>

										<tr>
										<?php if(empty($guru_photo)):?>
										<td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png';?>"></td>
										<?php else:?>
										<td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/'.$guru_photo;?>"></td>
										<?php endif;?>
											<td><?php echo $guru_nip; ?></td>
											<td><?php echo $guru_nama; ?></td>
											<?php if ($guru_jenkel == 'L'): ?>
												<td>Laki-Laki</td>
											<?php else: ?>
												<td>Perempuan</td>
											<?php endif; ?>
											<td><?php echo $guru_tmpt_lahir; ?></td>
											<td><?php echo $guru_tgl_lahir; ?></td>
											<td><?php echo $pendidikan_guru; ?></td>
											<td><?php echo $guru_mapel; ?></td>
							
											<td style="text-align:right;">
												<a class="btn" data-toggle="modal"
												   data-target="#ModalEdit<?php echo $guru_id; ?>"><span
															class="fa fa-pencil"></span></a>
												<a class="btn" data-toggle="modal"
												   data-target="#ModalHapus<?php echo $guru_id; ?>"><span
															class="fa fa-trash"></span></a>
											</td>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">

		<strong>Copyright <?php echo date('Y'); ?> by SMKN 1 Garut</strong>
	</footer>

	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!--Modal Add Pengguna-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true"><span class="fa fa-close"></span></span></button>
				<h4 class="modal-title" id="myModalLabel"> Add Guru</h4>
			</div>
			<form class="form-horizontal" action="<?php echo base_url() . 'admin/guru/simpan_guru' ?>" method="post"
				  enctype="multipart/form-data">
				<div class="modal-body">

					<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">NIP</label>
						<div class="col-sm-7">
							<input type="text" name="xnip" class="form-control" id="inputUserName" placeholder="NIP"
								   required onkeypress="return isNumberKey(event)">
						</div>
					</div>

					<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Nama</label>
						<div class="col-sm-7">
							<input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama"
								   required onkeypress="return isCharKey(event)">
						</div>
					</div>

					<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
						<div class="col-sm-7">
							<div class="radio radio-info radio-inline">
								<input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
								<label for="inlineRadio1"> Laki-Laki </label>
							</div>
							<div class="radio radio-info radio-inline">
								<input type="radio" id="inlineRadio1" value="P" name="xjenkel">
								<label for="inlineRadio2"> Perempuan </label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
						<div class="col-sm-7">
							<input type="text" name="xtmp_lahir" class="form-control" id="inputUserName"
								   placeholder="Tempat Lahir" required onkeypress="return isCharKey(event)">
						</div>
					</div>

					<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
						<div class="col-sm-7">
							<input type="date" name="xtgl_lahir" class="form-control" id="inputUserName"
								   placeholder="Contoh: 25 September 1993" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Pendidikan Guru</label>
						<div class="col-sm-7">
							<input type="text" name="xpendidikan_guru" class="form-control" id="inputUserName"
								   placeholder="Contoh: S1 Teknik Informatika" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Mata Pelajaran</label>
						<div class="col-sm-7">
							<input type="text" name="xmapel" class="form-control" id="inputUserName"
								   placeholder="Contoh: PPKN, Matematika" required onkeypress="return isCharKey(event)">
						</div>
					</div>

					<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Photo</label>
						<div class="col-sm-7">
							<input type="file" name="filefoto" required/>
						</div>
					</div>
				</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php foreach ($data->result_array() as $i):
		$guru_id = $i['guru_id'];
		$guru_nip = $i['guru_nip'];
		$guru_nama= $i['guru_nama'];
		$guru_jenkel= $i['guru_jenkel'];
		$guru_tmpt_lahir= $i['guru_tmp_lahir'];
		$guru_tgl_lahir= $i['guru_tgl_lahir'];
		$pendidikan_guru= $i['pendidikan_guru'];
		$guru_mapel= $i['guru_mapel'];
		$guru_photo = $i['guru_photo'];
		?>

<!--Modal Edit Album-->
<div class="modal fade" id="ModalEdit<?php echo $guru_id; ?>" tabindex="-1" role="dialog"
	 aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true"><span class="fa fa-close"></span></span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Guru</h4>
			</div>
			<form class="form-horizontal" action="<?php echo base_url() . 'admin/guru/update_guru' ?>"
				  method="post" enctype="multipart/form-data">
				<div class="modal-body">

				<div class="form-group">
							<label for="inputUserName" class="col-sm-4 control-label">Nip</label>
							<div class="col-sm-7">
								<input type="hidden" name="kode" value="<?php echo $guru_id; ?>"/>
								<input type="text" name="xnip" class="form-control" id="inputUserName"
									   value="<?php echo $guru_nip; ?>" placeholder="Nip" required>
							</div>
						</div>

				<div class="form-group">
							<label for="inputUserName" class="col-sm-4 control-label">Nama</label>
							<div class="col-sm-7">
								<input type="hidden" name="kode" value="<?php echo $guru_id; ?>"/>
								<input type="text" name="xnama" class="form-control" id="inputUserName"
									   value="<?php echo $guru_nama; ?>" placeholder="Nama Lengkap" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputJenkel" class="col-sm-4 control-label">Jenis Kelamin</label>
							<div class="col-sm-7">
								<?php if ($guru_jenkel == 'L'): ?>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
										<label for="inlineRadio1"> Laki-Laki </label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="inlineRadio1" value="P" name="xjenkel">
										<label for="inlineRadio2"> Perempuan </label>
									</div>
								<?php else: ?>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="inlineRadio1" value="L" name="xjenkel">
										<label for="inlineRadio1"> Laki-Laki </label>
									</div>
									<div class="radio radio-info radio-inline">
										<input type="radio" id="inlineRadio1" value="P" name="xjenkel" checked>
										<label for="inlineRadio2"> Perempuan </label>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputTmpLahir" class="col-sm-4 control-label">Tempat Lahir</label>
							<div class="col-sm-7">
								<input type="text" name="xtmplahir" class="form-control"
									   value="<?php echo $guru_tmpt_lahir; ?>" id="inputTmpLahir"
									   placeholder="TmpLahir" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inpuTglLahir" class="col-sm-4 control-label">Tanggal Lahir</label>
							<div class="col-sm-7">
								<input type="text" name="xtgllahir" class="form-control"
									   value="<?php echo $guru_tgl_lahir; ?>" id="inputTglLahir"
									   placeholder="TglLahir" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputpendidikan_guru" class="col-sm-4 control-label">Pendidikan Guru</label>
							<div class="col-sm-7">
								<input type="text" name="xpendidikan_guru" class="form-control"
									   value="<?php echo $pendidikan_guru; ?>" id="inputpendidikan_guru"
									   placeholder="pendidikan_guru" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputMapel" class="col-sm-4 control-label">Mata Pelajaran</label>
							<div class="col-sm-7">
								<input type="text" name="xmapel" class="form-control"
									   value="<?php echo $guru_mapel; ?>" id="inputMapel"
									   placeholder="Mapel" required>
							</div>
						</div>
						<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Photo</label>
						<div class="col-sm-7">
							<input type="file" name="xphoto" class="form-control" 
							value="<?php echo $guru_photo; ?>" id="inputfile" placeholder="photo" required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php endforeach; ?>

<?php foreach ($data->result_array() as $i):
		$guru_id = $i['guru_id'];
		$guru_nip = $i['guru_nip'];
		$guru_nama= $i['guru_nama'];
		$guru_jenkel= $i['guru_jenkel'];
		$guru_tmpt_lahir= $i['guru_tmp_lahir'];
		$guru_tgl_lahir= $i['guru_tgl_lahir'];
		$pendidikan_guru= $i['pendidikan_guru'];
		$guru_mapel= $i['guru_mapel'];
		$guru_photo = $i['guru_photo'];
		?>

	<!--Modal Hapus Guru-->
	<div class="modal fade" id="ModalHapus<?php echo $guru_id; ?>" tabindex="-1" role="dialog"
		 aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true"><span class="fa fa-close"></span></span></button>
					<h4 class="modal-title" id="myModalLabel">Hapus Guru</h4>
				</div>
				<form class="form-horizontal"
					  action="<?php echo base_url() . 'admin/guru/hapus_guru/' . $guru_id; ?>" method="post"
					  enctype="multipart/form-data">
					<div class="modal-body">
						<input type="hidden" name="kode" value="<?php echo $guru_id; ?>"/>
						<p>Apakah Anda yakin mau menghapus Guru <b><?php echo $guru_nama; ?></b> ?</p>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php endforeach; ?>


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
<!-- page script -->
<script>
	function isNumberKey(evt)   // validasi agar text field nya hanya bisa memasukan angka tidak bisa huruf
	{
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}

	function isCharKey(evt)  //validasi  agar text field nya hanya bisa memasukan huruf tidak bisa angka
	{
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode != 32 && charCode < 65 && charCode > 46)
			return false;
		return true;
	}


</script>


<script>
	$(function () {
		$("#example1").DataTable();
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});
</script>
<?php if ($this->session->flashdata('msg') == 'error'): ?>
	<script type="text/javascript">
		$.toast({
			heading: 'Error',
			text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
			showHideTransition: 'slide',
			icon: 'error',
			hideAfter: false,
			position: 'bottom-right',
			bgColor: '#FF4859'
		});
	</script>

<?php elseif ($this->session->flashdata('msg') == 'success'): ?>
	<script type="text/javascript">
		$.toast({
			heading: 'Success',
			text: "Guru Berhasil disimpan ke database.",
			showHideTransition: 'slide',
			icon: 'success',
			hideAfter: false,
			position: 'bottom-right',
			bgColor: '#7EC857'
		});
	</script>
<?php elseif ($this->session->flashdata('msg') == 'info'): ?>
	<script type="text/javascript">
		$.toast({
			heading: 'Info',
			text: "Guru berhasil di update",
			showHideTransition: 'slide',
			icon: 'info',
			hideAfter: false,
			position: 'bottom-right',
			bgColor: '#00C9E6'
		});
	</script>
<?php elseif ($this->session->flashdata('msg') == 'success-hapus'): ?>
	<script type="text/javascript">
		$.toast({
			heading: 'Success',
			text: "Guru Berhasil dihapus.",
			showHideTransition: 'slide',
			icon: 'success',
			hideAfter: false,
			position: 'bottom-right',
			bgColor: '#7EC857'
		});
	</script>
<?php else: ?>

<?php endif; ?>
</body>
</html>
