<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rating extends CI_Controller
{
    public function beri_rating()
    {
        $id_user = $this->input->post('id_user');
        $id_buku = $this->input->post('id_buku');
        $rating = $this->input->post('rating');

        $this->load->model('Rating_model');
        $this->Rating_model->simpan_rating($id_user, $id_buku, $rating);

        // Redirect kembali ke halaman buku
        redirect('perizinan/view/' . $id_buku);
    }
}
