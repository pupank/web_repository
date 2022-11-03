<link rel="stylesheet" href="<?= base_url('template_anggota/assets/plugins/dropify/dist/css/dropify.min.css'); ?>">
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
                <?php if (count($skripsi) < 1) : ?>
                    <h3 class="text-themecolor m-b-0 m-t-0">Form Upload Data Skripsi</h3>
                <?php elseif (count($skripsi) > 0) : ?>
                    <h3 class="text-themecolor m-b-0 m-t-0">Data Skripsi</h3>
                <?php endif; ?>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('cdashboard_mhs'); ?>">Home</a></li>
                    <?php if (count($skripsi) < 1) : ?>
                        <li class="breadcrumb-item active">Form Upload Data Skripsi</li>
                    <?php elseif (count($skripsi) > 0) : ?>
                        <li class="breadcrumb-item active">Data Skripsi</li>
                    <?php endif; ?>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <script type="text/javascript">
            function CheckColors(val) {
                var element = document.getElementById('lainnya');
                if (val == 'others')
                    element.style.display = 'block';
                else
                    element.style.display = 'none';
            }

            function run() {
                document.getElementById("lainnya").value = document.getElementById("pemb1").value;
            }
        </script>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <?php if (count($skripsi) < 1) : ?>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="alert alert-danger text-center"><strong>Silahkan isi form dibawah ini</strong></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Form Upload Data Skripsi</h4>
                            <form class="floating-labels m-t-40" action="<?= base_url('cupload_mhs'); ?>" method="post" enctype="multipart/form-data">
                                <!-- Input hidden ID SKRIPSI -->
                                <!-- <input type="hidden" name="id" id="id"> -->
                                <!--  -->
                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control" value="<?= $user['npm']; ?>" id="npm" name="npm" readonly>
                                    <span class="bar"></span>
                                    <label for="npm">NPM Mahasiswa</label>
                                </div>
                                <div class="form-group m-b-40">
                                    <select class="form-control p-0" id="pemb1" name="pemb1" onchange='CheckColors(this.value);run()' required>
                                        <option></option>
                                        <?php foreach ($dosen as $dsn) : ?>
                                            <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                        <?php endforeach; ?>
                                        <option value="others">Lainnya..</option>
                                    </select><span class="bar"></span>
                                    <label for="pemb1">Dosen Pembimbing 1</label>
                                    <small class="form-text text-danger"><?= form_error('pemb1'); ?></small>
                                </div>
                                <!-- Start Extended Field Text -->
                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control" id="lainnya" name="pemb1" style="display:none;">
                                    <span class="bar"></span>
                                    <label for="pemb1">Dosen Pembimbing 1</label>
                                </div>
                                <!-- End Extended Field Text Form Dropdown -->
                                <div class="form-group m-b-40">
                                    <select class="form-control p-0" id="pemb2" name="pemb2">
                                        <option></option>
                                        <?php foreach ($dosen as $dsn) : ?>
                                            <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                        <?php endforeach; ?>
                                    </select><span class="bar"></span>
                                    <label for="pemb2">Dosen Pembimbing 2</label>
                                    <small class="form-text text-danger"><?= form_error('pemb2'); ?></small>
                                </div>
                                <div class="form-group m-b-40">
                                    <select class="form-control p-0" id="ketua" name="ketua">
                                        <option></option>
                                        <?php foreach ($dosen as $dsn) : ?>
                                            <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                        <?php endforeach; ?>
                                    </select><span class="bar"></span>
                                    <label for="ketua">Ketua Penguji</label>
                                    <small class="form-text text-danger"><?= form_error('ketua'); ?></small>
                                </div>
                                <div class="form-group m-b-40">
                                    <select class="form-control p-0" id="sekretaris" name="sekretaris">
                                        <option></option>
                                        <?php foreach ($dosen as $dsn) : ?>
                                            <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                        <?php endforeach; ?>
                                    </select><span class="bar"></span>
                                    <label for="sekretaris">sekretaris Penguji</label>
                                    <small class="form-text text-danger"><?= form_error('sekretaris'); ?></small>
                                </div>
                                <div class="form-group m-b-40">
                                    <select class="form-control p-0" id="pengu1" name="pengu1">
                                        <option></option>
                                        <?php foreach ($dosen as $dsn) : ?>
                                            <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                        <?php endforeach; ?>
                                    </select><span class="bar"></span>
                                    <label for="pengu1">Dosen Penguji 1</label>
                                    <small class="form-text text-danger"><?= form_error('pengu1'); ?></small>
                                </div>
                                <div class="form-group m-b-40">
                                    <select class="form-control p-0" id="pengu2" name="pengu2">
                                        <option></option>
                                        <?php foreach ($dosen as $dsn) : ?>
                                            <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                        <?php endforeach; ?>
                                    </select><span class="bar"></span>
                                    <label for="pengu2">Dosen Penguji 2</label>
                                    <small class="form-text text-danger"><?= form_error('pengu2'); ?></small>
                                </div>
                                <div class="form-group m-b-40">
                                    <input type="text" class="form-control" id="judul" name="judul" value="<?= set_value('judul'); ?>">
                                    <span class="bar"></span>
                                    <label for="judul">Judul Skripsi</label>
                                    <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                                </div>
                                <div class="form-group m-b-40">
                                    <input type="date" class="form-control" id="tgl_sidang" name="tgl_sidang" data-toggle="tooltip" data-placement="bottom" title="Tanggal sidang !!">
                                    <span class="help-block"><small><b>Input tanggal Sidang.</b></small></span>
                                </div>
                                <div class="form-group m-b-5">
                                    <textarea class="form-control" rows="10" id="abstrak" name="abstrak"><?= set_value('abstrak'); ?></textarea>
                                    <span class="bar"></span>
                                    <label for="abstrak">Abstrak</label>
                                    <small class="form-text text-danger"><?= form_error('abstrak'); ?></small>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="col-lg col-xs">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4><small class="card-title">File maksimal 20 Mb</small></h4>
                                                <label for="input-file-max-fs"><b>Upload Laporan Akhir</b></label>
                                                <input type="file" id="laporan" name="laporan" data-height="250" class="dropify" data-max-file-size="20M" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-lg col-xs">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4><small class="card-title">File maksimal 10 Mb</small></h4>
                                                <label for="input-file-max-fs"><b>Upload Jurnal</b></label>
                                                <input type="file" id="jurnal" name="jurnal" data-height="250" class="dropify" data-max-file-size="10M" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-1 mt-3">
                                    <div>
                                        <button class="btn btn-success" type="submit" name="submit">
                                            <i class="fa fa-check"></i>
                                            Simpan
                                        </button>
                                    </div>
                                    <div class="ml-2">
                                        <button class="btn btn-inverse" type="reset">
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif (count($skripsi) > 0) : ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="alert alert-primary text-center">Anda telah mengunggah data laporan akhir skripsi <br>
                        <?php foreach ($skripsi as $s) : ?>
                            <?php if ($s['status'] == "belum") : ?>
                                <small>Silahkan tunggu untuk petugas memverifikasi berkas anda<br><b>Mohon cek kembali Data laporan akhir skripsi anda!</b></small></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Form Ubah Data Skripsi</h4>
                                            <form class="floating-labels m-t-40" action="<?= base_url('cupload_mhs/ubah'); ?>" method="post" enctype="multipart/form-data">
                                                <!-- Input hidden ID SKRIPSI -->
                                                <!-- <input type="hidden" name="id" id="id"> -->
                                                <!--  -->
                                                <div class="form-group m-b-40">
                                                    <input type="text" class="form-control" value="<?= $user['npm']; ?>" id="npm" name="npm" readonly>
                                                    <span class="bar"></span>
                                                    <label for="npm">NPM Mahasiswa</label>
                                                </div>
                                                <div class="form-group m-b-40">
                                                    <select class="form-control p-0" id="pemb1" name="pemb1">
                                                        <option></option>
                                                        <?php foreach ($dosen as $dsn) : ?>
                                                            <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select><span class="bar"></span>
                                                    <label for="pemb1">Dosen Pembimbing 1</label>
                                                    <small class="form-text text-danger"><?= form_error('pemb1'); ?></small>
                                                </div>
                                                <div class="form-group m-b-40">
                                                    <select class="form-control p-0" id="pemb2" name="pemb2">
                                                        <option></option>
                                                        <?php foreach ($dosen as $dsn) : ?>
                                                            <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select><span class="bar"></span>
                                                    <label for="pemb2">Dosen Pembimbing 2</label>
                                                    <small class="form-text text-danger"><?= form_error('pemb2'); ?></small>
                                                </div>
                                                <div class="form-group m-b-40">
                                                    <select class="form-control p-0" id="ketua" name="ketua">
                                                        <option></option>
                                                        <?php foreach ($dosen as $dsn) : ?>
                                                            <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select><span class="bar"></span>
                                                    <label for="ketua">Ketua Penguji</label>
                                                    <small class="form-text text-danger"><?= form_error('ketua'); ?></small>
                                                </div>
                                                <div class="form-group m-b-40">
                                                    <select class="form-control p-0" id="sekretaris" name="sekretaris">
                                                        <option></option>
                                                        <?php foreach ($dosen as $dsn) : ?>
                                                            <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select><span class="bar"></span>
                                                    <label for="sekretaris">sekretaris Penguji</label>
                                                    <small class="form-text text-danger"><?= form_error('sekretaris'); ?></small>
                                                </div>
                                                <div class="form-group m-b-40">
                                                    <select class="form-control p-0" id="pengu1" name="pengu1">
                                                        <option></option>
                                                        <?php foreach ($dosen as $dsn) : ?>
                                                            <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select><span class="bar"></span>
                                                    <label for="pengu1">Dosen Penguji 1</label>
                                                    <small class="form-text text-danger"><?= form_error('pengu1'); ?></small>
                                                </div>
                                                <div class="form-group m-b-40">
                                                    <select class="form-control p-0" id="pengu2" name="pengu2">
                                                        <option></option>
                                                        <?php foreach ($dosen as $dsn) : ?>
                                                            <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select><span class="bar"></span>
                                                    <label for="pengu2">Dosen Penguji 2</label>
                                                    <small class="form-text text-danger"><?= form_error('pengu2'); ?></small>
                                                </div>
                                                <div class="form-group m-b-40">
                                                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $s['judul']; ?>">
                                                    <span class="bar"></span>
                                                    <label for="judul">Judul Skripsi</label>
                                                    <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                                                </div>
                                                <div class="form-group m-b-40">
                                                    <input type="date" value="<?= $s['tgl_sidang']; ?>" class="form-control" id="tgl_sidang" name="tgl_sidang" data-toggle="tooltip" data-placement="bottom" title="Tanggal sidang !!">
                                                    <span class="help-block"><small><b>Input tanggal Sidang.</b></small></span>
                                                </div>
                                                <div class="form-group m-b-5">
                                                    <textarea class="form-control" rows="10" id="abstrak" name="abstrak"><?= $s['abstrak']; ?></textarea>
                                                    <span class="bar"></span>
                                                    <label for="abstrak">Abstrak</label>
                                                    <small class="form-text text-danger"><?= form_error('abstrak'); ?></small>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <div class="col-lg col-xs">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4><small class="card-title">File maksimal 20 Mb</small></h4>
                                                                <label for="input-file-max-fs"><b>Upload Laporan Akhir</b></label>
                                                                <input type="file" id="laporan" name="laporan" data-height="250" class="dropify" data-max-file-size="20M">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-lg col-xs">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4><small class="card-title">File maksimal 10 Mb</small></h4>
                                                                <label for="input-file-max-fs"><b>Upload Jurnal</b></label>
                                                                <input type="file" id="jurnal" name="jurnal" data-height="250" class="dropify" data-max-file-size="10M">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ml-1 mt-3">
                                                    <div>
                                                        <button class="btn btn-success" type="submit" name="submit">
                                                            <i class="fa fa-check"></i>
                                                            Ubah
                                                        </button>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="btn btn-inverse" type="reset">
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <a href="<?= base_url('cbukti'); ?>"><small>Silahkan cetak tanda bukti upload</small></a>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Start Page Content -->
                        <!-- ============================================================== -->
                        <div class="text-center">Tanggal Upload <br>

                            <?= date("D, d M Y", strtotime($s['tgl_upload'])); ?>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        Nama
                                        <div class="alert alert-success">
                                            <?= $user['nama_mhs']; ?>
                                        </div>
                                        NPM
                                        <div class="alert alert-success">
                                            <?= $user['npm']; ?>
                                        </div>
                                        Dosen Pembimbing 1
                                        <div class="alert alert-success">
                                            <?= $s['pemb1']; ?>
                                        </div>
                                        Dosen Pembimbing 2
                                        <div class="alert alert-success">
                                            <?= $s['pemb2']; ?>
                                        </div>
                                        Ketua Penguji
                                        <div class="alert alert-success">
                                            <?= $s['ketua']; ?>
                                        </div>
                                        Sekretaris Penguji
                                        <div class="alert alert-success">
                                            <?= $s['seks']; ?>
                                        </div>
                                        Dosen Penguji 1
                                        <div class="alert alert-success">
                                            <?= $s['pengu1']; ?>
                                        </div>
                                        Dosen Penguji 2
                                        <div class="alert alert-success">
                                            <?= $s['pengu2']; ?>
                                        </div>
                                        Judul Skripsi
                                        <div class="alert alert-success">
                                            <?= $s['judul']; ?>
                                        </div>
                                        Tanggal Sidang
                                        <div class="alert alert-success">
                                            <?= date("D, d M Y", strtotime($s['tgl_sidang'])); ?>
                                        </div>
                                        Masa Studi
                                        <div class="alert alert-success">
                                            <?= $studi->y . " Tahun " . $studi->m . " Bulan"; ?>
                                        </div>




                                        Abstrak
                                        <div class="alert alert-success">
                                            <?= $s['abstrak']; ?>
                                        </div>
                                        Jurnal Skripsi
                                        <div class="alert alert-success">
                                            <a href="<?= base_url(); ?>/asset/upload/file/<?= $s['jurnal']; ?>"><?= $s['jurnal']; ?></a>
                                        </div>
                                        Laporan akhir Skripsi
                                        <div class="alert alert-success">
                                            <a href="<?= base_url(); ?>/asset/upload/file/<?= $s['laporan']; ?>"><?= $s['laporan']; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- End PAge Content -->
                                <!-- ============================================================== -->
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('template_anggota/assets/plugins/jquery/jquery.min.js'); ?>"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('template_anggota/js/jquery.slimscroll.js'); ?>"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('template_anggota/js/waves.js'); ?>"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('template_anggota/js/sidebarmenu.js'); ?>"></script>
    <!--stickey kit -->
    <script src="<?= base_url('template_anggota/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js'); ?>"></script>
    <script src="<?= base_url('template_anggota/assets/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('template_anggota/js/custom.min.js'); ?>"></script>
    <!-- ============================================================== -->
    <!-- Plugins for this page -->
    <!-- ============================================================== -->
    <!-- jQuery file upload -->
    <script src="<?= base_url('template_anggota/assets/plugins/dropify/dist/js/dropify.min.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>