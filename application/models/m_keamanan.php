<?php

class M_keamanan extends CI_Model
{

    public function keamanan()
    {
        $username = $this->session->userdata('username');
        $npm = $this->session->userdata('npm');
        if (empty($username || $npm)) {
            $this->session->sess_destroy();
            redirect('CHome');
        }
    }

    public function keamanan2()
    {
        $username = $this->session->userdata('username');
        $npm = $this->session->userdata('npm');
        if ($username == TRUE) {
            redirect('CUtama_adm');
        } elseif ($npm == TRUE) {
            redirect('cdashboard_mhs');
        }
    }

    /*     public function hak_akses()
    {
        $username = $this->session->userdata('username');
        $npm = $this->session->userdata('npm');
        $menu = $this->uri->segment(1);

        if
    } */
}
