<html>

<head>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/1543744717.ico'); ?>">
    <style type="text/css">
        table {
            font-size: 17px;
            border-collapse: collapse;
            width: 100%;
            margin: 0 auto;
        }

        table th {
            border: 1px solid #000;
            padding: 7px;
            font-weight: bold;
            text-align: center;
        }

        table td {
            border: 1px solid #000;
            padding: 7px;
            vertical-align: top;
        }

        hr {
            border-style: solid;
            border-color: black;
            border-width: 3px;
        }
    </style>
</head>


<body>
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor">Cetak Bukti</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('cdashboard_mhs'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Cetak Bukti</li>
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <?php if (count($skripsi) < 1) : ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="alert alert-danger text-center"><strong>Anda belum mengunggah data laporan akhir skripsi !</strong><br><a href="<?= base_url('cupload_mhs'); ?>"><small>Silahkan upload file anda terlebih dahulu</small></a></div>
                    </div>
                </div>
            <?php else : ?>
                <?php foreach ($skripsi as $s) : ?>
                    <?php if ($s['status'] == "belum") : ?>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="alert alert-danger text-center"><strong>Silahkan tunggu untuk petugas memverifikasi berkas anda</strong></div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="container">
                            <img class="img-responsive" style="float: left; width: 120px; height: 120px; margin-right: -100px;" src="<?= base_url('asset/unib.png'); ?>">
                            <div class="text-center">KEMENTRIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI</div>
                            <h4 style="text-align:center">UNIVERSITAS BENGKULU<br>FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN<br>PENDIDIKAN NON FORMAL<br>
                                <FONT SIZE="2"><I>Jalan WR. Supratman, Kandang Limun Bengkulu 38371 <br> Telpon. (0736) 21170,21290, Ext. 214, Faksimile(0736) 22105 <br> Laman : <a>http://pls.fkip.unib.ac.id</a>, e-mail : <a>fkip@unib.ac.id</a></I></FONT>
                            </h4>
                            <hr>
                            <div class="text-center">
                                <h4>Surat Tanda Bukti Upload</h4>
                            </div><br>
                            Dengan ini menyatakan bahwa mahasiswa atas nama : <br><br>
                            <div class="row">
                                <div class="col-md-3">&emsp;Nama Mahasiswa</div>:
                                <div class="col-md"><?= $s['nama_mhs']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">&emsp;Npm Mahasiswa</div>:
                                <div class="col-md"><?= $s['npm']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">&emsp;Judul Skripsi</div>:
                                <div class="col-md"><?= $s['judul']; ?></div>
                            </div>
                            <br>

                            <p>Telah melakukan upload data file skripsi pada website <i>repository</i> skripsi Prodi Pendidikan Non Formal Fakultas Keguruan Dan Ilmu Pendidikan Universitas Bengkulu pada tanggal <?= date("d M Y", strtotime($s['tgl_upload'])); ?>.</p>

                            <p>Demikianlah surat ini dibuat untuk dipergunakan sebagai syarat untuk proses wisuda.</p>

                            <h4 style="text-align:right">
                                <p>Bengkulu, <?php
                                                $tgl = date('d-m-Y');
                                                echo $tgl; ?></p>
                                </h5>
                        </div>
                        <button class="btn btn-success"><a href="<?= base_url(); ?>cbukti/cetak/<?= $s['id']; ?>" target="blank">
                                <i class="fa fa-print"></i>
                                Cetak
                        </button></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>