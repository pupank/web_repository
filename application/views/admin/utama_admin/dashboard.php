<!-- page content -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="right_col" role="main">
    <!-- 3 Content atas -->
    <div class="row">
        <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i></div>
                <div class="count"><?= count($mahasiswa); ?></div>
                <h3>Data Anggota</h3>
                <a href="<?= base_url('Cmhs_adm'); ?>">
                    <p><i class="fa fa-angle-double-right "></i> Detail</p>
                </a>
            </div>
        </div>
        <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fas fa-address-card"></i>
                </div>
                <div class="count"><?= count($dosen); ?></div>
                <h3>Data Dosen</h3>
                <a href="<?= base_url('Cdosen_adm'); ?>">
                    <p><i class="fa fa-angle-double-right "></i> Detail</p>
                </a>
            </div>
        </div>
        <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-file-text-o"></i></div>
                <div class="count"><?= count($skripsi); ?></div>
                <h3>Data Skripsi</h3>
                <a href="<?= base_url('Cskripsi_adm'); ?>">
                    <p><i class="fa fa-angle-double-right "></i> Detail</p>
                </a>
            </div>
        </div>
        <!-- akhir 3 konten atas -->

    </div>
    <?= $this->session->flashdata('gagal'); ?>
</div>
</div>
</div>
<!-- /page content -->
<!-- sample modal content -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Ubah Password</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('CUtama_adm/ubahPassword'); ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="id" id="id" value="<?= $admin['id_admin']; ?>">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Password lama:</label>
                        <input type="password" class="form-control" name="pass_lama" id="pass_lama">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Password baru:</label>
                        <input type="password" class="form-control" name="pass_baru" id="pass_baru"></input>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" type="submit" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL ADD PENGGUNA-->