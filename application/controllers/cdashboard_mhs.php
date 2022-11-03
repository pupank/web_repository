<?php

class Cdashboard_mhs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_keamanan');
        $this->m_keamanan->keamanan();
    }

    public function index()
    {
        $data['judul'] = "Halaman Dashboard Mahasiswa";
        $data['dosen'] = $this->db->get('tb_dosen')->result_array();
        $data['mahasiswa'] = $this->db->get('tb_mhs')->result_array();
        $data['user'] = $this->db->get_where('tb_mhs', ['npm' => $this->session->userdata('npm')])->row_array();
        $this->load->view('anggota/template/header', $data);
        $this->load->view('anggota/template/sidebar', $data);
        $this->load->view('anggota/utama_anggota/dashboard', $data);
        $this->load->view('anggota/template/footer');
    }

    public function upload_foto()
    {
        if (isset($_POST['submit'])) {

            $config['upload_path']          = './asset/upload/foto_sidang';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $config['max_size']             = '200000';
            $config['max_width']              = '200000';
            $config['overwrite']            = TRUE;

            $this->load->library('upload', $config);


            //file 1
            if (!empty($_FILES['foto'])) {
                $this->upload->do_upload('foto');
                $data1 = $this->upload->data();
                $foto = $data1['file_name'];
            }

            $data = array(
                'npm'           => $this->input->post('npm'),
                'foto_sidang'   => $foto
            );

            $this->db->where('npm', $this->input->post('npm'));
            $this->db->update('tb_mhs', $data);
            redirect('cdashboard_mhs');
        } else {
            $this->index();
        }
    }
}
