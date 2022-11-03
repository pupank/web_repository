<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/1543744717.ico'); ?>">

    <title>Halaman Data Petugas</title>
    <!--  -->
    <!-- Bootstrap -->
    <link href="<?= base_url('template/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('template/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('template/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('template/vendors/iCheck/skins/flat/green.css'); ?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?= base_url('template/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('template/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('template/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('template/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('template/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('template/build/css/custom.min.css'); ?>" rel="stylesheet">
    <!--  -->
</head>

<body class="nav-md footer_fixed">

    <div class="right_col" role="main">
        <div class="clearfix"></div>

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Petugas</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <a href="<?= base_url('Cpetugas_adm/tambah') ?>" class="btn btn-primary">Tambah Data</a>
                        <!-- <a href="<?= base_url('Cpetugas_adm/cetakpdf') ?>" target="_blank" class="btn btn-success">Cetak Data</a> -->
                        <table id="datatable-fixed-header" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                if (!empty($petugas)) : ?>
                                    <?php foreach ($petugas as $p) : ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?= $p['username'] ?></td>
                                            <td><?= $p['password'] ?></td>
                                            <td><?= $p['level'] ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>Cpetugas_adm/ubah/<?= $p['id_admin']; ?>" class="btn btn-primary">Edit</a>
                                                <a href="<?= base_url(); ?>Cpetugas_adm/hapus/<?= $p['id_admin']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    © Copyright 2020. | KP Informatika | Sistem Informasi Repository Skripsi Pendidikan Non Formal Universitas Bengkulu.
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    </div>


    <!--  -->
    <!-- jQuery -->
    <script src="<?= base_url('template/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('template/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('template/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('template/vendors/nprogress/nprogress.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
    <!-- iCheck -->
    <script src="<?= base_url('template/vendors/iCheck/icheck.min.js'); ?>"></script>
    <!-- Datatables -->
    <script src="<?= base_url('template/vendors/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/datatables.net-buttons/js/buttons.flash.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/datatables.net-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/datatables.net-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/datatables.net-scroller/js/dataTables.scroller.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/jszip/dist/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/pdfmake/build/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('template/vendors/pdfmake/build/vfs_fonts.js'); ?>"></script>

    <!-- Sweet Alert 2 -->
    <script src="<?= base_url(); ?>asset/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>asset/js/myscript.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('template/build/js/custom.min.js'); ?>"></script>
    <!--  -->