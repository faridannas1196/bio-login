<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check_login($email, $password) {
        $query = $this->db->get_where('users', array('email' => $email, 'password' => $password));

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function is_registered($email) {
        // Query untuk memeriksa apakah email terdaftar
        $query = $this->db->get_where('users', array('email' => $email));
        return $query->num_rows() > 0;
    }

    public function generate_otp($email) {
        // Generate OTP acak (contoh sederhana)
        $otp = rand(100000, 999999);

        // Simpan OTP ke dalam database atau sesuai kebutuhan aplikasi Anda
        $data = array(
            'email' => $email,
            'otp' => $otp,
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('otp_table', $data);

        return $otp;
    }

    public function check_otp($email, $otp) {
        // Periksa apakah OTP yang dimasukkan pengguna cocok dengan yang disimpan di database
        $query = $this->db->get_where('users', array('email' => $email, 'otp' => $otp));
        return $query->num_rows() > 0;
    }

    // Metode untuk mendapatkan informasi pengguna berdasarkan ID
    public function get_user_by_id($user_id) {
        $query = $this->db->get_where('users', array('id' => $user_id));

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    // application/models/User_model.php

public function get_user_data_by_name($name) {
    $query = $this->db->get_where('identitas', array('nama' => $name));

    if ($query->num_rows() > 0) {
        return $query->row_array();
    } else {
        return false;
    }
}

public function get_identitas() {
    return $this->db->get('identitas')->result_array();
}

public function update_identitas($name, $identitasData) {
    $this->db->where('nama', $name);
    $this->db->update('identitas', $identitasData);
}

public function insert_user($data) {
    return $this->db->insert('users', $data);
}

public function check_email_exists($email) {
    $this->db->where('email', $email);
    $query = $this->db->get('users');
    return $query->num_rows() > 0;
}

public function is_registere($email) {
    $this->db->where('email', $email);
    $query = $this->db->get('users');
    return $query->num_rows() > 0;
}

public function simpan_data($data) {
    $this->db->insert('identitas', $data);
    return ($this->db->affected_rows() != 1) ? false : true;
}   

public function delete_identity($id) {
    $this->db->where('id', $id);
    $this->db->delete('identitas');
}
}


