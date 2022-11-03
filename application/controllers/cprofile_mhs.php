<?php

    class Cprofile_mhs extends CI_Controller
    {

        public function __construct(){
            parent::__construct();
            $this->load->model('mprofile_mhs');
            $this->load->library('form_validation');
            $this->load->model('m_keamanan');
            $this->m_keamanan->keamanan();
        }

        public function index()
        {
            $data['judul'] = "Halaman Profile Mahasiswa";
            $data['user'] = $this->db->get_where('tb_mhs', ['npm' => $this->session->userdata('npm')])->row_array();
            $this->load->view('anggota/template/header', $data);
            $this->load->view('anggota/template/sidebar', $data);
            $this->load->view('anggota/utama_anggota/profile', $data);
            $this->load->view('anggota/template/footer');
        }

        public function ubah()
        {
            $this->mprofile_mhs->ubahProfile();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('cprofile_mhs');
        }
        
        public function ubahpassword()
        {
            $this->mprofile_mhs->gantipassword();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('cprofile_mhs');
        }
    }
    

?>