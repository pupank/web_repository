<?php foreach ($skripsi as $s) : ?>
    <div class="mt-5"></div>
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h4 class="text-center">
                    <strong style="text-transform: uppercase;"><?= $s['judul']; ?></strong>
                </h4>
                <br><br>
                <h5 class="text-center"> Abstrak</h5><br><br>
                <p class="text-justify"><?= $s['abstrak']; ?></p>
                <div class="row">
                    <div class="col-md-3">&emsp;<i class="fa fa-chevron-right"></i>Nama Mahasiswa</div>:
                    <div class="col-md"><?= $s['nama_mhs']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-3">&emsp;<i class="fa fa-chevron-right"></i>Npm Mahasiswa</div>:
                    <div class="col-md"><?= $s['npm']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-3">&emsp;<i class="fa fa-chevron-right"></i>Dosen Pembimbing</div>:
                    <div class="col-md"><?= $s['pemb1']; ?> | <?= $s['pemb2']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-3">&emsp;<i class="fa fa-chevron-right"></i>Ketua Penguji</div>:
                    <div class="col-md"><?= $s['ketua']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-3">&emsp;<i class="fa fa-chevron-right"></i>Sekretaris Penguji</div>:
                    <div class="col-md"><?= $s['seks']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-3">&emsp;<i class="fa fa-chevron-right"></i>Anggota</div>:
                    <div class="col-md"><?= $s['pengu1']; ?> | <?= $s['pengu2']; ?></div>
                </div>
                <!-- <div class="row">
                            <div class="col-md-3">&emsp;</i>Unduh Jurnal</div>:
                            <div class="col-md"><a href="<?= base_url(); ?>Chasil_skripsi/download/<?= $s['id']; ?>"><i class="fa fa-download"></i><?= $s['jurnal']; ?></a></div>
                        </div> -->
                <br><br>
                <p class="text-center text-danger">Untuk mengetahui informasi lebih lanjut tentang skripsi ini silahkan datang ke Prodi Pendidikan Non Formal Universitas Bengkulu atau ke Perpustakaan Universitas Bengkulu. Terima Kasih</p>
            </div>
        </div>
    </div>
<?php endforeach; ?>