<?php

class Cpetugas_adm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mpetugas');
        $this->load->library('form_validation');
        $this->load->model('m_keamanan');
        $this->m_keamanan->keamanan();

        $user = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        if (empty($user) || $level != 'admin') {
            /* $this->session->sess_destroy(); */
            redirect('CHome/error');
        }
    }
    public function index()
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->mpetugas->getAllPetugas();
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/utama_admin/data_petugas', $data);
    }

    public function tambah()
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('username', 'username', 'required|min_length[5]|is_unique[tb_admin.username]', [
            "is_unique" => "Username sudah terdaftar !"
        ]);
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/utama_admin/tambah_petugas');
        } else {
            $this->mpetugas->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Cpetugas_adm');
        }
    }

    public function ubah($id_admin)
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->mpetugas->getPetugasById($id_admin);
        $this->form_validation->set_rules('username', 'username', 'required|min_length[5]');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/utama_admin/ubah_petugas', $data);
        } else {
            $this->mpetugas->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Cpetugas_adm');
        }
    }

    public function hapus($id_admin)
    {
        $this->mpetugas->hapusData($id_admin);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Cpetugas_adm');
    }
}
