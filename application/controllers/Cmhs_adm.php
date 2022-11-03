<?php

class Cmhs_adm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mmahasiswa');
        $this->load->model('mskripsi');
        $this->load->library('form_validation');
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
        $data['mahasiswa'] = $this->mmahasiswa->getAllMahasiswa();
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/utama_admin/data_mhs', $data);
    }

    public function tambah()
    {

        $data['admin'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('npm', 'NPM', 'required|exact_length[9]|is_unique[tb_mhs.npm]', [
            "is_unique" => "Npm sudah terdaftar !"
        ]);
        $this->form_validation->set_rules('th_angkatan', 'Tahun Angkatan', 'required|numeric|exact_length[4]|less_than[2017]');
        $this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/utama_admin/tambah_mhs');
        } else {
            $this->mmahasiswa->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Cmhs_adm');
        }
    }

    public function hapus($npm)
    {
        $this->mmahasiswa->hapusDataMahasiswa($npm);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Cmhs_adm');
    }

    public function ubah($npm)
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['mahasiswa'] = $this->mmahasiswa->getMhsById($npm);

        $this->form_validation->set_rules('npm', 'NPM', 'required|exact_length[9]');
        $this->form_validation->set_rules('th_angkatan', 'Tahun Angkatan', 'required|numeric|exact_length[4]');
        $this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/utama_admin/ubah_mhs', $data);
        } else {
            $this->mmahasiswa->ubahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Cmhs_adm');
        }
    }

    public function cetakpdf() //cetaklaporan format pdf
    {
        $data['data'] = $this->mmahasiswa->getAllMahasiswa();
        $this->load->view('admin/utama_admin/laporan_anggota', $data);
    }
}
