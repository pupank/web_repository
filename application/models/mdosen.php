<?php

class Mdosen extends CI_Model
{

    public function getAllDosen()
    {
        return $this->db->get('tb_dosen')->result_array();
    }

    public function tambahDataDosen()
    {
        $data = [
            "nip" => htmlspecialchars($this->input->post('nip', true)),
            "nama_dosen" => htmlspecialchars($this->input->post('nm_dosen', true)),
            "pangkat" => $this->input->post('pangkat', true),
            "golongan" => $this->input->post('golongan', true),
            "jabatan" => $this->input->post('jabatan', true)
        ];

        $this->db->insert('tb_dosen', $data);
    }

    public function hapusDataDosen($nip)
    {
        $this->db->where('nip', $nip);
        $this->db->delete('tb_dosen');
    }

    public function getDosenById($nip)
    {
        return $this->db->get_where('tb_dosen', ['nip' => $nip])->row_array();
    }

    public function ubahDataDosen()
    {
        $data = [
            "nip" => $this->input->post('nip', true),
            "nama_dosen" => $this->input->post('nm_dosen', true),
            "pangkat" => $this->input->post('pangkat', true),
            "golongan" => $this->input->post('golongan', true),
            "jabatan" => $this->input->post('jabatan', true)
        ];

        $this->db->where('nip', $this->input->post('nip'));
        $this->db->update('tb_dosen', $data);
    }
}
