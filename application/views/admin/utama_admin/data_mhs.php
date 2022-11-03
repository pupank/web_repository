<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/1543744717.ico'); ?>">

    <title>Halaman Data Mahasiswa</title>
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

<body class="nav-md">

    <div class="right_col" role="main">
        <div class="clearfix"></div>

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
            <!-- <div class="alert alert-success alert-dismissible fade in" role="alert">
                                                                                                                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                                                                                                                                                </button>
                                                                                                                                                                  Data Mahasiswa <strong>berhasil </strong><?= $this->session->flashdata('flash'); ?>.
                                                                                                                                                              </div>  -->
        <?php endif; ?>

        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Mahasiswa</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <a href="<?= base_url('Cmhs_adm/tambah') ?>" class="btn btn-primary">Tambah Data</a>
                    <a href="<?= base_url('Cmhs_adm/cetakpdf') ?>" target="blank" class="btn btn-success">Cetak Data</a>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Foto</th>
                                <th>NPM</th>
                                <th>Nama</th>
                                <th>Th Angkatan</th>
                                <th>Masa Studi</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                                <th>Foto_Sidang</th>
                                <th>Password Akun</th>
                                <th>Tgl Lahir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mahasiswa as $mhs) : ?>
                                <tr>
                                    <td></td>
                                    <td>
                                        <?php if ($mhs['foto_mhs']) : ?>
                                            <a href="<?= base_url(); ?>asset/upload/foto/<?= $mhs['foto_mhs']; ?>"><img src="<?= base_url(); ?>asset/upload/foto/<?= $mhs['foto_mhs']; ?>" width="100" height="100" /></a>
                                        <?php else : ?>
                                            <img src="<?= base_url(); ?>template/asset/images/user.png" width="100" height="100" />
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $mhs['npm'] ?></td>
                                    <td><?= $mhs['nama_mhs'] ?></td>
                                    <td><?= date("Y", strtotime($mhs['th_angkatan'])); ?></td>
                                    <?php if ($mhs['masa_studi']) : ?>
                                        <td><?= $mhs['masa_studi']; ?> Tahun</td>
                                    <?php else : ?>
                                        <td>- Tahun</td>
                                    <?php endif; ?>
                                    <td><?= $mhs['alamat'] ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>Cmhs_adm/ubah/<?= $mhs['npm']; ?>" class="btn btn-primary">Edit</a>
                                        <a class="btn btn-danger tombol-hapus" href="<?= base_url(); ?>Cmhs_adm/hapus/<?= $mhs['npm']; ?>">Hapus</button>
                                    </td>
                                    <td>
                                        <?php if ($mhs['foto_sidang']) : ?>
                                            <a href="<?= base_url(); ?>asset/upload/foto_sidang/<?= $mhs['foto_sidang']; ?>"><img src="<?= base_url(); ?>asset/upload/foto_sidang/<?= $mhs['foto_sidang']; ?>" width="100" height="100" /></a>
                                        <?php else : ?>
                                            Tidak ada data
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $mhs['password'] ?></td>
                                    <td><?= $mhs['tgl_lahir'] ?></td>
                                </tr>
                            <?php endforeach; ?>
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


    <!--  -->
    <!-- jQuery -->
    <script src="<?= base_url('template/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('template/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('template/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('template/vendors/nprogress/nprogress.js'); ?>"></script>
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

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('template/build/js/custom.min.js'); ?>"></script>

    <!-- Sweet Alert 2 -->
    <script src="<?= base_url(); ?>asset/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>asset/js/myscript.js"></script>