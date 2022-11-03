<?php

    class CHome extends CI_Controller{
        
        public function index()
        {
            $data['judul'] = 'Sistem Informasi Repository Skripsi';
            $this->load->model('m_keamanan');
            $this->m_keamanan->keamanan2();
            $this->load->view('home/header', $data);
            $this->load->view('home/home');
            $this->load->view('home/footer');
        }

        public function error(){
            $this->load->view('error');
        }
    }
