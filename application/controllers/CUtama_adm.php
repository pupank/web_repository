<?php

class CUtama_adm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_keamanan');
        $this->m_keamanan->keamanan();

        $user = $this->session->userdata('username');
        if (empty($user)) {
            /*             $this->session->sess_destroy(); */
            redirect('CHome/error');
        }
    }

    public function index()
    {
        $data['judul'] = 'Halaman Utama';
        $data['admin'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['dosen'] = $this->db->get('tb_dosen')->result_array();
        $data['mahasiswa'] = $this->db->get('tb_mhs')->result_array();
        $data['skripsi'] = $this->db->get('tb_skripsi')->result_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/utama_admin/dashboard', $data);
        $this->load->view('admin/templates/footer');
    }

    public function ubahPassword()
    {
        $lama   = $this->input->post('pass_lama');

        $admin = $this->db->get_where('tb_admin', ['password' => $lama])->row_array();
        $pass = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();

        if (password_verify($lama, $pass['password']) || $lama == $pass['password']) {
            //pass benar
            //ganti password
            $data = [
                "password" => password_hash($this->input->post('pass_baru'), PASSWORD_DEFAULT)
            ];

            $this->db->where('id_admin', $this->input->post('id'));
            $this->db->update('tb_admin', $data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('CUtama_adm');
        } else {
            $this->session->set_flashdata('gagal', '<div class="alert alert-danger text-center" role="alert"><b>Maaf password lama tidak cocok!!</b></div>');
            redirect('CUtama_adm');
        }
    }
}
