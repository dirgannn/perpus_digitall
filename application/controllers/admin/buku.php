<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != 'Admin' && $this->session->userdata('level') != 'Petugas') {
            redirect('auth');
        }

        $this->load->model('buku_model');
    }
    public function index()
    {
        $this->db->from('buku');
        $this->db->order_by('id_buku', 'ASC');
        $buku = $this->db->get()->result_array();
        $data = array(
            'judul halaman' => 'yahahah',
            'buku' => $buku,
        );
        $this->load->view('admin/buku', $data);
    }


    public function kategori_buku()
    {
        $this->db->from('kategori_buku');
        $this->db->order_by('id_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul halaman' => 'lwllwlw',
            'kategori' => $kategori,
        );
        $this->load->view('admin/kategori_buku', $data);
    }
    public function tambah_kategori()
    {

        $this->load->view('admin/tambah_kategori');
    }
    public function tambah_kategori1()
    {
        $nama_kategori = $this->input->post('nama_kategori');
        $this->db->from('kategori_buku')->where('nama_kategori', $nama_kategori);
        $cek = $this->db->get()->result_array();

        if (empty($cek)) {
            $data = array(
                'nama_kategori' => $nama_kategori
            );
            // flashdata
            $this->db->insert('kategori_buku', $data);
            redirect('admin/buku/kategori_buku');
        } else {
            echo 'hahahahh';
        }
    }
    public function pendataan_buku()
    {
        $this->db->from('buku');
        $this->db->order_by('id_buku', 'ASC');
        $buku = $this->db->get()->result_array();
        $data = array(
            'judul halaman' => 'asbhxax',
            'buku' => $buku,
        );
        $this->load->view('admin/pendataan_buku', $data);
    }
    public function tambah_buku()
    {
        $this->load->model('Buku_model');
        $data = array(
            'kategori' => $this->Buku_model->get_kategori()
        );
        $this->load->view('admin/tambah_buku', $data);
    }
    public function tambah_buku1()
    {
        // Load library dan helper yang diperlukan
        $this->load->library('upload');
        $this->load->helper('url');

        $judul_buku = $this->input->post('judul_buku');
        $penulis = $this->input->post('penulis');
        $penerbit = $this->input->post('penerbit');
        $sinopsis = $this->input->post('sinopsis');
        $tahun_terbit = $this->input->post('tahun_terbit');
        $kategori = $this->input->post('kategori_id');
        $this->db->from('buku');
        $this->db->where('judul', $judul_buku);
        $cek = $this->db->get()->result_array();

        if (empty($cek)) {
            $config['upload_path'] = './assets/uploads/covers/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('cover')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                return;
            } else {
                $cover_data = $this->upload->data();
                $cover_path = $cover_data['file_name'];
            }
            $config['upload_path'] = './assets/uploads/files/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 10240;

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                return;
            } else {
                $file_data = $this->upload->data();
                $file_path = $file_data['file_name'];
            }
            $data = array(
                'judul' => $judul_buku,
                'penulis' => $penulis,
                'penerbit' => $penerbit,
                'sinopsis' => $sinopsis,
                'tahun_terbit' => $tahun_terbit,
                'id_kategori' => $kategori,
                'cover' => $cover_path,
                'file' => $file_path,
            );
            // flashdata
            $this->db->insert('buku', $data);
            redirect('admin/buku/pendataan_buku');
        } else {
            echo 'hahaha buku sudah ada';
        }
    }
    public function view_pdf($file_name)
    {
        $this->load->helper('url');
        $file_path = './assets/uploads/files/' . $file_name;
        if (file_exists($file_path)) {
            $this->output
                ->set_content_type('application/pdf')
                ->set_header('Content-Disposition: inline; filename="' . $file_name . '"')
                ->set_output(file_get_contents($file_path));
        } else {
            show_404();
        }
    }

    public function delete_data($id)
    {
        $this->load->model('Buku_model');
        $this->Buku_model->delete_buku($id);
        // setflshdata
        redirect('admin/buku/pendataan_buku');
    }

    public function edit_buku($id_buku)
    {
        $this->load->model('Buku_model');
        $data = array(
            'kategori' => $this->Buku_model->get_kategori(),
            'buku' => $this->db->get_where('buku', array('id_buku' => $id_buku))->row_array()
        );
        $this->load->view('admin/edit_buku', $data);
    }

    public function update_buku()
    {
        $id_buku = $this->input->post('id_buku');
        $judul_buku = $this->input->post('judul_buku');
        $penulis = $this->input->post('penulis');
        $penerbit = $this->input->post('penerbit');
        $tahun_terbit = $this->input->post('tahun_terbit');
        $kategori = $this->input->post('kategori');
        $data = array(
            'id_buku' => $id_buku,
            'judul' => $judul_buku,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'tahun_terbit' => $tahun_terbit,
            'id_kategori' => $kategori,
        );
        // flashdata
        $this->load->model('Buku_model');
        $this->Buku_model->update_buku($id_buku, $data);
        redirect('admin/buku/pendataan_buku');
    }

    public function detail_buku($id_buku)
    {
        $this->db->from('buku');
        $this->db->where('id_buku', $id_buku);
        $buku = $this->db->get()->row_array();
        $data = array(
            'judul_halaman' => 'detail',
            'buku' => $buku,
        );
        $this->load->view('admin/detail_buku', $data);
    }
    public function delete_kategori($id)
    {
        $this->load->model('Buku_model');
        $this->Buku_model->delete_kategori($id);
        redirect('admin/buku/kategori_buku');
    }
    public function edit_kategori($id_kategori)
    {
        $data = array(
            'kategori' => $this->db->get_where('kategori_buku', array('id_kategori' => $id_kategori))->row_array(),
            'judul_halaman' => 'Inventaris | Edit Kategori',
        );
        $this->load->view('admin/edit_kategori', $data);
    }
    public function edit_kategori1()
    {
        $id_kategori = $this->input->post('id_kategori');
        $nama_kategori = $this->input->post('nama_kategori');
        $data = array(
            'nama_kategori' => $nama_kategori
        );
        $this->load->model('Buku_model');
        $this->Buku_model->update_kategori($id_kategori, $data);
        redirect('admin/buku/kategori_buku');
    }
    public function perizinan()
    {
        $this->load->model('Buku_model');
        $data['izin'] = $this->Buku_model->get_izin_akses();
        $this->load->view('admin/perizinan', $data);
    }
}
