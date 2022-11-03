<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/1543744717.ico'); ?>">

    <title>Form Tambah Data Mahasiswa</title>

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
                            <h2>Form Tambah Data Mahasiswa</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <script type="text/javascript">
                                function fungsi(element){
                                    var test = document.getElementById(\"npm\").value;
                                    if( test.length > 9 ) {
                                        alert('NPM lebih dari 9 karakter');
                                    }
                            </script>

                            <form method="post" action="<?= base_url('Cmhs_adm/tambah'); ?>" class="form-horizontal form-label-left">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="npm">NPM
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="npm" name="npm" class="form-control col-md-7 col-xs-12" value="<?= set_value('npm'); ?>">
                                        <small class="form-text text-danger"><?= form_error('npm'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="th_angkatan">Tahun Angkatan
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="th_angkatan" name="th_angkatan" class="form-control col-md-7 col-xs-12" value="<?= set_value('th_angkatan'); ?>">
                                        <small class="form-text text-danger"><?= form_error('th_angkatan'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_mhs">Nama Mahasiswa</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nama_mhs" name="nama_mhs" class="form-control col-md-7 col-xs-12" value="<?= set_value('nama_mhs'); ?>">
                                        <small class="form-text text-danger"><?= form_error('nm_dosen'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_lahir">Tanggal Lahir
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="th_angkatan">Password
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="password" name="password" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fakultas">Fakultas</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="fakultas" name="fakultas" class="form-control col-md-7 col-xs-12" value="KIP" readonly>
                                    </div>
                                </div>
                                   <div class="form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jurusan">Jurusan</label>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                         <input type="text" id="jurusan" name="jurusan" class="form-control col-md-7 col-xs-12" value="FKIP" readonly>
                                     </div>
                                     </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prodi">Program Studi</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="prodi" name="prodi" class="form-control col-md-7 col-xs-12" value="Pendidikan Non Formal" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="form-control" rows="2" name="alamat" id="alamat"><?= set_value('alamat'); ?></textarea>
                                    </div>
                                </div>
                                <div class="hidden">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Foto</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="foto" name="foto" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <a class="btn btn-primary" href="<?= base_url('Cmhs_adm'); ?>">Cancel</a>
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
            © Copyright 2020. | KP Informatika | Sistem Informasi Repository Skripsi Pendidikan Luar Sekolah Universitas Bengkulu.
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

</body>

</html>