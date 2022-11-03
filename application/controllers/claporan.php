<?php

class Claporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_keamanan');
        $this->m_keamanan->keamanan();
        $this->load->model('mlaporan');

        $user = $this->session->userdata('username');
        if (empty($user)) {
            /* $this->session->sess_destroy(); */
            redirect('CHome/error');
        }
    }

    public function index()
    {
        $data['judul'] = 'Halaman Laporan';
        $data['admin'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['skripsi'] = $this->mlaporan->getAllSkripsi();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/utama_admin/laporan');
        $this->load->view('admin/templates/footer');
    }

    public function cetakpdf() //cetaklaporan format pdf
    {
        $data['data'] = $this->mlaporan->getAllSkripsi();
        $this->load->view('admin/utama_admin/cetaklaporan', $data);
    }
}
