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
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.css' ?>">
	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datepicker/datepicker3.css' ?>">
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
				Kompetensi Keahlian
				<small></small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Data Kompetensi Keahlian</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">

						<div class="box">
						<?php
						if ($this->session->userdata('akses') == '1') { ?>

							<div class="box-header">
								<a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span
											class="fa fa-plus"></span> Add Kompetensi Keahlian</a>
							</div>
							<?php } ?>

							<!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-striped" style="font-size:12px;">
									<thead>
									<tr>
										<th>No</th>
										<th>Photo</th>
										<th>Nama Kompetensi Keahlian</th>
										<th>Deskripsi</th>
										<th>Author</th>

										<th style="text-align:right;">Aksi</th>

									</tr>
									</thead>
									<tbody>

									<?php 
									$No = 1?>
									<?php foreach ($data->result_array() as $i):
										$jurusan_id = $i['jurusan_id'];
										$jurusan_judul = $i['jurusan_judul'];
										$jurusan_deskripsi= $i['jurusan_deskripsi'];
										$jurusan_author= $i['jurusan_author'];
										$jurusan_photo = $i['jurusan_photo'];
										?>

										<tr>
											<td><?php echo $No++; ?></td>
											<?php if(empty($jurusan_photo)):?>
											<td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png';?>"></td>
											<?php else:?>
											<td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/'.$jurusan_photo;?>"></td>
											<?php endif;?>
											<td><?php echo $jurusan_judul; ?></td>
											<td><?php echo $jurusan_deskripsi; ?></td>
											<td><?php echo $jurusan_author; ?></td>
							
											<td style="text-align:right;">
												<a class="btn" data-toggle="modal"
												   data-target="#ModalEdit<?php echo $jurusan_id; ?>"><span
															class="fa fa-pencil"></span></a>
												<a class="btn" data-toggle="modal"
												   data-target="#ModalHapus<?php echo $jurusan_id; ?>"><span
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

<!--Modal Add Jurusan-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true"><span class="fa fa-close"></span></span></button>
					<h4 class="modal-title" id="myModalLabel">Add Kompetensi Keahlian</h4>
				</div>
				
			<form class="form-horizontal" action="<?php echo base_url() . 'admin/jurusan/simpan_jurusan' ?>"
				  method="post" enctype="multipart/form-data">
				<div class="modal-body">

				<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Nama Kompetensi Keahlian</label>
						<div class="col-sm-7">
							<input type="text" name="xnama" class="form-control" id="inputUserName"
								   placeholder="Nama Ekskul" required onkeypress="return isCharKey(event)">
						</div>
					</div>
					<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
						<div class="col-sm-7">
							<textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..."
									  required></textarea>
						</div>
					</div>
					<<div class="form-group">
							<label for="inputUserName" class="col-sm-4 control-label">Autor</label>
							<div class="col-sm-7">
								<select class="form-control" name="xlevel" required>
									<?php if ($pengguna_level == '1'): ?>
										<option value="1" selected>Administrator</option>
										<option value="2">Kepala Sekolah</option>
									<?php else: ?>
										<option value="1">Administrator</option>
										<option value="2" selected>Author</option>
									<?php endif; ?>
								</select>
							</div>
						</div>
					<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Photo</label>
						<div class="col-sm-7">
							<input type="file" name="filefoto" required/>
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
	$jurusan_id = $i['jurusan_id'];
	$jurusan_judul = $i['jurusan_judul'];
	$jurusan_deskripsi= $i['jurusan_deskripsi'];
	$jurusan_author= $i['jurusan_author'];
	$jurusan_photo = $i['jurusan_photo'];
?>


<!--Modal Edit Jurusan-->
<div class="modal fade" id="ModalEdit<?php echo $jurusan_id; ?>" tabindex="-1" role="dialog"
	 aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true"><span class="fa fa-close"></span></span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Jurusan</h4>
			</div>
			<form class="form-horizontal" action="<?php echo base_url() . 'admin/jurusan/update_jurusan' ?>"
				  method="post" enctype="multipart/form-data">
				<div class="modal-body">

					<div class="form-group">
							<label for="inputUserName" class="col-sm-4 control-label">Nama Kompetensi Keahlian</label>
							<div class="col-sm-7">
								<input type="hidden" name="kode" value="<?php echo $jurusan_id; ?>"/>
								<input type="text" name="xnama" class="form-control" 
									   value="<?php echo $jurusan_judul; ?>" id="inputUserName" placeholder="Nama Lengkap" required >
							</div>
						</div>

						<div class="form-group">
							<label for="inputUserName" class="col-sm-4 control-label">Deskripsi</label>
							<div class="col-sm-7">
								<textarea class="form-control" rows="3" name="xdeskripsi" placeholder="Deskripsi ..."
										  required><?php echo $jurusan_deskripsi; ?></textarea>
							</div>
						</div>

					<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Author</label>
						<div class="col-sm-7">
							<input type="hidden" name="kode" value="<?php echo $jurusan_id; ?>"/>
							<input type="text" name="xauthor" class="form-control" id="inputUserName"
									value="<?php echo $jurusan_author; ?>" placeholder="Author" required>
						</div>
					</div>	

					<div class="form-group">
						<label for="inputUserName" class="col-sm-4 control-label">Photo</label>
						<div class="col-sm-7">
							<input type="file" name="xphoto" class="form-control" 
							value="<?php echo $jurusan_photo; ?>" id="inputfile" placeholder="photo" required>
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
	$jurusan_id = $i['jurusan_id'];
	$jurusan_judul = $i['jurusan_judul'];
	$jurusan_deskripsi= $i['jurusan_deskripsi'];
	$jurusan_author= $i['jurusan_author'];
	$jurusan_photo = $i['jurusan_photo'];
?>

<!--Modal Hapus Jurusan-->
<div class="modal fade" id="ModalHapus<?php echo $jurusan_id; ?>" tabindex="-1" role="dialog"
		 aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true"><span class="fa fa-close"></span></span></button>
					<h4 class="modal-title" id="myModalLabel">Hapus Jurusan</h4>
				</div>
				<form class="form-horizontal"
					  action="<?php echo base_url() . 'admin/jurusan/hapus_jurusan/' . $jurusan_id; ?>" method="post"
					  enctype="multipart/form-data">
					<div class="modal-body">
						<input type="hidden" name="kode" value="<?php echo $jurusan_id; ?>"/>
						<p>Apakah Anda yakin mau menghapus Jurusan <b><?php echo $jurusan_judul; ?></b> ?</p>

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
<script src="<?php echo base_url() . 'assets/plugins/datepicker/bootstrap-datepicker.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.js' ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
<!-- page script -->
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
		

		$('#datepicker').datepicker({
			autoclose: true,
			format: 'yyyy-mm-dd'
		});
		$('#datepicker2').datepicker({
			autoclose: true,
			format: 'yyyy-mm-dd'
		});
		$('.datepicker3').datepicker({
			autoclose: true,
			format: 'yyyy-mm-dd'
		});
		$('.datepicker4').datepicker({
			autoclose: true,
			format: 'yyyy-mm-dd'
		});
		$(".timepicker").timepicker({
			showInputs: true
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
			text: "Pengumuman Berhasil disimpan ke database.",
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
			text: "Pengumuman berhasil di update",
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
			text: "Pengumuman Berhasil dihapus.",
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
