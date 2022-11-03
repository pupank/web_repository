<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url(<?= base_url('template_anggota/assets/images/background/user-info.jpg'); ?>) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img">
                <?php if ($user['foto_mhs']) : ?>
                    <img src="<?= base_url(); ?>asset/upload/foto/<?= $user['foto_mhs']; ?>" class="img-circle" width="150" />
                <?php else : ?>
                    <img src="<?= base_url(); ?>template/asset/images/user.png" class="img-circle" width="150" />
                <?php endif; ?>
            </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?= $this->session->userdata('npm'); ?></a>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="<?= base_url('cdashboard_mhs'); ?>" aria-expanded="false"><i class="fa fa-desktop"></i><span class="hide-menu">Dashboard </span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?= base_url('cprofile_mhs'); ?>" aria-expanded="false"><i class="fa fa-drivers-license-o "></i><span class="hide-menu">Profile</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?= base_url('cupload_mhs'); ?>" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">Upload Data</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?= base_url('cbukti'); ?>" aria-expanded="false"><i class="fa fa-file-text-o"></i><span class="hide-menu">Cetak Bukti</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->