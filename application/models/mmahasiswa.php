<?php

class Mmahasiswa extends CI_Model
{

    public function getAllMahasiswa()
    {
        return $this->db->get('tb_mhs')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "npm" => htmlspecialchars($this->input->post('npm', true)),
            "password" => $this->input->post('password', true),
            "nama_mhs" => htmlspecialchars($this->input->post('nama_mhs', true)),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "th_angkatan" => $this->input->post('th_angkatan', true) . "-08-01",
            "fak_mhs" => $this->input->post('fakultas', true),
            "jur_mhs" => $this->input->post('jurusan', true),
            "prodi_mhs" => $this->input->post('prodi', true),
            "alamat" => $this->input->post('alamat', true),
        ];

        $this->db->insert('tb_mhs', $data);
    }

    public function hapusDataMahasiswa($npm)
    {
        $this->db->where('npm', $npm);
        $this->db->delete('tb_mhs');
    }

    public function getMhsById($npm)
    {
        return $this->db->get_where('tb_mhs', ['npm' => $npm])->row_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "npm" => $this->input->post('npm', true),
            "password" => $this->input->post('password', true),
            "nama_mhs" => $this->input->post('nama_mhs', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "th_angkatan" => $this->input->post('th_angkatan', true) . "-08-01",
            "fak_mhs" => $this->input->post('fakultas', true),
            "jur_mhs" => $this->input->post('jurusan', true),
            "prodi_mhs" => $this->input->post('prodi', true),
            "alamat" => $this->input->post('alamat', true),
            "foto_mhs" => $this->input->post('foto', true)
        ];

        $this->db->where('npm', $this->input->post('npm'));
        $this->db->update('tb_mhs', $data);
    }
}
