<style>
  a.list {
    font-size: 25px;
    text-transform: uppercase;
  }
</style>

<div class="jumbotron">
  <div class="d-flex justify-content-center h-100">
    <form action="" method="post" class="searchbar">
      <input class="search_input" type="text" name="keyword" placeholder="Cari Skripsi...">
      <button class="search_icon"><i class="fas fa-search"></i></button>
    </form>
  </div>
  <br>
  <div class="container">
    <?php if (count($skripsi) < 1) : ?>
      <h3 class="text-center">Tidak Ada Data.</h3>
    <?php else : ?>
      <?php foreach ($skripsi as $skripsii) : ?>
        <?php if ($skripsii['status'] == "acc") : ?>
          <a href="<?= base_url(); ?>Chasil_skripsi/detail/<?= $skripsii['id']; ?>" class="list"><?= $skripsii['judul'] ?></a>
          <p><?= $skripsii['npm'] ?> - <a class="text-success"><?= $skripsii['nama_mhs'] ?></a> - <?= date("d M Y", strtotime($skripsii['tgl_upload'])); ?></p><br>
        <?php endif; ?>
      <?php endforeach; ?>
    <?php endif; ?>
    <?= $halaman; ?>
  </div>