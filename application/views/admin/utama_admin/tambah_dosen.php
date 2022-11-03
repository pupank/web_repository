<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/1543744717.ico'); ?>">

    <title>Form Tambah Data Dosen</title>

    <!-- Bootstrap -->
    <link href="<?= base_url('template/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('template/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('template/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="<?= base_url('template/build/css/custom.min.css'); ?>" rel="stylesheet">
</head>

<body class="nav-md footer_fixed">

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Tambah Data Dosen</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />

                            <form method="post" action="<?= base_url('Cdosen_adm/tambah'); ?>" class="form-horizontal form-label-left">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIP
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nip" name="nip" class="form-control col-md-7 col-xs-12" value="<?= set_value('nip'); ?>">
                                        <small class="form-text text-danger"><?= form_error('nip'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nm_dosen">Nama Dosen</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nm_dosen" name="nm_dosen" class="form-control col-md-7 col-xs-12" value="<?= set_value('nm_dosen'); ?>">
                                        <small class="form-text text-danger"><?= form_error('nm_dosen'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pangkat">Pangkat</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" id="pangkat" name="pangkat" required>
                                            <option value="">--Pilih Pangkat--</option>
                                            <?php foreach ($pangkat as $pkt) : ?>
                                                <option value="<?= $pkt; ?>"><?= $pkt; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="golongan">Golongan</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" id="golongan" name="golongan" required>
                                            <option value="">--Pilih Golongan--</option>
                                            <?php foreach ($golongan as $gol) : ?>
                                                <option value="<?= $gol; ?>"><?= $gol; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jabatan">Jabatan</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" id="jabatan" name="jabatan" required>
                                            <option value="">--Pilih Jabatan--</option>
                                            <?php foreach ($jabatan as $jbtn) : ?>
                                                <option value="<?= $jbtn; ?>"><?= $jbtn; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <a class="btn btn-primary" href="<?= base_url('Cdosen_adm'); ?>">Cancel</a>
                                        <button type="submit" name="tambah" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /page content -->


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

    <!-- jQuery -->
    <script src="<?= base_url('template/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('template/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('template/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('template/vendors/nprogress/nprogress.js'); ?>"></script>
    <!-- validator -->
    <script src="<?= base_url('template/vendors/validator/validator.js'); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('template/build/js/custom.min.js'); ?>"></script>

    <!-- Sweet Alert 2 -->
    <script src="<?= base_url(); ?>asset/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>asset/js/myscript.js"></script>

</body>

</html>