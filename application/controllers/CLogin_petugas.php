<?php

class CLogin_petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mlogin');
        $this->load->model('m_keamanan');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Login Admin/Petugas';
        $this->m_keamanan->keamanan2();
        $this->load->view('login/header_login', $data);
        $this->load->view('login/login_petugas');
        $this->load->view('login/footer_login');
    }

    public function getlogin()
    {
        $this->_login();
    }

    private function _login()
    {
        $username        = $this->input->post('username');
        $password   = $this->input->post('password');

        $admin = $this->db->get_where('tb_admin', ['username' => $username])->row_array();

        if ($admin) {
            //user ada
            //cek password
            if (password_verify($password, $admin['password']) || $password == $admin['password']) {
                $data = [
                    'username' => $admin['username'],
                    'level' => $admin['level']
                ];
                $this->session->set_userdata($data);
                redirect('CUtama_adm');
            } else {
                $this->session->set_flashdata('info', 'Maaf password anda salah');
                redirect('Clogin_petugas');
            }
        } else {
            $this->session->set_flashdata('info', 'Maaf username tidak terdaftar');
            redirect('Clogin_petugas');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('CHome');
    }
}
