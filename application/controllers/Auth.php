<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/login');
    }
    public function register()
    {
        $this->load->view('admin/register');
    }
    public function register_proses()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->row_array();
        if (empty($cek)) {
            $data = array(
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'alamat' => $alamat,
                'level' => 'Member',
            );
            $this->db->insert('user', $data);
            redirect('auth');
        } else {
            echo 'username ini sudah digunakan';
        }
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user');
        $this->db->where('username', $username)->where('password', $password);
        $data = $this->db->get()->row();
        if ($data == NULL) {
            echo 'username atau password salah';
        } else {
            $this->db->where('id_user', $data->id_user);
            $userdata = array(
                'id_user' => $data->id_user,
                'username' => $data->username,
                'password' => $data->password,
                'level' => $data->level
            );
            $this->session->set_userdata($userdata);
            if ($data->level == 'Admin') {
                redirect('admin/home');
            } else if ($data->level == 'Member') {
                redirect('beranda');
            } else {
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
