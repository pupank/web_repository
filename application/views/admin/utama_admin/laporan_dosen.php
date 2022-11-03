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

<body onload="window.print();setTimeout(window.close, 0);">
    <img class="" style="float: left; width: 120px; height: 120px; margin-right: -100px;" src="<?= base_url('asset/unib.png'); ?>">
    <h3 style="text-align:center">LAPORAN DATA DOSEN<br> PRODI PENDIDIKAN NON FORMAL <br>
        UNIVERSITAS BENGKULU<br>
        <FONT SIZE="3"><I>Jl.WR. SUPRATMAN BENGKULU 38371 <br> Telp/Fax: (0736) 24144</FONT>
    </h3>

    </h3>

    <hr>
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIP</th>
                <th>Nama Dosen</th>
                <th>Pangkat</th>
                <th>Golongan</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $no = 1;
                foreach ($data as $ddosen) {
                    ?>
                    <td><?php echo $no++; ?></td>
                    <td><?= $ddosen['nip'] ?></td>
                    <td><?= $ddosen['nama_dosen'] ?></td>
                    <td><?= $ddosen['pangkat'] ?></td>
                    <td><?= $ddosen['golongan'] ?></td>
                    <td><?= $ddosen['jabatan'] ?></td>

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