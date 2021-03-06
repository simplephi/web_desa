  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/image/icon.png" class="" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>

<li>
          <a href="<?php echo site_url('Home');?>">
            <i class="fa fa-home"></i> <span>Beranda</span>
          </a>
      </li>

      <!-- Konten -->
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-user "></i> <span>Profil Desa</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <!--li class="active"><a href="<?php echo site_url('visi')?>">
                    <i class="fa fa-newspaper-o text-red"></i><span>Visi & Misi</span>
                  </a>
                </li-->
                <li class="treeview">
                <a href="#" >
                    <i class="fa fa-history"></i><span>Sejarah Desa</span>
                      <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
          <ul class="treeview-menu">
                  <li class="active"><a href="<?php echo site_url('Sejarah_Desa')?>">
                    <i class="fa fa-history"></i><span>Sejarah Desa</span>
                  </a>
                </li>
                  <li class="active"><a href="<?php echo site_url('Sejarah_Pemerintahan')?>">
                    <i class="fa fa-history"></i><span>Sejarah Pemerintahan</span>
                  </a>
                </li>
        </ul>
          </li>
                  <li class="active"><a href="<?php echo site_url('Perangkat')?>" >
                    <i class="fa fa-user"></i><span>Perangkat Desa</span>
                  </a>
                </li>
        <li class="active"><a href="<?php echo site_url('Fasilitas')?>" >
                    <i class="fa fa-building"></i><span>Fasilitas Umum</span>
                  </a></li>
        <li class="treeview">
        <a href="#" >
                    <i class="fa fa-money"></i><span>Anggaran desa</span>
          <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
          <ul class="treeview-menu">
                  <li class="active"><a href="<?php echo site_url('Pendapatan')?>">
                    <i class="fa fa-money"></i><span>Pendapatan</span>
                  </a>
                </li>
                  <li class="active"><a href="<?php echo site_url('Belanja')?>">
                    <i class="fa fa-money"></i><span>Belanja</span>
                  </a>
                </li>
        </ul>
          </li>
                </ul>
              </li>
               <li class="treeview">
                <a href="#">
                  <i class="fa fa-list"></i> <span>Demografi Desa</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="treeview"><a href="#">
                    <i class="fa fa-users"></i><span>Jumlah Penduduk</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                
                <ul class="treeview-menu">
                <li><a href="<?php echo site_url('Jenis')?>" >
                    <i class="fa fa-circle"></i><span>Jenis Kelamin</span>
                  </a></li>
                  <li><a href="<?php echo site_url('Usia')?>" >
                    <i class="fa fa-circle"></i><span>Usia</span>
                  </a></li>  
                </ul>
                </li>
        <li><a href="<?php echo site_url('Topografi')?>" >
                    <i class="fa fa-circle"></i><span>Keadaan Iklim & Topografi</span>
                  </a></li>
                </ul>
              </li>
        <!-- Konten -->
    <!-- Konten -->
              <li>
                <a href="<?php echo site_url('Potensi');?>">
                  <i class="fa fa-circle-o"></i> <span>Potensi Desa</span>
                </a>
              </li>
        <!-- Konten -->
    <li>
          <a href="<?php echo site_url('Pariwisata');?>">
            <i class="fa fa-circle-o"></i> <span>Pariwisata Desa</span>
          </a>
      </li>
    <!-- Konten -->
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-list"></i> <span>Informasi</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="active"><a href="<?php echo site_url('Berita')?>">
                    <i class="fa fa-newspaper-o"></i><span>Berita</span>
                  </a>
                </li>
                  <li><a href="<?php echo site_url('Agenda')?>" >
                    <i class="fa fa-calendar"></i><span>Kegiatan Desa</span>
                  </a></li>
                  <li><a href="<?php echo site_url('Berkas')?>" >
                    <i class="fa fa-book"></i><span>Mekanisme Ngurus Berkas</span>
                  </a>
                </li>
                </ul>
              </l i>
        <!-- Konten -->
    <!-- Konten -->
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-list"></i> <span>Galeri</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Foto')?>" >
                        <i class="fa fa-file-image-o"></i> <span>Foto Desa</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Foto_Kegiatan')?>" >
                      <i class="fa fa-file-image-o"></i> <span>Foto Kegiatan</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Video')?>" >
                      <i class="fa fa-video-camera"></i> <span>Video</span>
                    </a></li>
                  </ul>
                </li>
          <!-- Konten -->


<!--           <li>
          <a href="<?php echo site_url('Home');?>">
            <i class="fa fa-home"></i> <span>Peta Desa</span>
          </a>
      </li> -->

            <li>
          <a href="<?php echo site_url('kontak');?>">
            <i class="fa fa-home"></i> <span>Kontak</span>
          </a>
      </li>
  <li class="">
      <a href="<?php echo site_url('user')?>">
      <i class="menu-icon fa fa-users"></i>
      <span class="menu-text"> User </span>
      </a>
      <b class="arrow"></b>
    </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
