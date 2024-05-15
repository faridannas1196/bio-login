<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model'); // Memuat model user
        $this->load->library('form_validation');

    }

    public function index() {
        // Tampilkan halaman registrasi
        $this->load->view('register');
    }

    public function process_register() {
      $data = array(
        'nama' => $this->input->post('nama_depan') . ' ' . $this->input->post('nama_belakang'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password')
    );

    // Periksa apakah password dan konfirmasi password sama
    $password = $this->input->post('password');
    $konfirmasi_password = $this->input->post('konfirmasi_password');
    if ($password !== $konfirmasi_password) {
        $this->session->set_flashdata('error', 'Konfirmasi password tidak sama dengan password.');
        redirect('register');
    }

 

           $email_exists = $this->user_model->check_email_exists($data['email']);
           if ($email_exists) {
            $this->session->set_flashdata('error', 'Email sudah terdaftar. Silakan gunakan email lain.');
            redirect('register'); // Redirect kembali ke halaman registrasi
        } else {
            // Panggil model untuk menyimpan data ke database
            if ($this->user_model->insert_user($data)) {
                $this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
                redirect('login');
            } else {
                $this->session->set_flashdata('error', 'Registrasi gagal! Silakan coba lagi.');
                redirect('register'); // Redirect kembali ke halaman registrasi
            }

            }
            
}
}