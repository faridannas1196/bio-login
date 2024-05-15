<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('user_model'); // Load model di sini
    }

    public function index() {
        $data['message'] = $this->session->flashdata('message');
        $this->load->view('login', $data);
    }

    public function process_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
    
        if (empty($email) || empty($password)) {
            // Jika email atau password kosong
            $this->session->set_flashdata('message', 'Email dan password harus diisi.');
            redirect('login');
        }
    
        // Gunakan model untuk validasi login
        $user_data = $this->user_model->check_login($email, $password);
    
        if ($user_data) {
            $this->session->set_userdata('user_data', $user_data);
            $this->session->set_flashdata('message', 'Login berhasil!');
            redirect('beranda/index');
        } else {
            // Check if email is registered
            $is_registered = $this->user_model->is_registered($email);
    
            if ($is_registered) {
                // Jika password salah
                $this->session->set_flashdata('message', 'Password salah.');
            } else {
                // Jika email tidak terdaftar
                $this->session->set_flashdata('message', 'Akun dengan email tersebut tidak terdaftar.');
            }
            redirect('login');
        }
    } 
    


    public function logout() {
        $this->session->unset_userdata('user_data');
        $this->session->set_flashdata('message', 'Logout berhasil!');
        redirect('login');
    }
}
