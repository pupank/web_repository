<?php
class Mpetugas extends CI_Model
{
    public function getAllPetugas()
    {
        $this->db->select('*');
        $this->db->from('tb_admin');
        $this->db->where('level !=', 'admin');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPetugasById($id_admin)
    {
        return $this->db->get_where('tb_admin', ['id_admin' => $id_admin])->row_array();
    }

    public function tambahData()
    {
        $data = [
            "username" => htmlspecialchars($this->input->post('username', true)),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "level" => "petugas"
        ];

        $this->db->insert('tb_admin', $data);
    }

    public function ubahData()
    {
        $data = [
            "username" => htmlspecialchars($this->input->post('username', true)),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];

        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('tb_admin', $data);
    }


    public function hapusData($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        $this->db->delete('tb_admin');
    }
}
