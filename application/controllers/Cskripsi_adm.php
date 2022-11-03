<?php

class Cskripsi_adm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mskripsi');
        $this->load->model('m_keamanan');
        $this->m_keamanan->keamanan();

        $user = $this->session->userdata('username');
        if (empty($user)) {
            /* $this->session->sess_destroy(); */
            redirect('CHome/error');
        }
    }

    public function index()
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['skripsi'] = $this->mskripsi->getAllSkripsi();
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/utama_admin/data_skripsi', $data);
    }

    public function acc($id)
    {
        $this->mskripsi->ubahStatus();
        $this->session->set_flashdata('flash', 'Di Acc');
        redirect('Cskripsi_adm');
    }
}
