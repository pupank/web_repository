<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col menu_fixed">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="#" class="site_title"><i class="fa fa-graduation-cap"></i> <span>SI Repository</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
          <div class="profile_pic">
            <?php if ($admin['level'] == 'admin') : ?>
              <img src="<?= base_url('asset/images/admin.png') ?>" alt="..." class="img-circle profile_img">
            <?php else : ?>
              <img src="<?= base_url('template/asset/images/7.jpg') ?>" alt="..." class="img-circle profile_img">
            <?php endif; ?>
          </div>
          <div class="profile_info">
            <span>Welcome,</span>
            <h2><?= $this->session->userdata('username'); ?></h2>
          </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
              <li><a href="<?= base_url('CUtama_adm'); ?>"><i class="fa fa-home"></i> Beranda </a></li>
              <?php if ($admin['level'] == 'admin') : ?>
                <li><a href="<?= base_url('Cpetugas_adm'); ?>"><i class="fa fa-users"></i> Petugas </a></li>
              <?php endif; ?>
              <li><a><i class="fa fa-desktop"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="<?= base_url('Cdosen_adm'); ?>">Data Dosen</a></li>
                  <li><a href="<?= base_url('Cmhs_adm'); ?>">Data Mahasiswa</a></li>
                  <li><a href="<?= base_url('Cskripsi_adm'); ?>">Data Skripsi</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url('claporan'); ?>"><i class="fa fa-laptop"></i> Laporan</a></li>
            </ul>
          </div>
        </div>
        <!-- /sidebar menu -->
      </div>
    </div>

    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <nav>
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>

          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <?php if ($admin['level'] == 'admin') : ?>
                  <img src="<?= base_url('asset/images/admin.png') ?>" alt="">
                <?php else : ?>
                  <img src="<?= base_url('template/asset/images/7.jpg') ?>" alt="">
                <?php endif; ?>
                <?= $this->session->userdata('username'); ?>
                <span class=" fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a data-toggle="modal" data-target="#modal" data-whatever="@mdo">Ubah Password</a></li>
                <li><a href="<?= base_url('CLogin_petugas/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- /top navigation -->