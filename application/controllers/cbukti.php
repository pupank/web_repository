<?php

class Cbukti extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_keamanan');
        $this->load->model('mupload_skripsi');
        $this->m_keamanan->keamanan();
    }

    public function index()
    {
        $data['judul'] = "Halaman Dashboard Mahasiswa";
        $data['user'] = $this->db->get_where('tb_mhs', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['skripsi'] = $this->mupload_skripsi->ambilData();
        $this->load->view('anggota/template/header', $data);
        $this->load->view('anggota/template/sidebar', $data);
        $this->load->view('anggota/utama_anggota/bukti', $data);
        $this->load->view('anggota/template/footer');
    }

    public function cetak($id){
        $data['data']	= $this->mupload_skripsi->get_id($id);
		$data['skripsi']	= $this->mupload_skripsi->ambilData();

		$this->load->view('anggota/utama_anggota/cetak_bukti', $data);

    }
}
