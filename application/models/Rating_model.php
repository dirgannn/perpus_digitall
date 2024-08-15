<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rating_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function simpan_rating($id_user, $id_buku, $rating)
    {
        $data = array(
            'id_user' => $id_user,
            'id_buku' => $id_buku,
            'rating' => $rating,
        );
        $this->db->insert('ulasan', $data);
    }

    public function get_rata_rata_rating($id_buku)
    {
        $this->db->select_avg('rating');
        $this->db->where('id_buku', $id_buku);
        $query = $this->db->get('ulasan');
        return $query->row()->rating;
    }
}
