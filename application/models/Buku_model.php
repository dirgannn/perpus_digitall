<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function delete_buku($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');
    }
    public function update_buku($id_buku, $data)
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->update('buku', $data);
    }
    public function get_kategori()
    {
        $query = $this->db->get('kategori_buku');
        return $query->result_array();
    }
    public function delete_kategori($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori_buku');
    }
    public function update_kategori($id, $data)
    {
        $this->db->where('id_kategori', $id);
        $this->db->update('kategori_buku', $data);
    }

    public function get_buku($id_buku)
    {
        $this->db->where('id_buku', $id_buku);
        return $this->db->get('buku')->row_array();
    }

    // simpan permintaan akses
    public function izin_akses($data)
    {
        return $this->db->insert('izin', $data);
    }

    // ambil semua permintaan akses

    public function get_izin_akses()
    {
        return $this->db->get('izin')->result_array();
    }

    // update status perizinan

    public function update_izin_akses($id, $status, $keterangan, $tanggal, $id_petugas)
    {
        $this->db->where('id_izin', $id);
        return $this->db->update('izin', array('status' => $status, 'keterangan' => $keterangan, 'tanggal' => $tanggal, 'id_petugas' => $id_petugas));
    }

    public function get_status_diterima($id_buku, $id_user)
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->where('id_user', $id_user);
        return $this->db->get('izin')->row_array();
    }
}
