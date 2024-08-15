<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function delete_user($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
    public function update_user($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
    }
}
