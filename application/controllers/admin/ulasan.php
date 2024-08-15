<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ulasan extends CI_Controller
{
    public function index()
    {
        $this->db->from('ulasan');
        $this->db->order_by('id_ulasan', 'ASC');
        $ulasan = $this->db->get()->result_array();
        $data = array(
            'ulasan' => $ulasan,
        );
        $this->load->view('admin/ulasan', $data);
    }
}
