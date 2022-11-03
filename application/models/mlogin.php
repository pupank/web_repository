<?php

class Mlogin extends CI_Model
{

    public function ambillogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('tb_admin');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'username' => $row->username,
                    'password' => $row->password
                );
            }
            $this->session->set_userdata($sess);
            redirect('CUtama_adm');
        } else {
            $this->session->set_flashdata('info', 'Maaf username atau password salah');
            redirect('CLogin_petugas');
        }
    }
}
