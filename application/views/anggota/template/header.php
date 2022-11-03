<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/1543744717.ico'); ?>">
    <title><?= $judul; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('template_anggota/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('template_anggota/assets/plugins/dropify/dist/css/dropify.min.css'); ?>">


    <!--alerts CSS -->
    <link href="<?= base_url('template_anggota/assets/plugins/sweetalert/sweetalert.css'); ?>" rel="stylesheet" type="text/css">

    <!-- chartist CSS -->
    <link href=".<?= base_url('template_anggota/assets/plugins/chartist-js/dist/chartist.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('template_anggota/assets/plugins/chartist-js/dist/chartist-init.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('template_anggota/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css'); ?>" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="<?= base_url('template_anggota/assets/plugins/c3-master/c3.min.css'); ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('template_anggota/css/style.css'); ?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= base_url('template_anggota/css/colors/red.css'); ?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon --><b>
                            <!-- Light Logo icon -->
                            <i class="fa fa-graduation-cap light-logo"></i>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span class="light-logo">
                            <!-- Light Logo text -->
                            SI Repository</span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php if ($user['foto_mhs']) : ?>
                                    <img src="<?= base_url(); ?>asset/upload/foto/<?= $user['foto_mhs']; ?>" alt="user" class="profile-pic" width="150" />
                                <?php else : ?>
                                    <img src="<?= base_url(); ?>template/asset/images/user.png" alt="user" class="profile-pic" width="150" />
                                <?php endif; ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img">
                                                <?php if ($user['foto_mhs']) : ?>
                                                    <img src="<?= base_url(); ?>asset/upload/foto/<?= $user['foto_mhs']; ?>" class="img-circle" width="150" />
                                                <?php else : ?>
                                                    <img src="<?= base_url(); ?>asset/upload/foto/default.jpg" class="img-circle" width="150" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="u-text">
                                                <h4><?= $user['nama_mhs']; ?></h4>
                                                <p class="text-muted"><?= $user['npm']; ?></p><a href="<?= base_url('cprofile_mhs'); ?>" class="btn btn-rounded btn-danger btn-sm">Lihat Profil</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url('CLogin_mhs/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->