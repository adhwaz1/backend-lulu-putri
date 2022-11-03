<ul class="sidebar-menu">

	<li>
		<a href="<?php echo base_url() . 'admin/dashboard' ?>">
			<i class="fa fa-home"></i> <span>Dashboard</span>
			<span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
		</a>
	</li>

	<li>
		<a href="<?php echo base_url() . 'admin/pengguna' ?>">
			<i class="fa fa-users"></i> <span>Pengguna</span>
			<span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
		</a>
	</li>

	<li>
		<a href="<?php echo base_url() . 'admin/ekskul' ?>">
			<i class="fa fa-folder"></i> <span>Ekstrakulikuler</span>
			<span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
		</a>
	</li>
	<li>
		<a href="<?php echo base_url() . 'admin/agenda' ?>">
			<i class="fa fa-calendar"></i> <span>Agenda</span>
			<span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
		</a>
	</li>
	<li class="treeview">
		<a href="#">
			<i class="fa fa-newspaper-o"></i>
			<span>Berita</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
		</a>
		<ul class="treeview-menu">

			<li><a href="<?php echo base_url() . 'admin/tulisan' ?>"><i class="fa fa-list"></i> List Berita</a></li>

			<?php
			if ($this->session->userdata('akses') == '1') {
				?>
				<li><a href="<?php echo base_url() . 'admin/tulisan/add_tulisan' ?>"><i class="fa fa-thumb-tack"></i>
						Post Berita</a></li>
			<?php } ?>


			<li><a href="<?php echo base_url() . 'admin/kategori' ?>"><i class="fa fa-wrench"></i> Kategori</a></li>
		</ul>
	</li>
	<li>
		<a href="<?php echo base_url() . 'admin/jurusan' ?>">
			<i class="fa fa-volume-up"></i> <span>Kompetensi Keahlian</span>
			<span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
		</a>
	</li>


	<li>
		<a href="<?php echo base_url() . 'admin/guru' ?>">
			<i class="fa fa-graduation-cap"></i> <span>Data Guru</span>
			<span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
		</a>
	</li>

	<li>
		<a href="<?php echo base_url() . 'admin/pegawai' ?>">
			<i class="fa fa-users"></i> <span>Data Staf Kependidikan</span>
			<span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
		</a>
	</li>


	<li>
		<a href="<?php echo base_url() . 'admin/komentar' ?>">
			<i class="fa fa-comments"></i> <span>Komentar</span>
			<span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
		</a>
	</li>

	<li>
		<a href="<?php echo base_url() . 'admin/slider' ?>">
			<i class="fa fa-dashboard"></i> <span>Data Slider</span>
			<span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
		</a>
	</li>

	<?php
	if ($this->session->userdata('akses') == '2') {
		?>
		<li>
			<a href="<?php echo base_url() . 'admin/sambutan' ?>">
				<i class="fa fa-graduation-cap"></i> <span>Sambutan Kepala Sekolah </span>
				<span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
			</a>
		</li>

	<?php } ?>


</ul>
