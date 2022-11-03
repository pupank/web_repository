<?php

    class Mprofile_mhs extends CI_Model
    {
        public function ubahProfile()
        {
        $isi['user'] = $this->db->get_where('tb_mhs', ['npm' => $this->session->userdata('npm')])->row_array();
            if (isset($_POST['submit'])) {

                $config['upload_path']          = './asset/upload/foto';
                $config['allowed_types']        = 'png|jpg|jpeg';
                $config['max_size']             = '200000';
                $config['max_width']              = '200000';
                $config['overwrite']            = true;

                $this->load->library('upload', $config);

                if (!empty($_FILES['foto_mhs'])) {
                    if ($this->upload->do_upload('foto_mhs')) {

                        $foto_lama = $isi['user']['foto_mhs'];
                        unlink(FCPATH . 'asset/upload/foto/' . $foto_lama);

                        $foto = $this->upload->data('file_name');
                        $data = [
                            "foto_mhs" => $foto
                        ];
                        $this->db->where('npm', $this->input->post('npm'));
                        $this->db->update('tb_mhs', $data);
                    }else {
                        echo $this->upload->display_errors();
                    }
                }


            $data = [
                "npm" => htmlspecialchars($this->input->post('npm', true)),
                "nama_mhs" => htmlspecialchars($this->input->post('nama_mhs', true)),
                "fak_mhs" => $this->input->post('fakultas_mhs', true),
                "jur_mhs" => $this->input->post('jurusan_mhs', true),
                "prodi_mhs" => $this->input->post('prodi_mhs', true),
                "alamat" => $this->input->post('alamat', true)
            ];

            $this->db->where('npm', $this->input->post('npm'));
            $this->db->update('tb_mhs', $data);
        } else {
                $this->index();
		}	
        }

        public function gantipassword()
        {
            $data = [
                "npm" => htmlspecialchars($this->input->post('npm', true)),
                "password" =>password_hash($this->input->post('password'),PASSWORD_DEFAULT)
            ];
            
            $this->db->where('npm', $this->input->post('npm'));
            $this->db->update('tb_mhs', $data);
        }
    }
