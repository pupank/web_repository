<html>

<head>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/1543744717.ico'); ?>">
    <title>Cetak Laporan Skripsi</title>
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
    </style>
</head>

<body onload="window.print();">
    <img class="" style="float: left; width: 120px; height: 120px; margin-right: -100px;" src="<?= base_url('asset/unib.png'); ?>">
    <h3 style="text-align:center">LAPORAN DATA ANGGOTA<br> PRODI PENDIDIKAN NON FORMAL <br>
        UNIVERSITAS BENGKULU<br>
        <FONT SIZE="3"><I>Jl.WR. SUPRATMAN BENGKULU 38371 <br> Telp/Fax: (0736) 24144</FONT>
    </h3>
    <hr>
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
        <thead>
            <tr>
                <th>No.</th>
                <th>Foto</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Th Angkatan</th>
                <th>Masa Studi</th>
                <th>Foto_Sidang</th>
                <th>Password Akun</th>
                <th>Tgl Lahir</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $no = 1;
                foreach ($data as $mhs) {
                    ?>
                    <td><?php echo $no++; ?></td>
                    <td>
                        <?php if ($mhs['foto_mhs']) : ?>
                            <a href="<?= base_url(); ?>asset/upload/foto/<?= $mhs['foto_mhs']; ?>"><img src="<?= base_url(); ?>asset/upload/foto/<?= $mhs['foto_mhs']; ?>" width="100" height="100" /></a>
                        <?php else : ?>
                            <img src="<?= base_url(); ?>template/asset/images/user.png" width="100" height="100" />
                        <?php endif; ?>
                    </td>
                    <td><?= $mhs['npm'] ?></td>
                    <td><?= $mhs['nama_mhs'] ?></td>
                    <td><?= $mhs['prodi_mhs'] ?></td>
                    <td><?= date("Y", strtotime($mhs['th_angkatan'])); ?></td>
                    <?php if ($mhs['masa_studi']) : ?>
                        <td><?= $mhs['masa_studi']; ?> Tahun</td>
                    <?php else : ?>
                        <td>- Tahun</td>
                    <?php endif; ?>
                    <td>
                        <?php if ($mhs['foto_sidang']) : ?>
                            <a href="<?= base_url(); ?>asset/upload/foto_sidang/<?= $mhs['foto_sidang']; ?>"><img src="<?= base_url(); ?>asset/upload/foto_sidang/<?= $mhs['foto_sidang']; ?>" width="100" height="100" /></a>
                        <?php else : ?>
                            Tidak ada data
                        <?php endif; ?>
                    </td>
                    <td><?= $mhs['password'] ?></td>
                    <td><?= $mhs['tgl_lahir'] ?></td>
                    <td><?= $mhs['alamat'] ?></td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
    <h3 style="text-align:right">
        <p>Bengkulu, <?php
                        $tgl = date('d-m-Y');
                        echo $tgl; ?></p>


</body>

</html>