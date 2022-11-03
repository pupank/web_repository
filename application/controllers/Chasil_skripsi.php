<?php

class Chasil_skripsi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mcari_skripsi');
    }

    public function index($offset = 0)
    {
        $data['judul'] = 'Sistem Informasi Repository Skripsi';

        $data_skripsi = $this->db->get("tb_skripsi");


        $config['total_rows'] = $data_skripsi->num_rows();
        $config['base_url'] = base_url() . 'Chasil_skripsi/index';
        $config['per_page'] = 5;

        //configurasi Bootstrap
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['halaman'] = $this->pagination->create_links();
        $data['offset'] = $offset;
        $data['skripsi'] = $this->mcari_skripsi->getAllSkripsi($config['per_page'], $offset);
        if ($this->input->post('keyword')) {
            $data['skripsi'] = $this->mcari_skripsi->cariDataSkripsi($config['per_page'], $offset);
        }

        $this->load->view('home/header_hskripsi', $data);
        $this->load->view('home/hasil_skripsi', $data);
        $this->load->view('home/footer', $data);
    }

    public function detail($id)
    {
        $data['judul'] = 'Sistem Informasi Repository Skripsi';
        $data['skripsi'] = $this->mcari_skripsi->detailSkripsiById($id);
        $this->load->view('home/header_hskripsi', $data);
        $this->load->view('home/detailskripsi', $data);
        $this->load->view('home/footer', $data);
    }

    public function download($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->mcari_skripsi->download($id);
        $file = 'asset/upload/file/' . $fileinfo['jurnal'];
        force_download($file, NULL);
    }
}
