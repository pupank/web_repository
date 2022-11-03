<?php

class CLogin_mhs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mlogin');
        $this->load->model('m_keamanan');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Login Anggota';
        $this->load->view('login/header_login', $data);
        $this->load->view('login/login_mahasiswa');
        $this->load->view('login/footer_login');
        $this->m_keamanan->keamanan2();
    }

    public function getlogin()
    {
        $this->_login();
    }

    private function _login()
    {
        $npm        = $this->input->post('npm');
        $password   = $this->input->post('password');

        $mhs = $this->db->get_where('tb_mhs', ['npm' => $npm])->row_array();

        if ($mhs) {
            //user ada
            //cek password
            if (password_verify($password, $mhs['password']) || $password == $mhs['password']) {
                $data = [
                    'npm' => $mhs['npm']
                ];
                $this->session->set_userdata($data);
                redirect('cdashboard_mhs');
            } else {
                $this->session->set_flashdata('info', 'Maaf password anda salah');
                redirect('Clogin_mhs');
            }
        } else {
            $this->session->set_flashdata('info', 'Maaf Npm tidak terdaftar');
            redirect('Clogin_mhs');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('flash', 'Keluar');
        redirect('CHome');
    }
}
