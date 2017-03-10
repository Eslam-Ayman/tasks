<?php

class userModel extends CI_Model {

    public function addUser($data) {
        $this->db->insert('users', $data);
         return $this->db->insert_id();
    }

    public function login($data) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}
