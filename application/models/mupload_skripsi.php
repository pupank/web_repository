<?php

class Mupload_skripsi extends CI_Model
{
    public function getAllDosen()
    {
        return $this->db->get('tb_dosen')->result_array();
    }

    public function get_id($id)
    {
        $this->db->from('tb_skripsi');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query;
    }

    public function ambilData()
    {
        $data = "SELECT tb_skripsi.id, tb_mhs.npm, tb_mhs.nama_mhs, tb_skripsi.judul,tb_skripsi.tgl_upload,tb_skripsi.tgl_sidang,tb_skripsi.abstrak,tb_skripsi.jurnal,tb_skripsi.laporan,tb_skripsi.status, 
            (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pemb1) as pemb1, 
            (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pemb2) as pemb2,
            (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.ketua) as ketua, 
            (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.sekretaris) as seks, 
            (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pengu1) as pengu1, 
            (select nama_dosen from tb_dosen where tb_dosen.nip=tb_skripsi.pengu2) as pengu2 

            FROM tb_mhs JOIN tb_skripsi on tb_mhs.npm = tb_skripsi.npm
            WHERE tb_skripsi.npm='$_SESSION[npm]'";

        return $this->db->query($data)->result_array();
    }

    public function tambahDataSkripsi()
    {
        if (isset($_POST['submit'])) {

            $config['upload_path']          = './asset/upload/file';
            $config['allowed_types']        = 'pdf|docx|doc';
            $config['max_size']             = '200000';
            $config['max_width']              = '200000';
            $config['overwrite']            = TRUE;

            $this->load->library('upload', $config);


            //file 1
            if (!empty($_FILES['jurnal'])) {
                $this->upload->do_upload('jurnal');
                $data1 = $this->upload->data();
                $jurnal = $data1['file_name'];
            }

            //file2
            if (!empty($_FILES['laporan'])) {
                $this->upload->do_upload('laporan');
                $data2 = $this->upload->data();
                $laporan = $data2['file_name'];
            }

            $data = array(
                'npm'        => $this->input->post('npm'),
                'pemb1'            => $this->input->post('pemb1'),
                'pemb2'            => $this->input->post('pemb2'),
                'ketua'            => $this->input->post('ketua'),
                'sekretaris'       => $this->input->post('sekretaris'),
                'pengu1'           => $this->input->post('pengu1'),
                'pengu2'           => $this->input->post('pengu2'),
                'judul'            => $this->input->post('judul'),
                'tgl_upload'       => date("Y-m-d"),
                'tgl_sidang'       => $this->input->post('tgl_sidang'),
                'abstrak'          => $this->input->post('abstrak'),
                'jurnal'           => $jurnal,
                'laporan'          => $laporan,
                'status'           => 'belum'
            );

            $this->db->insert('tb_skripsi', $data);
        } else {
            $this->index();
        }
    }

    public function ubahDataSkripsi()
    {
        $isi['user'] = $this->db->get_where('tb_skripsi', ['npm' => $this->session->userdata('npm')])->row_array();
        if (isset($_POST['submit'])) {

            $config['upload_path']          = './asset/upload/file';
            $config['allowed_types']        = 'pdf|docx';
            $config['max_size']             = '200000';
            $config['max_width']              = '200000';
            $config['overwrite']            = TRUE;

            $this->load->library('upload', $config);


            //file 1
            if (!empty($_FILES['jurnal'])) {
                if ($this->upload->do_upload('jurnal')) {

                    $file_lama = $isi['user']['jurnal'];
                    unlink(FCPATH . 'asset/upload/file/' . $file_lama);

                    $data1 = $this->upload->data();
                    $jurnal = $data1['file_name'];
                    $data_baru1 = [
                        "jurnal" => $jurnal
                    ];
                    $this->db->where('npm', $this->input->post('npm'));
                    $this->db->update('tb_skripsi', $data_baru1);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //file2
            if (!empty($_FILES['laporan'])) {
                if ($this->upload->do_upload('laporan')) {

                    $file_lama = $isi['user']['laporan'];
                    unlink(FCPATH . 'asset/upload/file/' . $file_lama);

                    $data2 = $this->upload->data();
                    $laporan = $data2['file_name'];
                    $data_baru2 = [
                        "laporan" => $laporan
                    ];
                    $this->db->where('npm', $this->input->post('npm'));
                    $this->db->update('tb_skripsi', $data_baru2);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'npm'        => $this->input->post('npm'),
                'pemb1'            => $this->input->post('pemb1'),
                'pemb2'            => $this->input->post('pemb2'),
                'ketua'            => $this->input->post('ketua'),
                'sekretaris'       => $this->input->post('sekretaris'),
                'pengu1'            => $this->input->post('pengu1'),
                'pengu2'            => $this->input->post('pengu2'),
                'judul'                => $this->input->post('judul'),
                'tgl_upload'        => date("Y-m-d"),
                'tgl_sidang'        => $this->input->post('tgl_sidang'),
                'abstrak'            => $this->input->post('abstrak'),
                'status'            => 'belum'
            );
            $this->db->where('npm', $this->input->post('npm'));
            $this->db->update('tb_skripsi', $data);
        } else {
            $this->index();
        }
    }

    public function upload_foto()
    {
        $data = [
            "npm" => htmlspecialchars($this->input->post('npm', true)),
            "foto_sidang" => $this->input->post('foto')
        ];

        $this->db->where('npm', $this->input->post('npm'));
        $this->db->update('tb_mhs', $data);
    }
}
