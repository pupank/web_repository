<?php
class Mlaporan extends CI_Model
{
    public function getAllSkripsi()
    {
        $data = "SELECT tb_skripsi.id, tb_mhs.npm, tb_mhs.nama_mhs, tb_skripsi.judul,tb_skripsi.tgl_upload,tb_skripsi.tgl_sidang,tb_skripsi.abstrak,tb_skripsi.jurnal,tb_skripsi.laporan,tb_skripsi.status,
                (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pemb1) as pemb1,
                (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pemb2) as pemb2,
                (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.ketua) as ketua, 
                (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.sekretaris) as seks, 
                (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pengu1) as pengu1,
                (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pengu2) as pengu2

                FROM tb_mhs JOIN tb_skripsi on tb_mhs.npm = tb_skripsi.npm";

        return $this->db->query($data)->result_array();
    }
}
