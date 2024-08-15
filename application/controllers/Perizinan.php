<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perizinan extends CI_Controller
{
    public function izin_akses()
    {
        $id_user = $this->session->userdata('id_user');
        $id_buku = $this->input->post('id_buku');

        $data = array(
            'id_user' => $id_user,
            'id_buku' => $id_buku,
            'tanggal' => date('Y-m-d'),
            'status' => 'pending',
        );
        $this->db->insert('izin', $data);
        redirect('detail', $id_buku);
    }
    public function perizinan()
    {
        $data = array(
            'izin' => $this->db->get()->result_array()
        );
        $this->load->view('admin/perizinan', $data);
    }
    public function update_izin()
    {
        $id_izin = $this->input->post('id_izin');
        $status = $this->input->post('status');
        $keterangan = $this->input->post('keterangan');
        $tanggal = date('Y-m-d');
        $id_petugas = $this->session->userdata('id_user');
        $data = array(
            'status' => $status,
            'keterangan' => $keterangan,
            'tanggal' => $tanggal,
            'id_petugas' => $id_petugas
        );
        $this->db->where('id_izin', $id_izin);
        $this->db->update('izin', $data);
        redirect('admin/buku/perizinan');
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
}
