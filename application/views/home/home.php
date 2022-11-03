<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="search-box">
    <form action="<?= base_url('Chasil_skripsi'); ?>" method="post">
        <input type="text" name="keyword" class="search-txt" placeholder="Cari Skripsi..." />
        <button class="search-btn">
            <i class="fas fa-search"></i>
        </button>
    </form>
</div> 