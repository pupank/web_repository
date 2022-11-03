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
                <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('cdashboard_mhs'); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <?php if ($user['foto_mhs']) : ?>
                                <img src="<?= base_url(); ?>asset/upload/foto/<?= $user['foto_mhs']; ?>" class="img-circle" width="150" />
                            <?php else : ?>
                                <img src="<?= base_url(); ?>asset/upload/foto/default.jpg" class="img-circle" width="150" />
                            <?php endif; ?>
                            <h4 class="card-title m-t-10"><?= $user['nama_mhs']; ?></h4>
                            <h6 class="card-subtitle"><?= $user['npm']; ?></h6>
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body">
                        <small class="text-muted">Tanggal Lahir</small>
                        <h6><?= date("D, d M Y", strtotime($user['tgl_lahir'])); ?></h6>
                        <small class="text-muted p-t-30 db">Tahun Angkatan</small>
                        <h6><?= date("Y", strtotime($user['th_angkatan'])); ?></h6>
                        <small class="text-muted p-t-30 db">Fakultas</small>
                        <h6><?= $user['fak_mhs']; ?></h6>
                        <small class="text-muted p-t-30 db">Program Studi</small>
                        <h6><?= $user['prodi_mhs']; ?></h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Ubah Profil</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password" role="tab">Ganti Password</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" action="<?= base_url('cprofile_mhs/ubah'); ?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12" for="npm"><b>NPM</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?= $user['npm']; ?>" class="form-control form-control-line" name="npm" id="npm" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_mhs" class="col-md-12"><b>Nama Mahasiswa</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?= $user['nama_mhs']; ?>" class="form-control form-control-line" name="nama_mhs" id="nama_mhs">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fakultas_mhs" class="col-md-12"><b>Fakultas</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?= $user['fak_mhs']; ?>" class="form-control form-control-line" name="fakultas_mhs" id="fakultas_mhs">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jurusan_mhs" class="col-md-12"><b>Jurusan</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?= $user['jur_mhs']; ?>" class="form-control form-control-line" name="jurusan_mhs" id="jurusan_mhs">
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label for="prodi_mhs" class="col-md-12"><b>Program Studi</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?= $user['prodi_mhs']; ?>" class=" form-control form-control-line" name="prodi_mhs" id="prodi_mhs">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat" class="col-md-12"><b>Alamat</b></label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" name="alamat" id="alamat"><?= $user['alamat']; ?></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?= $user['foto_mhs']; ?>" class=" form-control form-control-line" name="foto_mhs" id="foto_mhs">

                                    <div class="form-group">
                                        <div class="col-lg col-md">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title"><b>Upload Foto Mahasiswa</b>
                                                    </h4>
                                                    <label for="input-file-max-fs">Foto Maksimal 2Mb<br><small><b>(Kosongkan jika tidak dirubah)</b></small></label>
                                                    <input type="file" id="foto_mhs" name="foto_mhs" data-height="250" class="dropify" data-max-file-size="5M" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="submit" class="btn btn-success">Ubah Data Profil</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--Ganti Password-->
                        <div class="tab-pane" id="password" role="tabpanel">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" action="<?= base_url('cprofile_mhs/ubahpassword'); ?>">
                                    <input type="hidden" value="<?= $user['npm']; ?>" name="npm" id="npm">
                                    <div class="form-group">
                                        <label class="col-md-12" for="npm"><b>Password Lama</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?= $user['password']; ?>" class="form-control form-control-line" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="npm"><b>Password Baru</b></label>
                                        <div class="col-md-12">
                                            <input type="password" placeholder="Password baru" class="form-control form-control-line" id="password" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="submit" class="btn btn-success">Ubah Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
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