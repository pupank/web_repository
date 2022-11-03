<html>

<head>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('template_anggota/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('template_anggota/assets/plugins/dropify/dist/css/dropify.min.css'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/1543744717.ico'); ?>">
    <title>Cetak Surat Tanda Bukti Upload</title>
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


<body onload="window.print();setTimeout(window.close, 0);">
    <div class="container">
        <?php foreach ($skripsi as $s) : ?>
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
                &emsp;Nama Mahasiswa :
                <?= $s['nama_mhs']; ?>
            </div>
            <div class="row">
                &emsp;Npm Mahasiswa : 
                <?= $s['npm']; ?>
            </div>
            <div class="row">
                &emsp;Judul Skripsi :
                <?= $s['judul']; ?>
            </div>
            <br>

            <p>Telah melakukan upload data file skripsi pada website <i>repository</i> skripsi Prodi Pendidikan Non Formal Universitas Bengkulu pada tanggal <?= date("d M Y", strtotime($s['tgl_upload'])); ?>.</p>

            <p>Demikianlah surat ini dibuat untuk dipergunakan sebagai syarat untuk proses wisuda.</p>

            <h4 style="text-align:right">
                <p>Bengkulu, <?php
                                $tgl = date('d-m-Y');
                                echo $tgl; ?></p>
                </h5>
        </div>
    <?php endforeach; ?>
    </div>
</body>

</html>