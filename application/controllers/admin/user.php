<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (($this->session->userdata('level') != 'Admin')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $this->db->from('user');
        $this->db->order_by('id_user', 'ASC');
        $user = $this->db->get()->result_array();

        $data = array(
            'judul_halaman' => 'user bos',
            'user' => $user
        );
        $this->load->view('admin/user', $data);
    }
    public function tambah_user()
    {
        $this->load->view('admin/tbh_user');
    }
    public function tambah_user1()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $level = $this->input->post('level');
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->row();

        if (empty($cek)) {
            $data = array(
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'alamat' => $alamat,
                'level' => $level
            );
            $this->db->insert('user', $data);
        } else {
            echo 'gagal tod';
        }
    }
    public function delete_user($id)
    {
        $this->load->model('User_model');
        $this->User_model->delete_user($id);
        redirect('admin/user');
    }

    public function edit_user($id_user)
    {
        $data = array(
            'user_data' => $this->db->get_where('user', array('id_user' => $id_user))->row_array()
        );
        $this->load->view('admin/edit_user', $data);
    }

    public function update_user()
    {
        $id_user = $this->input->post('id_user');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $level = $this->input->post('level');

        $data = array(
            'id_user' => $id_user,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'alamat' => $alamat,
            'level' => $level
        );
        $this->load->model('User_model');
        $this->User_model->update_user($id_user, $data);
        redirect('admin/user');
    }
}
