<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Skripsi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <a href="<?= base_url('claporan/cetakpdf'); ?>" class="btn btn-success" target="blanks"><i class="fa fa-print"></i> Cetak Laporan</a>
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal Upload</th>
                                <th>Tanggal Sidang</th>
                                <th>Npm</th>
                                <th>Nama</th>
                                <th>Judul Skripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            if (!empty($skripsi)) : ?>
                                <?php foreach ($skripsi as $s) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?= date("d-m-Y", strtotime($s['tgl_upload'])); ?></td>
                                        <td><?= date("d-m-Y", strtotime($s['tgl_sidang'])); ?></td>
                                        <td><?= $s['npm'] ?></td>
                                        <td><?= $s['nama_mhs'] ?></td>
                                        <td><?= $s['judul'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- footer content -->
        <!-- <footer>
            <div class="pull-right">
                © Copyright 2019. | KP Informatika | Sistem Informasi Repository Skripsi Jurusan Teknologi Pertanian Universitas Bengkulu.
            </div>
            <div class="clearfix"></div>
        </footer> -->
        <!-- /footer content -->
    </div>
</div>
</div>
<!-- /page content -->