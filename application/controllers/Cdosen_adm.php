<?php

class Cdosen_adm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdosen');
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
        $data['dosen'] = $this->mdosen->getAllDosen();
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/utama_admin/data_dosen', $data);
    }

    public function tambah()
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['pangkat'] = ['Penata Muda', 'Penata Muda Tk 1', 'Penata', 'Penata Tk 1', 'Pembina', 'Pembina Tk 1', 'Pembina Utama Muda', 'Pembina Utama Madya', 'Pembina Utama'];
        $data['golongan'] = ['III/A', 'III/B', 'III/C', 'III/D', 'IV/A', 'IV/B', 'IV/C', 'IV/D', 'IV/E'];
        $data['jabatan'] = ['Asisten Ahli', 'Lektor', 'Lektor Kepala', 'Guru Besar / Profesor'];

        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric|exact_length[18]|is_unique[tb_dosen.nip]', [
            "is_unique" => "Nip sudah terdaftar !"
        ]);
        $this->form_validation->set_rules('nm_dosen', 'Nama Dosen', 'required|min_length[10]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/utama_admin/tambah_dosen', $data);
        } else {
            $this->mdosen->tambahDataDosen();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Cdosen_adm');
        }
    }

    public function hapus($nip)
    {
        $this->mdosen->hapusDataDosen($nip);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Cdosen_adm');
    }

    public function ubah($nip)
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['dosen'] = $this->mdosen->getDosenById($nip);
        $data['pangkat'] = ['Penata Muda', 'Penata Muda Tk 1', 'Penata', 'Penata Tk 1', 'Pembina', 'Pembina Tk 1', 'Pembina Utama Muda', 'Pembina Utama Madya', 'Pembina Utama'];
        $data['golongan'] = ['III/A', 'III/B', 'III/C ', 'III/D ', 'IV/A', 'IV/B', 'IV/C', 'IV/D', 'IV/E'];
        $data['jabatan'] = ['Asisten Ahli', 'Lektor', 'Lektor Kepala ', 'Guru Besar /  Profesor'];

        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('nm_dosen', 'Nama Dosen', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/utama_admin/ubah_dosen', $data);
        } else {
            $this->mdosen->ubahDataDosen();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Cdosen_adm');
        }
    }

    public function cetakpdf() //cetaklaporan format pdf
    {
        $data['data'] = $this->mdosen->getAllDosen();
        $this->load->view('admin/utama_admin/laporan_dosen', $data);
    }
}
