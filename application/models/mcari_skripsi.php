<?php

class Mcari_skripsi extends CI_Model
{

    public function getAllSkripsi($perpage, $offset)
    {
        $this->db->select('tb_skripsi.*, tb_mhs.npm AS npm, tb_mhs.nama_mhs');
        $this->db->join('tb_mhs', 'tb_skripsi.npm = tb_mhs.npm');
        $this->db->from("tb_skripsi");
        $this->db->limit($perpage, $offset);
        $query = $this->db->get();
        return $query->result_array();

        /* return $this->db->query($data, $perpage, $offset)->result_array(); */
    }

    public function cariDataSkripsi()
    {
        $keyword = $this->input->post('keyword', true);
        $data = "SELECT tb_skripsi.id, tb_mhs.npm, tb_mhs.nama_mhs, tb_skripsi.judul,tb_skripsi.tgl_upload,tb_skripsi.tgl_sidang,tb_skripsi.abstrak,tb_skripsi.jurnal,tb_skripsi.laporan,tb_skripsi.status, 
        (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pemb1) as pemb1, 
        (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pemb2) as pemb2,
        (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.ketua) as ketua, 
        (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.sekretaris) as seks, 
        (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pengu1) as pengu1, 
        (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pengu2) as pengu2 

        FROM tb_mhs JOIN tb_skripsi on tb_mhs.npm = tb_skripsi.npm 
        WHERE tb_skripsi.judul like '%$keyword%' ORDER BY judul ASC LIMIT 10";

        return $this->db->query($data)->result_array();
    }

    public function detailSkripsiById($id)
    {
        $data = "SELECT tb_skripsi.id, tb_mhs.npm, tb_mhs.nama_mhs, tb_skripsi.judul,tb_skripsi.tgl_upload,tb_skripsi.tgl_sidang,tb_skripsi.abstrak,tb_skripsi.jurnal,tb_skripsi.laporan,tb_skripsi.status, 
            (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pemb1) as pemb1, 
            (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pemb2) as pemb2, 
            (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.ketua) as ketua, 
            (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.sekretaris) as seks, 
            (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pengu1) as pengu1, 
            (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pengu2) as pengu2 

            FROM tb_mhs JOIN tb_skripsi on tb_mhs.npm = tb_skripsi.npm
            WHERE tb_skripsi.id ='$id'";

        return $this->db->query($data)->result_array();
    }

    public function download($id)
    {
        $query = $this->db->get_where('tb_skripsi', array('id' => $id));
        return $query->row_array();
    }
}
