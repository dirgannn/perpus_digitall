<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        // $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $this->db->from('buku');
        $this->db->order_by('id_buku', 'ASC');
        $buku = $this->db->get()->result_array();

        $data = array(
            'buku' => $buku,
        );
        $this->load->view('index', $data);
    }
    public function detail($id_buku)
    {
        $this->load->model('Buku_model');
        $this->load->model('Rating_model');

        $buku = $this->Buku_model->get_buku($id_buku);
        $rata_rata_rating = $this->Rating_model->get_rata_rata_rating($buku['id_buku']);
        $id_user = $this->session->userdata('id_user'); // Ambil id_user dari session

        $data = array(
            'rata_rata_rating' => $rata_rata_rating,
            'buku' => $buku,
            'id_user' => $id_user,
            'status_diterima' => $this->Buku_model->get_status_diterima($id_buku, $id_user)
        );

        $this->load->view('detail_buku', $data);
    }
}
